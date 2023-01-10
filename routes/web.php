<?php

use App\Http\Controllers\RapatController;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\GedungController;
use App\Http\Livewire\Rapat\MasterRapat;
use App\Http\Livewire\Suratkeluar\Mastersuratkeluar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InventorymaintenanceController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\ManagerinventoryController;
use App\Http\Controllers\MaintenanceinventoryController;
use App\Models\User;


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



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('home');
    Route::get('/surat/masuk', [SuratmasukController::class, 'index'])->name('suratmasuk')->middleware('can:mudir-admin');
    Route::get('/surat/keluar', Mastersuratkeluar::class)->name('suratkeluar.dayah')->middleware('can:mudir-admin');
    Route::get('/user', function () {
        return view('user.master-user', ['user' => User::all()]);
    })->name('user')->middleware('can:admin');
    // Route::get('/rapat', MasterRapat::class)->name('rapat.master');
    // Route::resource('/rapat', RapatController::class)->except('index');
    Route::resource('/notulensi', RapatController::class);
    Route::get('/notulensi/{unik_id}/savepdf', [RapatController::class, 'createpdf'])->name('rapat.savepdf');

    Route::resource('/sdm', SdmController::class)->middleware('can:mudir-admin')->except('store', 'update');
    Route::resource('/sarpras/gedung', GedungController::class)->except('create', 'edit', 'update', 'destroy');
    Route::resource('/sarpras/ruang', RuangController::class)->except('index', 'create', 'store', 'edit', 'update', 'destroy');
    Route::resource('/sarpras/inventory', InventoryController::class)->except('update', 'destroy');
    Route::resource('/manager/inventory', ManagerinventoryController::class)->except('create', 'store', 'edit', 'update', 'destroy');
    Route::resource('/maintenance/inventory', MaintenanceinventoryController::class)->except('create', 'store', 'edit', 'destroy');
    // Route::resource('/sarpras/mantenance', InventorymaintenanceController::class)->except('index','create',);
    Route::post('/sarpras/ruang', [GedungController::class, 'createruang'])->name('add.ruang');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// Route::group(['prefix' => 'laravel-filemanager'], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
