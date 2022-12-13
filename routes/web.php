<?php

use App\Http\Controllers\MeetingController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\GedungController;
use App\Http\Livewire\Rapat\MasterRapat;
use App\Http\Livewire\Rapat\RapatAdd;
use App\Http\Livewire\Suratkeluar\Mastersuratkeluar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\InventoryController;

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
    return view('dashboard');
});

Route::get('/surat/keluar', Mastersuratkeluar::class)->name('suratkeluar.dayah');
Route::get('/surat/masuk', [SuratmasukController::class, 'index'])->name('suratmasuk');

Route::get('/rapat', MasterRapat::class)->name('rapat.master');
Route::resource('/rapat', RapatController::class)->except('index');
Route::get('/rapat/{unik_id}/savepdf', [RapatController::class, 'createpdf'])->name('rapat.savepdf');

Route::resource('/sdm', SdmController::class);
Route::resource('/sarpras/gedung', GedungController::class);
Route::resource('/sarpras/inventory', InventoryController::class);
Route::post('/sarpras/ruang', [GedungController::class, 'createruang'])->name('add.ruang');


// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
