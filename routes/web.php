<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\M_class_controller;
use App\Http\Controllers\Admin\M_activity_controller;
use App\Http\Controllers\Admin\Trx_gallery_controller;
use App\Http\Controllers\Admin\Trx_teacher_controller;
use App\Http\Controllers\Admin\Trx_schedule_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VocationalProfileController;
use App\Http\Controllers\ScheduleController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('visi-dan-misi', [VocationalProfileController::class, 'visi'])->name('visi');
Route::get('galeri', [VocationalProfileController::class, 'gallery'])->name('galeri');
Route::get('jadwal-kelas-10', [ScheduleController::class, 'classXSchedule'])->name('jadwal-kelas-10');
Route::get('jadwal-kelas-11', [ScheduleController::class, 'classXiSchedule'])->name('jadwal-kelas-11');
Route::get('jadwal-kelas-12', [ScheduleController::class, 'classXiiSchedule'])->name('jadwal-kelas-12');
Route::get('jadwal-praktek', [ScheduleController::class, 'practiceSchedule'])->name('jadwal-praktek');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function() {
        return view('pages.admin.dashboard');
    })->name('dashboard');
    Route::resource('/master-kelas', M_class_controller::class)->except('show');
    Route::resource('/master-aktifitas', M_activity_controller::class)->except('show');
    Route::resource('/gallery', Trx_gallery_controller::class)->except('show');
    Route::resource('/data-guru', Trx_teacher_controller::class)->except('show');
    Route::resource('/jadwal', Trx_schedule_controller::class)->except('show');
});

require __DIR__.'/auth.php';
