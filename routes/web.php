<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProfileController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    Route::get('/home', function () {
        $announcements = Announcement::with("images")->latest()->take(3)->get();
        return view("home", compact('announcements'));
    })->name("home");

    Route::get('/owner/dashbaord', function () {
        return view("owner.dashboard");
    })->name("owner.dashboard");

    Route::get('/admin/dashbaord', function () {
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get('/announcements', [AnnouncementController::class, "index"])->name("announcements");

    Route::post('/announcements', [AnnouncementController::class, "create"])->name("announcements.create");
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
