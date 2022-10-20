<?php

namespace App\Services\Notification;

use App\Contracts\Notification\Notification;
use Illuminate\Support\Facades\Log;

class MailNotification implements Notification
{
    public function send(): void
    {
        Log::debug("Mail Notification");
    }
}
