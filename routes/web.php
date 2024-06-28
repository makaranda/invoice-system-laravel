<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/save', [DashboardController::class, 'usersave'])->name('user.save');
    Route::get('/{user_id}/delete', [DashboardController::class, 'userdelete'])->name('user.delete');
    Route::get('/{user_id}/edit', [DashboardController::class, 'useredit'])->name('user.edit');
    Route::post('/{user_id}/update', [DashboardController::class, 'userupdate'])->name('user.update');
    Route::get('/{user_id}/manage', [DashboardController::class, 'uservewRecords'])->name('user.manage');
    Route::post('/saveRecord', [DashboardController::class, 'saveRecord'])->name('user.saveRecord');
});
