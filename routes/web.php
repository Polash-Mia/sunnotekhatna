<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SlideTwoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SettingController;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/',[HomeController::class,'regForm'])->name('regForm');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/updatepass/edit', [DashboardController::class,'edit'])->name('password.edit');
    Route::post('/updatepass/update', [DashboardController::class,'update'])->name('password.update');

    
    Route::get('/client/manage',[DashboardController::class,'clientManage'])->name('client.manage');
    Route::get('/client/print/{id}', [DashboardController::class, 'print'])->name('client.print');

    Route::get('/slide/add', [SlideController::class,'index'])->name('slide.add');
    Route::post('/slide/create', [SlideController::class, 'create'])->name('slide.create');
    Route::get('/slide/manage', [SlideController::class, 'manage'])->name('slide.manage');
    Route::get('/slide/delete/{id}', [SlideController::class,'delete'])->name('slide.delete');

    Route::get('/slideTwo/add', [SlideTwoController::class,'index'])->name('slideTwo.add');
    Route::post('/slideTwo/create', [SlideTwoController::class, 'create'])->name('slideTwo.create');
    Route::get('/slideTwo/manage', [SlideTwoController::class, 'manage'])->name('slideTwo.manage');
    Route::get('/slideTwo/delete/{id}', [SlideTwoController::class,'delete'])->name('slideTwo.delete');

    Route::get('/add-testimonial', [TestimonialController::class, 'index'])->name('testimonial.add');
    Route::post('/new-testimonial', [TestimonialController::class, 'create'])->name('testimonial.new');
    Route::get('/manage-testimonial', [TestimonialController::class, 'manage'])->name('testimonial.manage');
    Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/update-testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/delete-testimonial/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');

    Route::get('/add-setting', [SettingController::class, 'index'])->name('setting.add');
    Route::post('/new-setting', [SettingController::class, 'create'])->name('setting.new');
    Route::get('/manage-setting', [SettingController::class, 'manage'])->name('setting.manage');
    Route::get('/edit-setting/{id}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::post('/update-setting/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::get('/delete-setting/{id}', [SettingController::class, 'delete'])->name('setting.delete');

    Route::get('/user/add',[UserController::class,'index'] )->name('user.add');
    Route::post('/user/create',[UserController::class,'create'] )->name('user.new');
    Route::get('/user/manage',[UserController::class,'manage'] )->name('user.manage');
    Route::get('/user/delete/{id}', [UserController::class,'delete'])->name('user.delete');
});
