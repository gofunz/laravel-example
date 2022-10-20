<?php

namespace App\Providers;

use App\Contracts\Notification\Notification;
use App\Http\Controllers\NotificationController;
use App\Services\Notification\BrowserNotification;
use App\Services\Notification\MailNotification;
use App\Services\Notification\SMSNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 依照系統所使用的服務來註冊，假設目前系統是需要使用 Browser 通知時，則註冊 BrowserNotification
        // $this->app->bind(Notification::class, BrowserNotification::class);

        // 特定 Controller 給予對應的 Notification Service
        // $this->app->when(NotificationController::class)
        //     ->needs(Notification::class)
        //     ->give(function () {
        //         return new SMSNotification();
        //     });

        // 特定參數值給予對應的 Notification Service
        $this->app->when(NotificationController::class)
            ->needs(Notification::class)
            ->give(function () {
                Log::debug('Notification Service initialized');
                switch (request()->get('type')) {
                    case 'sms':
                        return new SMSNotification();
                    case 'browser':
                        return new BrowserNotification();
                    default:
                        return new MailNotification();
                }
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
