<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormPengajuan;
use App\Http\Controllers\JadwalMeetingController;
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



Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/about', function () {
        return view('about');
    });

    // Route Pengajuan Form
    Route::get('/form-pengajuan', [FormPengajuan::class, 'index']);
    Route::get('/form-pengajuan-success', [FormPengajuan::class, 'success']);
    Route::post('/form-pengajuan/store', [FormPengajuan::class, 'store'])->name('form.pengajuan.store');


    // Route Login
    Route::prefix('login')->middleware('guest')->group(function () {
        Route::get('/', [LoginController::class, 'index'])->name('login');
        Route::post('/', [LoginController::class, 'login']);
    });
});




Route::middleware(['auth'])->group(function () {
    // Route Jadwal Meeting
    Route::get('/dashboard/jadwal-meeting', [JadwalMeetingController::class, 'index'])->name('jadwal.meeting');
    Route::post('/dashboard/jadwal-meeting/store', [JadwalMeetingController::class, 'store'])->name('jadwal.meeting.store');
    Route::post('/dashboard/jadwal-meeting/destroy', [JadwalMeetingController::class, 'destroy'])->name('jadwal.meeting.destroy');

    // Route Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/destroy', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
    Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::get('/dashboard/{type}/{id}', [DashboardController::class, 'statusUpdate'])->name('dashboard.statusUpdate');

    // Route Logout
    Route::post('/logout', [LoginController::class, 'logout']);



    // Route::get('/dashboard/{dataPengajuan}', [DashboardController::class, 'show'])->name('dashboard.show');
    // Route::get('/jadwal-meeting', [MeetingController::class, 'index'])->name('meeting');


});
