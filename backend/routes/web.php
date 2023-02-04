<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('employee-list', [EmployeeController::class, 'list'])->name('list')->middleware('auth');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('employees', EmployeeController::class)->only([
    'edit', 'update', 'destroy', 'create', 'store'
]);;