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
//     return view('welcome');
// });

//MAIN
Route::get('/', 'CyberController@landingpage');
Route::get('/search', 'CyberController@searchInput');
Route::get('/360', 'CyberController@totalImaging');
Route::get('/feature/fully-responsive', 'CyberController@feature1');
Route::get('/feature/content-management-system', 'CyberController@feature2');
Route::get('/feature/unique-design', 'CyberController@feature3');
Route::get('/feature/custom-feature', 'CyberController@feature4');
Route::post('/contact/submit', 'CyberController@contactSubmit');
Route::post('/coba', 'CyberController@coba');

//SHOWCASE LIST
// Route::get('/showcase/list-logo', 'ShowcaseController@listLogo');
// Route::get('/showcase/list-apps', 'ShowcaseController@listApps');
// Route::get('/showcase/list-branding', 'ShowcaseController@listBranding');
// Route::get('/showcase/list-game', 'ShowcaseController@listGame');
// Route::get('/showcase/list-menu', 'ShowcaseController@listMenu');
// Route::get('/showcase/list-packaging', 'ShowcaseController@listPackaging');
// Route::get('/showcase/list-stationery', 'ShowcaseController@listStat');
// Route::get('/showcase/list-website', 'ShowcaseController@listWeb');

Route::get('/showcase/category', 'ShowcaseController@categoryList');
Route::get('/showcase/list/{id}', 'ShowcaseController@showcaseList');
Route::get('/showcase/detail/{id}', 'ShowcaseController@showcaseDetail');

//SHOWCASE DETAIL
// Route::get('/showcase/360-total-imaging', 'ShowcaseController@total360');
// Route::get('/showcase/adhi-buana', 'ShowcaseController@adhiBuana');
// Route::get('/showcase/bcp-contractor', 'ShowcaseController@bcpContractor');
// Route::get('/showcase/blue-dolphin', 'ShowcaseController@blueDolphin');
// Route::get('/showcase/boss-katsu', 'ShowcaseController@bossKatsu');
// Route::get('/showcase/chuar', 'ShowcaseController@chuar');
// Route::get('/showcase/drg-andhika', 'ShowcaseController@drgAndhika');
// Route::get('/showcase/dr-theressia', 'ShowcaseController@drTheressia');
// Route::get('/showcase/dr-tisya', 'ShowcaseController@drTisya');
// Route::get('/showcase/drg-andhika', 'ShowcaseController@drgAndhika');
// Route::get('/showcase/dwi-golden', 'ShowcaseController@dwiGolden');
// Route::get('/showcase/enggal-jaya', 'ShowcaseController@enggalJaya');
// Route::get('/showcase/fox-creek', 'ShowcaseController@foxCreek');
// Route::get('/showcase/home-grab', 'ShowcaseController@homeGrab');
// Route::get('/showcase/icompete', 'ShowcaseController@icompete');
// Route::get('/showcase/intec', 'ShowcaseController@intec');
// Route::get('/showcase/irkon-panelindo', 'ShowcaseController@irkonPanelindo');
// Route::get('/showcase/kaiser-medical', 'ShowcaseController@kaiserMedical');
// Route::get('/showcase/latoya', 'ShowcaseController@latoya');
// Route::get('/showcase/luisa', 'ShowcaseController@luisa');
// Route::get('/showcase/noe', 'ShowcaseController@noe');
// Route::get('/showcase/pakelan', 'ShowcaseController@pakelan');
// Route::get('/showcase/people-finder', 'ShowcaseController@peopleFinder');
// Route::get('/showcase/petraco', 'ShowcaseController@petraco');
// Route::get('/showcase/p-pouch', 'ShowcaseController@pPouch');
// Route::get('/showcase/pt-multi', 'ShowcaseController@ptMulti');
// Route::get('/showcase/sehati', 'ShowcaseController@sehati');
// Route::get('/showcase/tick-travel', 'ShowcaseController@tickTravel');

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

Route::get('/admin/landing-page', 'AdminController@landingPage');

Route::get('/admin/basic-info', 'AdminController@basicInfo');
	Route::get('/admin/basic-info/edit', 'AdminController@basicEdit');
	Route::post('/admin/basic-info/update', 'AdminController@basicUpdate');


Route::get('/new', 'AdminController@new');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
