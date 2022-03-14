<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\AdminHome;
use App\http\Controllers\Admin\Utilisateur;
use App\http\Controllers\Admin\Product;
use App\http\Controllers\Client\Produit;
use App\http\Controllers\Client\Card;
use App\http\Controllers\Login;
use App\http\Controllers\HarenaController;

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

Route::prefix("user")->group(function(){

    Route::get('/{name}', [HarenaController::class, 'showName'])->whereAlphaNumeric("name");

});

// Login Route
Route::get('/adminHome', [AdminHome::class, 'index'])->name('adminHome.index');

Route::get('/', [Produit::class, 'index'])->name('produit.index');

Route::get('/login', [Login::class, 'index'])->name('login.index');

Route::get('/createAccount', [Login::class, 'createAccount'])->name('login.createAccount');

Route::get('/logout', [Login::class, 'logout'])->name('login.logout');

Route::post('/createAccount_post', [Login::class, 'createAccount_post'])->name('login.createAccount_post');

Route::post('/checkUser', [Login::class, 'checkUser'])->name('login.checkUser');


// Admin Route
Route::get('/userList', [Utilisateur::class, 'index'])->name('admin.userList');

Route::get('/productList', [Product::class, 'index'])->name('admin.productlist');

Route::get('/addProduct', [Product::class, 'addProduct'])->name('admin.addProduct');

Route::post('/addProduct_post', [Product::class, 'addProduct_post'])->name('admin.addProduct_post');

Route::get('editProduct/{id}', [Product::class, 'editProduct'])->name('admin.editProduct');

Route::get('/deleteProduct/{id}', [Product::class, 'deleteProduct'])->name('admin.deleteProduct');

Route::post('/editProduct_post', [Product::class, 'editProduct_post'])->name('admin.editProduct_post');

// Client Route
Route::get('/listeProduit', [Produit::class, 'index'])->name('client.listeProduit');

Route::get('add_to_card/{id}', [Produit::class, 'add_to_card']);

Route::post('/add_to_card_post', [Produit::class, 'add_to_card_post'])->name('client.add_to_card_post');

Route::get('/cardList', [Card::class, 'index'])->name('client.cardList');

Route::get('/cardListValid', [Card::class, 'validCard'])->name('client.cardListValid');
