<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

// Routes with subdomains
Route::group(
    ['domain' => 'expecting.' .config('hasyourbabyarrivedyet.domain')], function () {
        Route::get(
            '/', function () {
                return view('welcome');
            }
        );
    }
);
Route::group(
    ['domain' => 'findoutmore.' .config('hasyourbabyarrivedyet.domain')], function () {
        Route::get(
            '/', function () {
                return view('welcome');
            }
        );
    }
);
Route::group(
    ['domain' => 'fedupofbeingasked.' .config('hasyourbabyarrivedyet.domain')], function () {
        Route::get(
            '/', function () {
                return view('welcome');
            }
        );
    }
);
Route::group(
    ['domain' => 'fedupwithbeingasked.' .config('hasyourbabyarrivedyet.domain')], function () {
        Route::get(
            '/', function () {
                return view('welcome');
            }
        );
    }
);

Route::group(
    ['domain' => '{subdomain}.' . config('hasyourbabyarrivedyet.domain')], function () {
        Route::get(
            '/',
            [UserController::class, 'profile']
        )->name('user.profile.index');
        Route::get(
            '/note',
            [UserController::class, 'editNote']
        )->name('user.profile.note');
    }
);

// Use this later
Route::resource('user', UserController::class);

Route::post('user/toggle-state', [UserController::class, 'toggleState'])->name('user.toggle-state');
Route::post('/note', [UserController::class, 'updateNote'])->name('user.update-note');

// Profile route with no subdomain
//Route::get('profile', [UserController::class, 'edit']);

// Authentication routes... this from old Laravel - not sure we still need it,
// But what should replace it?
// Auth::routes();

// General page routes
Route::get(
    '/', function () {
        return view('welcome');
    }
);
Route::get(
    'how-it-works', function () {
        return view('how-it-works');
    }
);
Route::get(
    'help-others', function () {
        return view('help-others');
    }
);
Route::get(
    'terms', function () {
        return view('terms');
    }
);


/**
 * DEFAULT / LARAVEL BREEZE ROUTES
 */

Route::get(
    '/dashboard', function () {
        return view('dashboard.index');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);

require __DIR__.'/auth.php';
