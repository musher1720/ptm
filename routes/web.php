<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//staf
Route::get('staf/daftarbaruptm', [App\Http\Controllers\StafController::class, 'create'])->name('create.daftarbaruptm');
Route::post('staf/daftarbaruptm', [App\Http\Controllers\StafController::class, 'store'])->name('store.daftarbaruptm');

Route::get('staf', [App\Http\Controllers\StafController::class, 'index'])->name('staf.index');

Route::get('staf/semaksijilptm', [App\Http\Controllers\StafController::class, 'semaksijilptm'])->name('staf.semaksijilptm');
Route::post('staf/semaksijilptm', [App\Http\Controllers\StafController::class, 'semaksijilptm'])->name('staf.semaksijilptm');

Route::post('staf/uploadbaruexcelptm', [App\Http\Controllers\StafController::class, 'upload_baru_excel_ptm'])->name('staf.uploadbaruexcelptm');
Route::post('staf/uploadptm', [App\Http\Controllers\StafController::class, 'upload_ptm'])->name('staf.uploadptm');
Route::post('staf/carianptm', [App\Http\Controllers\StafController::class, 'carian_ptm'])->name('staf.carianptm');

Route::post('staf/daftarbarupengecualian', [App\Http\Controllers\StafController::class, 'daftar_baru_pengecualian'])->name('staf.daftarbarupengecualian');
Route::post('staf/uploadpengecualian', [App\Http\Controllers\StafController::class, 'upload_pengecualian'])->name('staf.uploadpengecualian');
Route::post('staf/carianpengecualian', [App\Http\Controllers\StafController::class, 'carian_pengecualian'])->name('staf.carianpengecualian');

// Route for view/blade file.
Route::get('importExportView', [App\Http\Controllers\ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [App\Http\Controllers\ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [App\Http\Controllers\ExcelController::class, 'importExcel'])->name('importExcel');