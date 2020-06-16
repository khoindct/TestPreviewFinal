<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('phanquyen')->group(function() {
    Route::get('phongban', 'PhongBanController@display');
    Route::post('themnhanvien', 'NhanVienController@insert');
    Route::get('nhanvien/{to}/{phongban_id}', 'NhanVienController@display');
    Route::post('themmoi','YeuCauController@add');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('yeucau', 'YeuCauController@display');

Route::post('nvdangnhap', 'DangNhapController@authenticate');

Route::get('dangnhap', 'DangNhapController@login');

Route::get('dangxuat', 'DangNhapController@logout');

Route::get('thanhcong', function() {
    return view('thanhCong');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
