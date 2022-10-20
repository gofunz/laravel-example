<?php

namespace App\Providers;

use App\Contracts\Notification\Notification;
use App\Services\Notification\BrowserNotification;
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
        $this->app->bind(Notification::class, BrowserNotification::class);
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
