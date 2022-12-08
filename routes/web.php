<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;


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


/**Route::get('/login', function(){
    return view('autentikasi.login');
});**/

Route::get('/login',[loginController::class, 'index'])->middleware('guest');
Route::post('/login',[loginController::class, 'authenticate']);

//REGISTER ROUTE//

Route::get('/register',[registerController::class, 'index']);
Route::post('/register',[registerController::class, 'store']);

//HOMECONTROLLER ROUTE//
Route::get('/redirect',[homeController::class, 'index']);


//Dashboard routes//

// Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });

Route::get('/index', function () {
    return view('dashboard');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/forget', function () {
    return view('forgetpassword.index');
});




/**Route::get('home', function () {
    return view('Home.home');
});**/

Route::get('productlist', function () {
    return view('productlist.index');
});

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/about', function () {
    return view('About.index');
});

Route::get('checkout', function () {
    return view('Home.checkout');
});

Route::get('/register', function () {
    return view('autentikasi.register');
});

/**Route::get('/login', function () {
    return view('login.index');
});**/

Route::get('/rumahan', function () {
    return view('daftarproduk.rumahan');
});

Route::get('/akad', function () {
    return view('daftarproduk.akad');
});
Route::get('/gedung', function () {
    return view('daftarproduk.gedung');
});

Route::get('/account', function () {
    return view('account.index');
});