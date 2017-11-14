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
    return view('welcome');
});

// Route::get('/about/1' , function() {
	// return '<h1>Hallo</h1>'
	// .'Halaman 1';
// });
 
// Route::get('/about/2' , function() {
	// return '<h1>Hallo</h1>'
	// .'halaman 2';
// });
 
// Route::get('/about/3' , function() {
	// return '<h1>Hallo</h1>'
	// .'halaman 3';
// });
 
// Route::get('/about/4' , function() {
	// return '<h1>Hallo</h1>'
	// .'halaman 4';
// });
 
// Route::get('/about/5' , function() {
	// return '<h1>Hallo</h1>'
	// .'halaman 5';
// });


 // Route::get('/about/{bakso}/{susu}/{bolu}' , function($a, $b, $c) {
	 // return '<center><h1>Hallo</h1></center>'
 // .'Ibu menjual &nbsp &nbsp &nbsp &nbsp &nbsp; : <b>'.$a.'</b>'.'<br>'
 // .'Ayah membeli &nbsp &nbsp &nbsp; : <b>'.$b.'</b>'.'<br>'
 // .'Saya mempunnyai : <b>'.$c.'</b>';
// });

Route::get('/user/{name?}' ,function ($name='Irfan'){
	return 'Nama abdi '.$name;
});
