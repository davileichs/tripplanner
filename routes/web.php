<?php

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CostController;

// Packages
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


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

require __DIR__.'/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

Route::middleware('auth')->group(function () {

    Route::get('/', [DestinationController::class, 'index'])->name('home');
    Route::get('/dashboards', [DestinationController::class, 'index'])->name('dashboards');

    Route::group(['prefix' => 'destination'], function() {
        Route::get('/{destination}', [DestinationController::class, 'show'])->name('destination.show');
        Route::get('/new', [DestinationController::class, 'create'])->name('destination.create');
        Route::post('/store', [DestinationController::class, 'store'])->name('destination.store');
    });

    Route::group(['prefix' => 'city'], function() {
        Route::post('/store', [CityController::class, 'store'])->name('city.store');
    });

    Route::group(['prefix' => 'cost'], function() {
        Route::post('/store', [CostController::class, 'store'])->name('cost.store');
    });

});



// Users Module
Route::resource('users', UserController::class);

//Extra Page Routs
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('pages.privacy-policy');
Route::get('terms-of-use', [HomeController::class, 'termsOfUse'])->name('pages.term-of-use');

//Auth pages Routs
Route::get('confirm-mail', [HomeController::class, 'confirmmail'])->name('auth.confirm-mail');
Route::get('lock-screen', [HomeController::class, 'lockscreen'])->name('auth.lock-screen');
Route::group(['prefix' => 'auth', 'middleware' => 'auth'], function() {
    Route::get('user-privacy-setting', [HomeController::class, 'userPrivacySetting'])->name('auth.user-privacy-setting');
    Route::group(['prefix' => 'pro'], function() {
        Route::group(['prefix' => 'animated'], function() {
            Route::get('signin', [HomeController::class, 'animatedSignin'])->name('animated.signin');
            Route::get('signup', [HomeController::class, 'animatedSignup'])->name('animated.signup');
            Route::get('email', [HomeController::class, 'animatedEmail'])->name('animated.email');
            Route::get('lock-screen', [HomeController::class, 'animatedLockScreen'])->name('animated.lock-screen');
            Route::get('reset-password', [HomeController::class, 'animatedResetPassword'])->name('animated.reset-password');
            Route::get('two-factor', [HomeController::class, 'animatedTwoFactor'])->name('animated.two-factor');
            Route::get('account-deactivate', [HomeController::class, 'animatedAccountDeactivate'])->name('animated.account-deactivate');
        });
        Route::group(['prefix' => 'simple'], function() {
            Route::get('signin', [HomeController::class, 'simpleSignin'])->name('simple.signin');
            Route::get('signup', [HomeController::class, 'simpleSignup'])->name('simple.signup');
        });
    });
});














// Module Routes
// if (file_exists(__DIR__.'/modules/appointment.php')) require __DIR__.'/modules/appointment.php';
// if (file_exists(__DIR__.'/modules/blog.php')) require __DIR__.'/modules/blog.php';
// if (file_exists(__DIR__.'/modules/chat.php')) require __DIR__.'/modules/chat.php';
if (file_exists(__DIR__.'/modules/e-commerce.php')) require __DIR__.'/modules/e-commerce.php';
// if (file_exists(__DIR__.'/modules/file-manager.php')) require __DIR__.'/modules/file-manager.php';
// if (file_exists(__DIR__.'/modules/mail.php')) require __DIR__.'/modules/mail.php';
// if (file_exists(__DIR__.'/modules/social.php')) require __DIR__.'/modules/social.php';
