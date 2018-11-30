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
Route::get('/', function () { 
	return redirect('login'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('settings/profile', 'SettingsController@profile');

Route::group(['middleware'=>['auth','role:admin']], function () {
	// Route diisi disini...
	Route::resource('barangmaster','BarangmasterController');
	Route::resource('customer','CustomerController');
	Route::resource('supplier','SupplierController');
});

//excel 

	Route::get('export/barangmaster', [
    'as' => 'export.barangmaster',
    'uses' => 'BarangmasterController@exportPost'
	]);

Route::group(['middleware'=>['auth','role:member|admin']], function () {
	// Route diisi disini..
	Route::resource('barangmasuk','BarangmasukController');
	Route::resource('barangkeluar','BarangkeluarController');
	

});

