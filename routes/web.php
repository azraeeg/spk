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

    // =====================evaluasi==================
    Route::get('/formeva', [EvaluasiController::class, 'evaread'])->name('eva.form');
    Route::get('/formnonbedah', [EvaluasiController::class, 'formnonbedah'])->name('form.nonbedah');
    Route::post('/nonbedah/store', [EvaluasiController::class, 'storenonbedah'])->name('nonbedah.store');
    Route::get('/formbedah', [EvaluasiController::class, 'formbedah'])->name('form.bedah');
    Route::post('/bedah/store', [EvaluasiController::class, 'storebedah'])->name('bedah.store');
    // Route::get('/hasilbedah', [EvaluasiController::class, 'hasilbedah'])->name('hasil.bedah');


    Route::get('/formhasil',[EvaluasiController::class,'formhasil'])->name('form.hasil');
    Route::get('/hasil-penilaian/bedah/{nopeg}', [EvaluasiController::class, 'hasilbedah'])->name('hasil.bedah');
    Route::get('/hasil-penilaian/nonbedah/{nopeg}', [EvaluasiController::class, 'hasilnonbedah'])->name('hasil.nonbedah');

    Route::get('/hasil-penilaian/nonbedahuser', [EvaluasiController::class, 'hasilnonbedahuser'])->name('hasil.nonbedahuser');
    Route::get('/hasil-penilaian/bedahuser', [EvaluasiController::class, 'hasilbedahuser'])->name('hasil.bedahuser');



    // ====================PROFIL==================
    Route::get('/profil',[ProfilController::class,'profil'])->name('profil.view');
    Route::get('/upload1',[ProfilController::class,'upload1'])->name('upload.view');
    Route::post('/upload', [ProfilController::class, 'upload'])->name('upload.file');

    Route::get('/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::put('/update2', [ProfilController::class, 'update2'])->name('profil.update2');

    Route::get('/ganti-password', [ProfilController::class, 'gantiPasswordForm'])->name('profil.ganti-password.form');
    Route::post('/ganti-password', [ProfilController::class, 'gantiPassword'])->name('profil.ganti-password');

    // ====================sertfikat===============
    Route::get('/sertif', [ProfilController::class, 'sertif'])->name('profil.sertif');
    Route::post('/sertif/upload', [ProfilController::class, 'storesertif'])->name('sertifikat.store');

    // ====================dashboard===============
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    // ====================read spk=================
    Route::get('/spk', [SpkController::class, 'index'])->name('spk.index');
    Route::post('/spk', [SpkController::class, 'store'])->name('spk.store');
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


