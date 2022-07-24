<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Menu;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route:: get('Registro',[Controller:: class, 'Register']);
Route:: get('DatosDueño',[Menu:: class, 'ShowDataOfOwner']);
Route:: get('DatosLocal',[Menu:: class, 'ShowDataOfLocal']);
Route:: get('Menu',[Menu:: class, 'ShowDataOfMenu']);
Route:: get('Pedido',[Menu:: class, 'ShowDataOfOrder']);