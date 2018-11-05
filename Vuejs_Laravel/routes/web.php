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
    return view('admin.layouts.master');
});

Route::group(['prefix' => 'vue'], function () {
    Route::get('/', function () {
	    return view('welcome');
	});
});

Route::get('admin',function(){
	return view('admin.layouts.master');
});
/* ------------------------------------------------- 
       Route giảng viên
 */
Route::get('admin/giangvien',function(){
	return view('admin.giangvien.danhsach');
})->name('giangvien.danhsach');
/* ------------------------------------------------- 
       Route người dùng
 */
Route::get('admin/nguoidung',function(){
	return view('admin.nguoidung.danhsach');
})->name('nguoidung.danhsach');
/* ------------------------------------------------- 
       Route sinh viên
 */
Route::get('admin/sinhvien',function(){
	return view('admin.sinhvien.danhsach');
})->name('sinhvien.danhsach');

Route::get('admin/sinhvien/them_excel',function(){
	return view('admin.sinhvien.them_excel');
})->name('sinhvien.them_excel');

Route::get('admin/sinhvien/them',function(){
	return view('admin.sinhvien.them');
})->name('sinhvien.them');
/* ------------------------------------------------- 
       Route ngành
 */
Route::get('admin/nganh',function(){
	return view('admin.nganh.danhsach');
})->name('nganh.danhsach');

Route::get('admin/nganh/them',function(){
	return view('admin.nganh.them');
})->name('nganh.them');

/* ------------------------------------------------- 
       Route đề tài
 */
Route::get('admin/detai',function(){
	return view('admin.detai.danhsach');
})->name('detai.danhsach');
/* ------------------------------------------------- 
       Route đăng kí 
 */
Route::get('admin/dangki',function(){
	return view('admin.dangki.danhsach');
})->name('dangki.danhsach');
/* ------------------------------------------------- 
       Route Kế hoạch 
 */
Route::get('admin/kehoach',function(){
	return view('admin.kehoach.danhsach');
})->name('kehoach.danhsach');




Route::get('users/datatable', 'UserController@index')->name('datatable'); 

Route::get('giangvien/danhsach', 'GiangvienController@index')->name('danhsach_gv'); 

Route::get('sinhvien/danhsach', 'SinhvienController@index')->name('danhsach_sv'); 

Route::get('nganh/danhsach', 'NganhController@index')->name('danhsach_nganh');  

Route::get('detai/danhsach', 'DetaiController@index')->name('danhsach_detai'); 

Route::get('dangki/danhsach', 'DangkiController@index')->name('danhsach_dk');  

Route::get('kehoach/danhsach', 'KehoachController@index')->name('danhsach_kh');  



//import Excel
Route::get('admin/sinhvien/import', function(){
	return view ('admin.sinhvien.them');
});
Route::post('sinhvien.importExcel','demoExcelController@ImportSinhvien')->name('importExcel');