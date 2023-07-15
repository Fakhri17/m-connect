<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/form-pengajuan', function () {
    return view('form-pengajuan');
});

Route::middleware('guest')->group(function () {
    // Route Login
    Route::prefix('login')->middleware('guest')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('login');
        Route::post('/', [LoginController::class, 'login']);
    });
});
Route::post('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{dataPengajuan}', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::get('/jadwal-meeting', [MeetingController::class, 'index'])->name('meeting');
});
