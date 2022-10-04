<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DonationController;

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

// donation
Route::group(['prefix' => 'donation'], function () {
    Route::get('/donationFee', [DonationController::class, 'getDonor'])->name('donation#getDonor');
    // Route::post('/saveDonationFee', [DonationController::class, 'saveDonationFee'])->name('donation#saveDonor');
    Route::post('/getBilling', [DonationController::class, 'getBilling'])->name('donation#getBilling');
    // Route::post('/saveBilling', [DonationController::class, 'saveBilling'])->name('donation#saveBilling');

    Route::post('/getPayment', [DonationController::class, 'getPayment'])->name('donation#getPayment');
    Route::get('/getCompletion', [DonationController::class, 'getCompletion'])->name('donation#getCompletion');
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
    Route::get('/createMenu', [PartnerController::class, 'createMenu'])->name('partner#createMenu'); //calling the menu creation page
    Route::post('/saveMenu', [PartnerController::class, 'saveMenu'])->name('partner#saveMenu'); //saving a new menu into the database
    Route::get('/viewMenu/{id}', [PartnerController::class, 'viewMenu'])->name('partner#viewMenu'); //partner view a specific menu
    Route::get('/deleteMenu/{id}', [PartnerController::class, 'deleteMenu'])->name('partner#deleteMenu'); //deleting a specific menu
    Route::get('/updateMenu/{id}', [PartnerController::class, 'updateMenu'])->name('partner#updateMenu'); //calling the updation page
    Route::post('/saveUpdate/{id}', [PartnerController::class, 'saveUpdate'])->name('partner#saveUpdate'); //saving the updated data
});

//Volunteer
Route::group(['prefix' => 'volunteer'], function () {
    Route::get('/', [VolunteerController::class, 'index'])->name('volunteer#index'); //partner dashboard 

});

//Administrator
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin#index'); //partner dashboard 
    Route::get('/', [AdminController::class, ''])->name('admin#allPartners');
});


