<?php

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

Route::get('/', function () {
    $c = new \App\Classes\RenderTimeline(
        \App\TimelineEvent::all()
    );
    return $c->render();
});

Route::get('create', function() {
    $event = new \App\TimelineEvent;
    $event->timestamp = \Carbon\Carbon::now();
    $event->what_happened = ['type' => 'task_created', 'task' => ['id' => 1, 'name' => 'name of the task']];
    $event->save();
});
