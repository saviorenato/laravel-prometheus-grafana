<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrometheusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/metrics', [PrometheusController::class, 'metrics']);
Route::get('/registry', [PrometheusController::class, 'registry']);

Route::get('/teste', function () {

    $key = 'redis-sapo';
    $redis = Redis::connection('default');
    $redis->set($key, json_encode([
        'name' => 'Adam'
    ]));

    return $redis->get($key);
});
