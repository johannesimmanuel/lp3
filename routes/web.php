<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEnquiryController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PT Vlex Reinsurance Corporate Web Routes
|--------------------------------------------------------------------------
| Fully functional routing matching the structure and elegance of talisman.co.id
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/network', [NetworkController::class, 'index'])->name('network');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Admin & CMS Routes (PT Vlex Reinsurance)
|--------------------------------------------------------------------------
*/
$adminPath = config('app.admin_path', 'portal-vlex');

Route::prefix($adminPath)->name('admin.')->group(function () {
    // Guest Auth Routes
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Protected CMS Routes
    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

        // Profile & Account
        Route::get('/profile', [AdminUserController::class, 'profile'])->name('profile');
        Route::post('/profile', [AdminUserController::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/password', [AdminUserController::class, 'updatePassword'])->name('password.update');

        // Contact Enquiries Management (Inbox)
        Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
        Route::get('/enquiries/{enquiry}', [AdminEnquiryController::class, 'show'])->name('enquiries.show');
        Route::post('/enquiries/{enquiry}/toggle-read', [AdminEnquiryController::class, 'toggleRead'])->name('enquiries.toggle-read');
        Route::delete('/enquiries/{enquiry}', [AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');

        // Reinsurance Services CRUD
        Route::resource('services', AdminServiceController::class)->except(['show']);

        // Management Board CRUD
        Route::resource('management', AdminManagementController::class)->except(['show']);

        // Corporate Settings
        Route::get('/settings', [AdminSettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [AdminSettingController::class, 'update'])->name('settings.update');
    });
});

// Security: If custom admin path is active, block /admin to prevent discovery
if ($adminPath !== 'admin') {
    Route::any('/admin/{any?}', function () {
        abort(404);
    })->where('any', '.*');
}

