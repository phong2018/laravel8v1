<?php
use Illuminate\Support\Facades\Route;
use Phonglg\LaravelEchoServer\Events\MessageNotification;
use Phonglg\LaravelEchoServer\Events\RoomPresenceNotification;
use Phonglg\LaravelEchoServer\Events\UserNotification;
use App\Models\User;

// use for app cotuong
Route::get('/LaravelEchoServer', function () {
    return "laravel LaravelEchoServer1";
}); 

Route::group(['middleware' => ['web']], function () {    

    // public channel
    //###########################################
    // call event
    Route::get('/EventsMessageNotification', function () { 
        event(new MessageNotification('HELLO USING LARAVEL-WEBSOCKET'));
        echo 'EventsMessageNotification';
    }); 

    // listen public channel
    Route::get('/EventsMessageNotification/publiclisten', function () { 
        return view('laravelechoserver::publiclisten');
    }); 

    // private channel 
    //###########################################
    // call event
    Route::get('/EventsUserNotification', function () { 
        broadcast(new UserNotification( User::find(1)));


        // event(new UserNotification(1));
        echo 'LaravelEchoServer/EventsUserNotification';
    }); 

    // listen privateisten
    Route::get('/EventsUserNotification/privatelisten', function () { 
        //echo Auth::check();
        return view('laravelechoserver::privatelisten');

    }); 

    // presence channel
    //###########################################
    // call event
    Route::get('/EventsRoomNotification', function () { 
        event(new RoomPresenceNotification(1));
        echo 'LaravelEchoServer/EventsUserNotification';
    }); 

    // listen presencelisten
    Route::get('/EventsRoomNotification/presencelisten', function () { 
        return view('laravelechoserver::presencelisten');
    }); 
 
}); 

 

