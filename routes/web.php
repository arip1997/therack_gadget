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
// Route::get('/', function () {
//     return view('frontend.page.home');
// });


        //Front End
Route::get('/' , 'Frontend\PageController@home1')->name('home');
Route::get('/home1' , 'Frontend\PageController@home1')->name('home1');
Route::get('/home2' , 'Frontend\PageController@home2')->name('home2');
Route::get('/home3' , 'Frontend\PageController@home2')->name('home3');
Route::get('/product' , 'Frontend\PageController@product')->name('product');
Route::get('/productdetail' , 'Frontend\PageController@productdetail')->name('productdetail');
Route::get('/cart' , 'Frontend\PageController@cart')->name('cart');
Route::get('/blog' , 'Frontend\PageController@blog')->name('blog');
Route::get('/blogdetail' , 'Frontend\PageController@blogdetail')->name('blogdetail');
Route::get('/about' , 'Frontend\PageController@about')->name('about');
Route::get('/contact' , 'Frontend\PageController@contact')->name('contact');
Route::get('/formlogin' , 'Frontend\PageController@formlogin')->name('formlogin');
Route::get('/homeauth' , 'Frontend\PageController@homeauth')->name('homeauth');


            //Back End
Route::get('/products' , 'Frontend\PageController@products')->name('products');

Route::get('/admin','AdminController@admin');
Route::get('/admin', 'Frontend\PageController@admin')->name('admin');




// nama',function(){
//     return view('cobalagi');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
