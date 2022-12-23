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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/crm', function () {
    return view('app');
});
// Route::get('/admin', function () {
//     dd(1);
//     return view('app');
// }); 
Route::get('/','HomeController@home')->name('home')->middleware(checkLanguage::class);
Route::group(['namespace'=>'Client','middleware' => ['checkLanguage']], function(){
    Route::get('type-product/{id}','PageController@typeproduct');
    Route::get('district/{id}','PageController@district');
    Route::post('ket-qua-tim-kiem','PageController@search')->name('search_result');
    Route::get('dang-nhap.html','AuthController@login')->name('login')->middleware('CheckAuthLogout::class');
    Route::post('dang-nhap.html','AuthController@postLogin')->name('postlogin');
    Route::get('dang-ky.html','AuthController@register')->name('register');
    Route::post('dang-ky.html','AuthController@postRegister')->name('postRegister');
    Route::get('dang-xuat.html','AuthController@logout')->name('logout')->middleware('CheckAuthClient::class');

    Route::get('trang-noi-dung/{slug}.html','PageContentController@detail')->name('pagecontent');
    Route::get('dich-vu/{slug}.html','PageController@serviceDetail')->name('serviceDetail');
    Route::get('gioi-thieu.html','PageController@aboutUs')->name('aboutUs');  
    Route::get('cong-nghe.html','PageController@technology')->name('technology');   
    Route::get('lien-he.html','PageController@contact')->name('lienHe');
    Route::post('lien-he','PageController@postcontact')->name('postcontact');
   
    
    Route::group(['prefix'=>'cong-trinh'], function(){
        Route::get('/tat-ca.html','ConstructionController@list')->name('allListConstruction');
        Route::get('{id}.html','ConstructionController@detail')->name('detailConstruction');
    });
    Route::get('quickview/{id}','PageController@quickview')->name('quickview');
    Route::get('nhan-bao-gia.html','PageController@baogia')->name('baogia');

    Route::get('gio-hang.html', 'CartController@listCart')->name('listCart');
    Route::post('add-to-cart', 'CartController@addToCart')->name('add.to.cart');
    Route::post('update-cart', 'CartController@update')->name('update.cart');
    Route::post('remove-from-cart', 'CartController@remove')->name('remove.from.cart');
    Route::get('thanh-toan.html','CartController@checkout')->name('checkout');
    Route::post('thantoan','CartController@postBill')->name('postBill');

    Route::get('dat-ban.html','PageController@orderNow')->name('orderNow');
    Route::get('menu.html','PageController@menu')->name('menu');
    Route::get('account/orders','AuthController@accoungOrder')->name('accoungOrder')->middleware('CheckAuthClient::class');
    Route::get('account/orders/{billid}','AuthController@accoungOrderDetail')->name('accoungOrderDetail')->middleware('CheckAuthClient::class');
    
    Route::get('auth/google', 'GoogleController@redirectToGoogle')->name('loginGoogle');
    Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

    Route::get('auth/facebook', 'FacebookController@redirectToFacebook')->name('loginFacebook');
    Route::get('auth/facebook/callback', 'FacebookController@handleFacebookCallback'); 
    Route::group(['prefix'=>'tin-tuc'], function(){
        Route::get('/tat-ca.html','BlogController@list')->name('allListBlog');
        Route::get('danh-muc/{slug}.html','BlogController@listCateBlog')->name('listCateBlog');
        Route::get('loai-danh-muc/{slug}.html','BlogController@listTypeBlog')->name('listTypeBlog');
        Route::get('chi-tiet/{slug}.html','BlogController@detailBlog')->name('detailBlog');
    });

    Route::get('tat-ca-san-pham.html','ProductController@allProduct')->name('allProduct');
    Route::get('chi-tiet/{cate}/{type}/{id}.html','ProductController@detail_product')->name('detailProduct');
    Route::get('{danhmuc}.html','ProductController@allListCate')->name('allListProCate');
    Route::get('{danhmuc}/{loaidanhmuc}.html','ProductController@allListType')->name('allListType');
    Route::get('{danhmuc}/{loaidanhmuc}/{thuonghieu}.html','ProductController@allListTypeTwo')->name('allListTypeTwo');

});


Route::post('/languages', 'LanguageController@index')->name('languages');
