<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// 當使用 Notification 時，由於 AppServiceProvider 有綁定介面
// $this->app->bind(Notification::class, BrowserNotification::class);
// 因此使用服務的會是 BrowserNotification
// Route::get('/', function (Notification $notification) {
//     $notification->send();
//     return 'ok';
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notifications', [NotificationController::class, 'trigger']);
