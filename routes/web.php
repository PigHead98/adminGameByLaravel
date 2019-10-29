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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('quan-tri')->group(function() {
    Route::prefix('nguoi-choi')->group(function() {
        Route::get('/', 'NguoiChoiController@index')
            ->name('tatcanguoichoi');

        Route::get('cap-nhat/{id?}', 'NguoiChoiController@capnhatNguoiChoi')
            ->where('id', '[0-9*]')->name('capnhatnguoichoi');

        Route::get('xoa/{id?}', 'NguoiChoiController@del')
            ->where('id', '[0-9*]')->name('xoanguoichoi');

        Route::post('check', 'NguoiChoiController@check')
            ->name('checknguoichoi');

    });
    Route::prefix('lich-su-mua-credit')->group(function() {
        Route::get('/', 'GoiCreditController@lichsu')
            ->name('tatcacredithistory');

        Route::get('cap-nhat/{id?}', 'GoiCreditController@capnhatLichSu')
            ->where('id', '[0-9*]')->name('capnhatcredithistory');

    });
    Route::prefix('goi-credit')->group(function() {
        Route::get('/', 'GoiCreditController@index')
            ->name('tatcacredit');

        Route::get('cap-nhat/{id?}', 'GoiCreditController@capnhatGoi')
            ->where('id', '[0-9*]')->name('capnhatcredit');

        Route::get('xoa/{id?}', 'GoiCreditController@del')
            ->where('id', '[0-9*]')->name('xoacredit');

        Route::post('check', 'GoiCreditController@checkCredit')
            ->name('checkcredit');

    });
    Route::prefix('linh-vuc')->group(function() {
        Route::get('/', 'LinhVucController@index')
            ->name('tatcalinhvuc');

        Route::get('xoa/{id?}', 'LinhVucController@del')
            ->where('id', '[0-9*]')->name('xoalinhvuc');

        Route::get('cap-nhat/{id?}', 'LinhVucController@capnhatLinhVuc')
            ->where('id', '[0-9*]')->name('capnhatlinhvuc');

        Route::post('check', 'LinhVucController@check')
            ->name('checklinhvuc');
    });
    Route::prefix('cau-hoi')->group(function() {
        Route::get('/', 'CauHoiController@index')
            ->name('tatcacauhoi');

        Route::get('xoa/{id?}', 'CauHoiController@del')
            ->where('id', '[0-9*]')->name('xoacauhoi');

        Route::get('cap-nhat/{id?}', 'CauHoiController@capnhatCauHoi')
            ->where('id', '[0-9*]')->name('capnhatcauhoi');

        Route::post('check', 'CauHoiController@check')
            ->name('checkcauhoi');
    });
    Route::prefix('chi-tiet-luot-choi')->group(function() {
        Route::get('/', 'LuotChoiController@chitiet')
            ->name('tatcachitietluotchoi');

        Route::get('cap-nhat/{id?}', 'LuotChoiController@capnhatChiTietLuotChoi')
            ->where('id', '[0-9*]')->name('capnhatchitietluotchoi');
    });
    Route::prefix('luot-choi')->group(function() {
        Route::get('/', 'LuotChoiController@index')
            ->name('tatcaluotchoi');

        Route::get('cap-nhat/{id?}', 'ChiTietLuotChoiController@capnhatChiTietLuotChoi')
            ->where('id', '[0-9*]')->name('capnhatluotchoi');
    });

});
