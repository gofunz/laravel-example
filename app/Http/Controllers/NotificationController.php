<?php

namespace App\Http\Controllers;

use App\Contracts\Notification\Notification;

class NotificationController extends Controller
{

    public function __construct(
        public Notification $notification
    ) {}

    public function trigger()
    {
        $this->notification->send();
        return 'ok';
    }
}
