<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');


Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function() {

    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('add/category', 'Admin\CategoryController@index')->name('add.cat');
    Route::get('cat/list', 'Admin\CategoryController@catlist')->name('cat.list');
    Route::post('cat/store', 'Admin\CategoryController@store')->name('cat.store');
    Route::get('cat/delete{id}', 'Admin\CategoryController@destroy')->name('cat.delete');

    Route::get('add/sub/cat', 'Admin\SubCategoryController@index')->name('add.sub.cat');
    Route::get('sub/cat/list', 'Admin\SubCategoryController@subcatlist')->name('sub.cat.list');
    Route::post('sub/cat/store', 'Admin\SubCategoryController@store')->name('sub.cat.store');
    Route::get('sub/cat/delete{id}', 'Admin\SubCategoryController@destroy')->name('sub.cat.delete');

    Route::get('add/color', 'Admin\ColorController@index')->name('add.color');
    Route::get('color/list', 'Admin\ColorController@colorlist')->name('color.list');
    Route::post('color/store', 'Admin\ColorController@store')->name('color.store');
    Route::get('color/delete{id}', 'Admin\ColorController@destroy')->name('color.delete');

    Route::get('add/size', 'Admin\SizeController@index')->name('add.size');
    Route::get('size/list', 'Admin\SizeController@sizelist')->name('size.list');
    Route::post('size/store', 'Admin\SizeController@store')->name('size.store');
    Route::get('size/delete{id}', 'Admin\SizeController@destroy')->name('size.delete');

    Route::get('add/product', 'Admin\ProductController@index')->name('add.product');
    Route::post('product/store', 'Admin\ProductController@store')->name('product.store');
    Route::get('product/list', 'Admin\ProductController@productlist')->name('product.list');
    Route::get('product/delete{id}', 'Admin\ProductController@destroy')->name('product.delete');
    Route::get('product/edit{id}', 'Admin\ProductController@edit')->name('product.edit');
    Route::post('product/update', 'Admin\ProductController@update')->name('product.update');

    Route::get('pending', 'Admin\OrderedProductController@index')->name('pending');
    Route::get('delivered', 'Admin\OrderedProductController@delivered')->name('delivered');

    Route::get('social/link', 'Admin\PagesController@index')->name('social.link');
    Route::post('update/social/link', 'Admin\PagesController@updateLinks')->name('update.social.link');
    Route::get('about', 'Admin\PagesController@about_index')->name('about');
    Route::post('update/about', 'Admin\PagesController@updateAbout')->name('update.about');

    Route::get('admin/profile', 'Admin\DashboardController@profile')->name('profile');


});

    Route::get('cat/man','CategoryController@man')->name('cat.man');
    Route::get('cat/woman','CategoryController@woman')->name('cat.woman');
    Route::get('cat/kid','CategoryController@kid')->name('cat.kid');
    Route::get('about','MoreController@about')->name('about');
    Route::get('contact','MoreController@contact')->name('contact');
    Route::post('message','MoreController@store')->name('message');
    Route::get('collection{id}abcd','SubcategoryController@index')->name('collection');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
