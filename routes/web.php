<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\EvaluasiController;


Route::get('/', function () {
    return view('auth.login');
});


// ====================login===================
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout-proses',[LoginController::class,'logout'])->name('logout-proses');


Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'] , function(){

    // ====================create spk==============
    Route::get('/formspk', [SpkController::class, 'showspk'])->name('spk.form');
    Route::post('/form', [SpkController::class, 'storeData'])->name('spk.create');


    // ====================PROFIL==================
    Route::get('/profil',[ProfilController::class,'profil'])->name('profil.view');
    Route::get('/upload1',[ProfilController::class,'upload1'])->name('upload.view');
    Route::post('/upload', [ProfilController::class, 'upload'])->name('upload.file');

    Route::get('/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::put('/update2', [ProfilController::class, 'update2'])->name('profil.update2');

    Route::get('/ganti-password', [ProfilController::class, 'gantiPasswordForm'])->name('profil.ganti-password.form');
    Route::post('/ganti-password', [ProfilController::class, 'gantiPassword'])->name('profil.ganti-password');

    // ====================dashboard===============
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    // ====================read spk=================
    Route::get('/spk', [SpkController::class, 'index'])->name('spk.index');
    Route::post('/spk', [SpkController::class, 'storeData'])->name('spk.store');
    Route::get('/spk/jaminan', [SpkController::class, 'jaminan'])->name('spk.jaminan');
    Route::get('/spk/jaminanbpkb', [SpkController::class, 'jaminanBpkb'])->name('spk.jaminanbpkb');
    Route::post('/spk/jaminanbpkbpost', [SpkController::class, 'storeDataBpkb'])->name('spk.storeDataBpkb');
    Route::get('/spk/jaminansertif', [SpkController::class, 'jaminanSertif'])->name('spk.jaminansertif');
    Route::post('/spk/jaminansertifpost', [SpkController::class, 'storeDataSertif'])->name('spk.storeDataSertif');
    Route::get('/spk/jaminanrekening', [SpkController::class, 'jaminanRekening'])->name('spk.jaminanrekening');
    Route::post('/spk/jaminanrekeningpost', [SpkController::class, 'storeDataRek'])->name('spk.storeDataRek');
    Route::get('/spk/tanpajaminan', [SpkController::class, 'tanpaJaminan'])->name('spk.tanpaJaminan');
    Route::post('/spk/tanpajaminanpost', [SpkController::class, 'storeDataTanpaJaminan'])->name('spk.tanpajaminan.store');


    Route::get('/spk/{noSpk}/edit', [SpkController::class, 'edit'])->name('spk.edit');
    Route::put('/spk/{noSpk}', [SpkController::class, 'update'])->name('spk.update');
    Route::delete('/spk/{noSpk}', [SpkController::class, 'destroy'])->name('spk.destroy');
    // ====================print spk================
    
    Route::get('/printSpk1', [SpkController::class, 'installment'])->name('spk.installment');
    Route::get('/spk', [SpkController::class, 'cari'])->name('spk.cari');
    Route::get('/printSpk2/{noSpk}', [SpkController::class, 'printInstallment'])->name('spk.print');
    Route::get('/printSpk3/{noSpk}', [SpkController::class, 'printTransProduk'])->name('spk.print3');
    Route::get('/printSpk4/{noSpk}', [SpkController::class, 'printPersetujuanKred'])->name('spk.print4');
    Route::get('/printSpk5/{noSpk}', [SpkController::class, 'printFeo'])->name('spk.print5');
    Route::get('/printSpk6/{noSpk}', [SpkController::class, 'printSrhtrmjmn'])->name('spk.print6');
    Route::get('/printSpk7/{noSpk}', [SpkController::class, 'printPengNotaris'])->name('spk.print7');
    Route::get('/printSpk8/{noSpk}', [SpkController::class, 'printAssesoir'])->name('spk.print8');


});


