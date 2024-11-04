<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DocsController;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\admin\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 

Route::get('/', function () {
    return view('welcome');
})->name('root');

//Email Verify
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//Password reset
Route::get('/forgot-password', function () {
    return view('admin.auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('admin.auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


Route::get('/auth/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout.destroy');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth', 'headercontroller'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Docs Route
    Route::controller(DocsController::class)->group(function () {
        Route::get('/admin/docs/list', [DocsController::class, 'index'])->name('docs.index');
        Route::get('/admin/docs/create', [DocsController::class, 'create'])->name('docs.create');
        Route::post('/admin/docs/store', [DocsController::class, 'store'])->name('docs.store');
        Route::delete('/admin/docs/delete/{id}', [DocsController::class, 'destroy'])->name('docs.destroy');
    });
});