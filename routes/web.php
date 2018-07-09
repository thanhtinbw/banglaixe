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
    return view('index');
});

Route::get('dichvu', function () {
	return view('dichvu');
});

Route::get('dichvu/bangxemay', function () {
	return view('xemay');
});

Route::get('dichvu/bangxemay/a1', function () {
	return view('xemaya1');
});

Route::get('dichvu/bangxemay/a2', function () {
	return view('xemaya2');
});

Route::get('dichvu/bangoto', function () {
	return view('goto');
});

Route::get('dichvu/bangoto/b1', function () {
	return view('otob1');
});

Route::get('dichvu/bangoto/b2', function () {
	return view('otob2');
});

Route::get('hotro', function () {
	return view('hotro');
});

Route::get('hotro/banht', function () {
	return view('banht');
});

Route::get('hotro/trongoi', function () {
	return view('trongoi');
});

Route::get('lienhe', function () {
	return view('lienhe');
});

Route::get('gioithieu', function () {
	return view('gioithieu');
});