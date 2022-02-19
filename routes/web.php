<?php

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

Route::get('/', function () {
    return view('/home');
});

///////////////////////////////////////////////////Admin Pannel///////////////////////////////////

Route::group(['middleware' => ['auth','isAdmin']] , function() {

    Route::get('/admin-layout' , function() {
        return view('Admin.admin_layout');
    });

// Dasboard
Route::get('/dashboard' , [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

// Fundrisers

Route::get('/fundriser', [App\Http\Controllers\Admin\FundriserController::class, 'fundriser'])->name('fundriser');
Route::post('/add-fundriser', [App\Http\Controllers\Admin\FundriserController::class, 'addfundriser'])->name('add-fundriser');
Route::get('/view-fundrisers', [App\Http\Controllers\Admin\FundriserController::class, 'viewfundrisers'])->name('view-fundrisers');
Route::get('/destroy-fundriser/{id}', [App\Http\Controllers\Admin\FundriserController::class, 'destroyfundriser'])->name('destroy-fundriser');
Route::get('/edit-fundriser/{id}', [App\Http\Controllers\Admin\FundriserController::class, 'editfundriser'])->name('edit-fundriser');
Route::post('/update-fundriser', [App\Http\Controllers\Admin\FundriserController::class, 'updatefundriser'])->name('update-fundriser');

// Expenses

Route::get('/expense', [App\Http\Controllers\Admin\ExpenseController::class, 'expense'])->name('expense');
Route::post('/add-expense', [App\Http\Controllers\Admin\ExpenseController::class, 'addexpense'])->name('add-expense');
Route::get('/view-expenses', [App\Http\Controllers\Admin\ExpenseController::class, 'viewexpenses'])->name('view-expenses');
Route::get('/destroy-expense/{id}', [App\Http\Controllers\Admin\ExpenseController::class, 'destroyexpense'])->name('destroy-expense');
Route::get('/edit-expense/{id}', [App\Http\Controllers\Admin\ExpenseController::class, 'editexpense'])->name('edit-expense');
Route::post('/update-expense', [App\Http\Controllers\Admin\ExpenseController::class, 'updateexpense'])->name('update-expense');

// Acceptors

Route::get('/acceptor', [App\Http\Controllers\Admin\AcceptorController::class, 'acceptor'])->name('acceptor');
Route::post('/add-acceptor', [App\Http\Controllers\Admin\AcceptorController::class, 'addacceptor'])->name('add-acceptor');
Route::get('/view-acceptors', [App\Http\Controllers\Admin\AcceptorController::class, 'viewacceptors'])->name('view-acceptors');
Route::get('/destroy-acceptor/{id}', [App\Http\Controllers\Admin\AcceptorController::class, 'destroyacceptor'])->name('destroy-acceptor');
Route::get('/edit-acceptor/{id}', [App\Http\Controllers\Admin\AcceptorController::class, 'editacceptor'])->name('edit-acceptor');
Route::post('/update-acceptor', [App\Http\Controllers\Admin\AcceptorController::class, 'updateacceptor'])->name('update-acceptor');

// Distribution

Route::get('/distribution', [App\Http\Controllers\Admin\DistributionController::class, 'distribution'])->name('distribution');
Route::post('/add-distribution', [App\Http\Controllers\Admin\DistributionController::class, 'adddistribution'])->name('add-distribution');
Route::get('/view-distributions', [App\Http\Controllers\Admin\DistributionController::class, 'viewdistributions'])->name('view-distributions');
Route::get('/destroy-distribution/{id}', [App\Http\Controllers\Admin\DistributionController::class, 'destroydistribution'])->name('destroy-distribution');
Route::get('/edit-distribution/{id}', [App\Http\Controllers\Admin\DistributionController::class, 'editdistribution'])->name('edit-distribution');
Route::post('/update-distribution', [App\Http\Controllers\Admin\DistributionController::class, 'updatedistribution'])->name('update-distribution');

// Funds

Route::get('/fund', [App\Http\Controllers\Admin\FundController::class, 'fund'])->name('fund');
Route::post('/add-fund', [App\Http\Controllers\Admin\FundController::class, 'addfund'])->name('add-fund');
Route::get('/view-funds', [App\Http\Controllers\Admin\FundController::class, 'viewfunds'])->name('view-funds');
Route::get('/destroy-fund/{id}', [App\Http\Controllers\Admin\FundController::class, 'destroyfund'])->name('destroy-fund');
Route::get('/edit-fund/{id}', [App\Http\Controllers\Admin\FundController::class, 'editfund'])->name('edit-fund');
Route::post('/update-fund', [App\Http\Controllers\Admin\FundController::class, 'updatefund'])->name('update-fund');

});

// ContactMail

Route::post('contactus',[App\Http\Controllers\MailController::class, 'sendemail']);
Route::get('view-mails',[App\Http\Controllers\MailController::class, 'viewmails']);

// Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');