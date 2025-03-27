<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Sertifikat;

class ProfilController extends Controller
{
    // ===================MY PROFIL=============
    public function profil(){
        // if(auth()->user()->can('view_dashboard')){}
        // dd(auth()->user()->getRoleNames());
    
        return view('profil.myprofil');
    }

    // ===================SERTIFIKAT============
   


    

    // ===================UPLOAD===============
   

    

    


    // ========================EDIT PROFIL==================
    public function edit()
    {
        return view('profil.editprofil');
    }


    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input sesuai kebutuhan
        $request->validate([
            'Foto'                  => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
        // $mime = $request->file('Foto')->getMimeType();
        // dd($mime);

        // Simpan foto profil jika diunggah
        if ($request->hasFile('Foto')) {
            $foto = $request->file('Foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();

            // Simpan file ke direktori yang diinginkan
            $foto->storeAs('public/foto_profil', $namaFoto);

            // Hapus foto lama jika ada
            if ($user->Foto) {
                Storage::delete('public/foto_profil/' . $user->Foto);
            }

            // Gunakan Query Builder untuk mengupdate data
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'Foto'              => $namaFoto, // Simpan nama file foto ke dalam kolom 'Foto'
                ]);
        }

        return redirect()->route('admin.profil.view')->with('success', 'Foto profil berhasil diperbarui.');
    }

    public function update2(Request $request)
    {
        $user = Auth::user();

        // Validasi input sesuai kebutuhan
        $request->validate([
            
            'Alamat'                => 'required',
            'NoHP'                  => 'required',
            'Email'                 => 'required|email',
            'Agama'                 => 'required',
            'StatusPerkawinan'      => 'required',
        ]);
            
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'Alamat'            => $request->Alamat,
                    'NoHP'              => $request->NoHP,
                    'Email'             => $request->Email,
                    'StatusPerkawinan'  => $request->StatusPerkawinan,
                    'Agama'             => $request->Agama,
                ]);
        

        return redirect()->route('admin.profil.view')->with('success', 'Profil berhasil diperbarui.');
    }

    // =========================ganti password====================
    public function gantiPasswordForm()
    {
        return view('profil.gantipassword');
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:3|confirmed',
        ]);

        $user = Auth::user();

        // Validasi password lama
        if ($user->password === $request->input('password_lama')) {
            // Update password baru
            DB::table('perawat')
                ->where('id', $user->id)
                ->update([
                    'password' => $request->input('password_baru'),
                ]);

            return redirect()->route('admin.profil.view')->with('success', 'Password berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }
    }
    

}
