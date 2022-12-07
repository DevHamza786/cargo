<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\UserTrackController;

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

Auth::routes(['register' => false]);
Route::get('/', [UserTrackController::class, 'index'])->name('home');
Route::post('/user-tracking', [UserTrackController::class, 'find'])->name('user.tracking');
Route::get('/about', [UserTrackController::class, 'about'])->name('about_us');
Route::get('/tracking', [UserTrackController::class, 'tracking'])->name('track');
Route::get('/contact', [UserTrackController::class, 'contact'])->name('contact');
Route::post('/contact', [UserTrackController::class, 'sendContact'])->name('send.contact');


Route::get('/pdf',function(){
    return view('dashboard.tracking_slip_pdf');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/app-profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('change.Password');

    // For Subadmin
    Route::get('/sub-admin', [SubAdminController::class, 'index'])->name('subadmin');
    Route::get('/create-subadmin', [SubAdminController::class, 'create'])->name('create.subadmin');
    Route::post('/store-subadmin', [SubAdminController::class, 'store'])->name('store.subadmin');

    // For Tracking
    Route::get('/all-tracking', [TrackingController::class, 'index'])->name('admin.track');
    Route::get('/create-track', [TrackingController::class, 'create'])->name('create.track');
    Route::post('/store-track', [TrackingController::class, 'store'])->name('store.track');
    Route::get('/edit-track/{id}', [TrackingController::class, 'edit'])->name('edit.track');
    Route::post('/update-track', [TrackingController::class, 'update'])->name('update.track');
    Route::post('/update-track-status', [TrackingController::class, 'updateStatus'])->name('update.trackStatus');

    // For PDF Slip
    Route::get('/generate-pdf', [TrackingController::class, 'generatePDF'])->name('slip.pdf');

    // For Excel
    Route::get('/export',[TrackingController::class,'template'])->name('template');
    Route::get('/export-tracking',[TrackingController::class,'trackingExport'])->name('tracking.excel');


});
