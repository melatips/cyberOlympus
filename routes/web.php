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

Route::get('mail','HomeController@sendmail');

// Auth::routes();


// Route::group(['middleware' => ['web']], function(){
// 	//AWAL
// Route::get('logout',function(){
// Auth::logout();
// return redirect('/login');
// });

// Route::get('/admin', function(){
// 	Auth::login();
// })->middleware('auth');

//MAIN
Route::get('/', 'CyberController@landingpage');
Route::get('/search', 'CyberController@searchInput');
Route::get('/360', 'CyberController@totalImaging');
// Route::get('/feature/fully-responsive', 'CyberController@feature1');
// Route::get('/feature/content-management-system', 'CyberController@feature2');
// Route::get('/feature/unique-design', 'CyberController@feature3');
// Route::get('/feature/custom-feature', 'CyberController@feature4');
Route::post('/contact/submit', 'CyberController@contactSubmit');

//FOOTER
Route::get('/about-us', 'CyberController@aboutUs');
Route::get('/blog', 'CyberController@blog');
	//nanti /article-detail diganti id article
	Route::get('/blog/article-detail', 'CyberController@articleDetail');
Route::get('/careers', 'CyberController@noPosition');
Route::get('/coba', 'CyberController@careers');


//SHOWCASE
Route::get('/showcase/category', 'ShowcaseController@categoryList');
Route::get('/showcase/all', 'ShowcaseController@allShowcase');
Route::get('/showcase/list/{id}', 'ShowcaseController@showcaseList');
Route::get('/showcase/detail/{id}', 'ShowcaseController@showcaseDetail');

//ADMIN
Route::get('/admin', 'AdminController@contactUs');
	Route::get('admin/contact-us/{id}', 'AdminController@contactDetail');
		Route::get('admin/contact-detail/{id}/delete', 'AdminController@contactDetailDelete');

Route::get('admin/category', 'AdminController@category');
	Route::get('admin/category/add', 'AdminController@categoryAdd');
		Route::post('admin/category/saveCategory', 'AdminController@saveCategory');
	Route::get('admin/category/edit/{id}', 'AdminController@categoryEdit');
		Route::post('admin/category/update/{id}', 'AdminController@updateCategory');
	Route::get('admin/category/delete/{id}', 'AdminController@deleteCategory');
	Route::get('admin/category/{id}', 'AdminController@categoryDetail');

Route::get('/admin/showcase', 'AdminController@showcase');
	Route::get('/admin/showcase/add', 'AdminController@showcaseAdd');
		Route::post('/admin/showcase/save', 'AdminController@saveShowcase');
	Route::get('admin/showcase/detail/{id}', 'AdminController@showcaseDetail');
	Route::get('admin/showcase/edit/{id}', 'AdminController@showcaseEdit');
		Route::post('admin/showcase/update/{id}', 'AdminController@updateShowcase');
	Route::get('admin/showcase/delete/{id}', 'AdminController@showcaseDelete');

Route::get('/admin/careers', 'AdminController@careers');
	Route::get('/admin/careers/add', 'AdminController@careersAdd');
		Route::post('/admin/careers/save', 'AdminController@careersSave');
	Route::get('admin/careers/detail/{id}', 'AdminController@careersDetail');
	Route::get('/admin/careers/edit/{id}', 'AdminController@careersEdit');
		Route::post('/admin/careers/update/{id}', 'AdminController@careersUpdate');
	Route::get('/admin/careers/delete/{id}', 'AdminController@careersDelete');

Route::get('/admin/basic-info', 'AdminController@basicInfo');
	Route::get('/admin/basic-info/edit', 'AdminController@basicEdit');
	Route::post('/admin/basic-info/update', 'AdminController@basicUpdate');


Route::get('/new', 'AdminController@new');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// });
