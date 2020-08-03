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

Route::prefix('customers')->group(function(){
    Route::get('index', function () {
      return view('modules.customers.index');
    });
    Route::get('create',function (){

    });
    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', 'CustomerController@show')->name('customers.show');

        // Hiển thị thông tin chi tiết khách hàng có mã đ);

    Route::get('{id}/edit', 'CustomerController@edit')->name('customers.edit');

    Route::post('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::get('{id}', 'CustomerController@destroy')->name('customers.delete');
});
Route::get('/',function (){
    return view('welcome');
});
