<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdBannerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;


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

//ADMIN PANEL//
Route::group(['middleware' => ['AdminAuth']], function () {
    Route::post('admin/login_pro', [AdminController::class, 'checkadmin'])->name('auth.checkadmin');
    Route::get('admin/logout', [AdminController::class, 'logout']);


    Route::get('admin/index', [AdminController::class, 'dashboard']);
    Route::get('admin/enquiry', [AdminController::class, 'enquiry']);
    // Route::get('admin/view_blog', [AdminController::class, 'view_blog']);
    Route::post('admin/adminBanner', [AdBannerController::class, 'add_banner'])->name('add.banner');
    Route::get('admin/enquiry_delete/{id}', [ContactController::class, 'delete_enquiry']);
    Route::get('admin/banner_delete/{id}', [AdBannerController::class, 'delete_banner']);
    // Route::get('admin/view_adminblog/{id}', [BlogController::class, 'view_adminblog']);
    // Route::put('update_blog/{id}', [BlogController::class, 'update_blog']);
    Route::get('admin/enquiry_delete/{id}', [ContactController::class, 'delete_enquiry']);
});
Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/hash', [AdminController::class, 'hashp']);
//END ADMIN PANEL//

// USER SIDE //
Route::post('/enquiry', [ContactController::class, 'enquiry'])->name('user.enquiry');

Route::get('/', function () {
    return view('user/pages/index');
});
Route::get('/about', function () {
    return view('user/pages/about');
});
Route::get('/contact', function () {
    return view('user/pages/contact');
});
Route::get('/dellOptiplexSeries', function () {
    return view('user/pages/dellOptiplexSeries');
});
Route::get('/HPProBookSeries', function () {
    return view('user/pages/HPProBookSeries');
});
Route::get('/LenovoThinkCentreSeries', function () {
    return view('user/pages/LenovoThinkCentreSeries');
});
Route::get('/AppleiMacSeries', function () {
    return view('user/pages/AppleiMacSeries');
});
Route::get('/DellLatitudeSeries', function () {
    return view('user/pages/DellLatitudeSeries');
});
Route::get('/HPEliteBookSeries', function () {
    return view('user/pages/HPEliteBookSeries');
});
Route::get('/LenovoThinkPadSeries', function () {
    return view('user/pages/LenovoThinkPadSeries');
});
Route::get('/AppleMacBookSeries', function () {
    return view('user/pages/AppleMacBookSeries');
});
Route::get('/ComputerRepairs', function () {
    return view('user/pages/ComputerRepairs');
});
Route::get('/LaptopRepair', function () {
    return view('user/pages/LaptopRepair');
});
Route::get('/iPadRepair', function () {
    return view('user/pages/iPadRepair');
});
Route::get('/HardwareUpgrades', function () {
    return view('user/pages/HardwareUpgrades');
});
Route::get('/SoftwareInstallation', function () {
    return view('user/pages/SoftwareInstallation');
});