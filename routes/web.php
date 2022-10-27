<?php

use App\Http\Controllers\MeetingController;
use App\Http\Livewire\Rapat\MasterRapat;
use App\Http\Livewire\Rapat\RapatAdd;
use App\Http\Livewire\Suratkeluar\Mastersuratkeluar;
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

// Route::get('/', function () {
//     return view('suratkeluar.index');
// });

// Route::get('/test', Master::class);
Route::get('/', Mastersuratkeluar::class)->name('surat_keluar');
Route::get('/rapat', MasterRapat::class)->name('rapat.master');
Route::get('/rapat/add', [MeetingController::class, 'index'])->name('rapat.add');
Route::post('/rapat', [MeetingController::class, 'store'])->name('rapat.store');
// Route::get('/rapat/add', RapatAdd::class)->name('rapat.add');
