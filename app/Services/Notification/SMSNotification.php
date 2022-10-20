<?php

namespace App\Services\Notification;

use App\Contracts\Notification\Notification;
use Illuminate\Support\Facades\Log;

class SMSNotification implements Notification
{
    public function send(): void
    {
        Log::debug("SMS Notification");
    }
}
