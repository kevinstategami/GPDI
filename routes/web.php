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

//IMAGE
Route::get('/slide/{filename}', function ($filename)
{
	$path = storage_path('slide') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});




Route::get('/', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Customer
Route::get('/wadah', 'CustomerController@wadah');
Route::get('/wadah/show/{id}', 'CustomerController@wadah_show');
Route::get('/jadwalibadah', 'CustomerController@jadwalibadah');
Route::get('/permohonandoa', 'CustomerController@permohonandoa');
Route::post('/permohonandoa/post', 'CustomerController@post_permohonandoa');
Route::get('/keselamatan', 'CustomerController@keselamatan');
Route::get('/pengakuan', 'CustomerController@pengakuan');

	//Info Rohani
Route::get('/info_rohani/ringkasankhotbah', 'CustomerController@ringkasankhotbah');
Route::get('/info_rohani/ringkasankhotbah/show/{id}', 'CustomerController@show_ringkasankhotbah');

	//Artikel
Route::get('/info_rohani/artikel', 'CustomerController@artikelrohani');
Route::get('/info_rohani/artikel/show/{id}', 'CustomerController@show_artikelrohani');

	//gallery
Route::get('gallery', 'CustomerController@gallery');
Route::get('gallery/show/{id}', 'CustomerController@show_gallery');



	//Admin
Route::group(['middleware' => 'admin'], function(){
Route::prefix('dashboard')->group(function () {

//Admin
Route::get('/', 'AdminController@index');

//SlideShow
Route::prefix('slideshow')->group(function () {
	Route::get('/', 'SlideshowController@index');
	Route::get('tambah', 'SlideshowController@create');
	Route::get('edit/{id}', 'SlideshowController@edit');
	Route::get('delete/{id}', 'SlideshowController@destroy');
	Route::post('post', 'SlideshowController@store');
	Route::post('update', 'SlideshowController@update');
});



//Wadah
Route::prefix('wadah')->group(function () {
	Route::get('/', 'WadahController@index');
	Route::get('create', 'WadahController@create');
	Route::get('edit/{id}', 'WadahController@edit');
	Route::post('post', 'WadahController@store');
	Route::post('update', 'WadahController@update');
});


	//JadwalIbadah
Route::prefix('jadwal')->group(function () {
	Route::get('/', 'JadwalController@index');
	Route::get('create', 'JadwalController@create');
	Route::get('edit/{id}', 'JadwalController@edit');
	Route::get('delete/{id}', 'JadwalController@destroy');
	Route::post('post','JadwalController@store');
	Route::post('update','JadwalController@update');
});

	//RingkasanKhotbah
Route::prefix('ringkasan')->group(function () {
	Route::get('/', 'RingkasanController@index');
	Route::get('create', 'RingkasanController@create');
	Route::get('edit/{id}', 'RingkasanController@edit');
	Route::get('show/{id}', 'RingkasanController@show');
	Route::get('delete/{id}', 'RingkasanController@destroy');
	Route::post('post','RingkasanController@store');
	Route::post('update','RingkasanController@update');
});

	//ArtikelRohani
Route::prefix('artikel')->group(function () {
	Route::get('/', 'ArtikelController@index');
	Route::get('create', 'ArtikelController@create');
	Route::get('show/{id}', 'ArtikelController@show');
	Route::get('edit/{id}', 'ArtikelController@edit');
	Route::get('delete/{id}', 'ArtikelController@destroy');
	Route::post('post', 'ArtikelController@store');
	Route::post('update', 'ArtikelController@update');
});


	//Biodata
Route::prefix('customer')->group(function () {
	Route::get('/', 'CustomerController@index');
	Route::get('delete/{id}', 'CustomerController@destroy');
});

	//PermohonanDoa
Route::prefix('permohonandoa')->group(function () {
	Route::get('/', 'PermohonanController@index');
	Route::post('update', 'PermohonanController@update');
});

	//Keselamatan
Route::prefix('keselamatan')->group(function () {
	Route::get('/', 'KeselamatanController@index');
	Route::post('update', 'KeselamatanController@update');
});

	//Keselamatan
Route::prefix('pengakuan')->group(function () {
	Route::get('/', 'PengakuanController@index');
	Route::post('update', 'PengakuanController@update');
});

	//Footer
Route::prefix('footer')->group(function () {
	Route::get('/', 'AdminController@footer');
	Route::post('update', 'AdminController@update_footer');
});

	//Event
Route::prefix('event')->group(function () {
	Route::get('/', 'EventController@index');
	Route::get('create', 'EventController@create');
	Route::get('edit/{id}', 'EventController@edit');
	Route::get('delete/{id}', 'EventController@destroy');
	Route::post('post', 'EventController@store');
	Route::post('update', 'EventController@update');
});

	//Gallery
Route::prefix('gallery')->group(function () {
	Route::get('/', 'GalleryController@index');
	Route::get('create', 'GalleryController@create');
	Route::get('edit/{id}', 'GalleryController@edit');
	Route::get('show/{id}', 'GalleryController@show');
	Route::get('delete/{id}', 'GalleryController@destroy');
	Route::post('post', 'GalleryController@store');
	Route::post('update', 'GalleryController@update');	
});

	});
});