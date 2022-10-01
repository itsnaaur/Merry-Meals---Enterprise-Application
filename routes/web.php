<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/terms', function () {
    return view('terms');
});

// Route::middleware(['auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Auth::check()) {

        if (Auth::user()->role == 'member') {
            return redirect()->route('member#index');
        } else if (Auth::user()->role == 'partner') {
            return redirect()->route('partner#index');
        } else if (Auth::user()->role == 'volunteer') {
            return redirect()->route('volunteer#index');
        } else if (Auth::user()->role == 'admin') {
            return redirect()->route('admin#index');
        }
    }
})->name('welcome');

//Member
Route::group(['prefix' => 'member'], function () {
    Route::get('/', [MemberController::class, 'index'])->name('member#index'); //member dashboard 
    Route::get('/member/{id}', [MemberController::class, 'saveMemberMealPlan'])->name('member#saveMemberMealPlan');
});

//Partner
Route::group(['prefix' => 'partner'], function () {
    Route::get('/', [PartnerController::class, 'index'])->name('partner#index'); //partner dashboard 

});

//Volunteer
Route::group(['prefix' => 'volunteer'], function () {
    Route::get('/', [VolunteerController::class, 'index'])->name('volunteer#index'); //partner dashboard 

});

//Administrator
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin#index'); //partner dashboard 

});