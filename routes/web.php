<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupportController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function(){
    Route::get('/Admin',[AdminController::class,'Admin'])->name('Admin');
    Route::get('/Admin/create',[AdminController::class,'CreatePage'])->name('AdminCreatePage');
    Route::post('/Admin/create',[AdminController::class,'CreateProductStore'])->name('AdminCreateStore');
    Route::get('/Admin/creat/category',[AdminController::class,'CreateCategory'])->name('AdminCreatePageCategory');
    Route::post('/Admin/create/category',[AdminController::class,'CreateProductStoreCategory'])->name('AdminCreateStoreCategory');
    Route::get('/Admin/role',[AdminController::class,'AdminRoleIssue'])->name('AdminRoleIssue');
    Route::delete('/delete/product/{product}',[AdminController::class,'delete'])->name('delete');
    Route::delete('/delete/category/{category}',[AdminController::class,'DeleteCategory'])->name('DeleteCategory');
    Route::get('/Delete/Show/Page',[AdminController::class,'DeleteShowPage'])->name('DeleteShowPage');
    Route::get('/update/category/page',[AdminController::class,'UpdateCategoryPage'])->name('UpdateCategoryPage');
    Route::get('/update/{category}',[AdminController::class,'UpdateCategoryPageUpd'])->name('PageStoreUpdCategory');
    Route::patch('/update/{category}',[AdminController::class,'UpdateSelectCategoryStore'])->name('UpdateCategoryStoreUpd');
    Route::get('/update/product/page',[AdminController::class,'UpdateProductPageUpd'])->name('PageStoreUpdProductUpd');
    Route::get('/update/product/{product}',[AdminController::class,'UUpdateProductPageUpdSelect'])->name('uPageStoreUpdProductSelect');
    Route::patch('/update/product/{product}',[AdminController::class,'StoreProductUpdate'])->name('StoreProductUpdate');
    Route::get('/roles/{user}',[AdminController::class,'roles'])->name('roles')->middleware('auth');
    Route::post('/roles/{user}/select',[AdminController::class,'rolesstore'])->name('rolesstore')->middleware('auth');
});


Route::post('/verification/{user}',[AdminController::class,'verification'])->name('verification')->middleware('auth');
Route::post('/verification/user/{user}',[AdminController::class,'verificationstore'])->name('verificationstore')->middleware('auth');
Route::get('/Contact',[AdminController::class,'ContactDate'])->name('ContactDate');



Route::get('support/product/help/page',[SupportController::class,'SupportPage'])->name('SupportPage');




Route::post('/comment/post/{product}',[ProductController::class,'CommentStore'])->name('CommentStore');

Route::get('/index',[ProductController::class,'index'])->name('index');

Route::get('/product/{product}',[ProductController::class,'ShowProduct'])->name('ShowProduct');

Route::get('/Create/product',[ProductController::class,'CreateProductPage'])->name('CreateProductPage');
Route::post('/Create/product',[ProductController::class,'CreateProductStorew'])->name('CreateProductStore');

Route::post('/support/help/{product}', [ProductController::class,'HelpPage'])->name('HelpPage');
Route::get('/support/help/product/{product}', [ProductController::class,'HelpStore'])->name('HelpStore');

Route::get('/my/product/{user}',[ProductController::class,'MyProduct'])->name('MyProduct')->middleware('MyProduct');

Route::post('/cart/create/{product}',[ProductController::class,'CartStore'])->name('CartStore');
Route::get('/my/cart',[ProductController::class,'MyCart'])->name('MyCart');
Route::delete('delete/cart/{cart}',[ProductController::class,'DeleteCart'])->name('DeleteCart');

Route::get('/my/favorites',[ProductController::class,'MaFavorites'])->name('MaFavorites');
Route::post('/my/favorites/{product}',[ProductController::class,'MaFavoritesStore'])->name('MaFavoritesStore');

Route::delete('delete/favorites/{favorite}',[ProductController::class,'DeleteFavorite'])->name('DeleteFavorite');

Route::get('buy/{cart}',[ProductController::class,'order'])->name('order');

Route::get('/register/page', [AuthController::class, 'RegisterPage'])->name('registerpage')->middleware('guest');
Route::post('/register', [AuthController::class, 'Registerstore'])->name('Registerstore')->middleware('guest');

Route::get('/login', [AuthController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'LoginStore'])->name('loginstore')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile/{user}', [AuthController::class, 'Profile'])->name('profile')->middleware('profile');

