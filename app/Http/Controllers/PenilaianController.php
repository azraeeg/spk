<?php

namespace App\Http\Controllers;

use App\Models\bidan2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PK1;

class PenilaianController extends Controller
{
    // ==================PK1==================================
    public function formpk1()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk1')->pluck('DKKD');

        return view('penilaian.pk1', compact('kewenanganKlinis', 'pegawai'));
    }

    public function simpanpk1(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk1')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk1')->with('success', 'Penilaian berhasil disimpan.');
    }

    // ===================BIDAN 1=============================
    public function formbidan1()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkbidan1')->pluck('DKKD');

        return view('penilaian.bidan1', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanbidan1(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('bidan1')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formbidan1')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================BIDAN 2=============================
    public function formbidan2()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkbidan2')->pluck('DKKD');

        return view('penilaian.bidan2', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanbidan2(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('bidan2')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formbidan2')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================BIDAN 3=============================
    public function formbidan3()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkbidan3')->pluck('DKKD');

        return view('penilaian.bidan3', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanbidan3(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('bidan3')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formbidan3')->with('success', 'Penilaian berhasil disimpan.');
    }

    // ===================PK2 ANESTESI=============================
    public function formpk2anestesi()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2anestesi')->pluck('DKKD');

        return view('penilaian.pk2anestesi', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2anestesi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2anestesi')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2anestesi')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 BEDAH=============================
    public function formpk2bedah()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2bedah')->pluck('DKKD');

        return view('penilaian.pk2bedah', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2bedah(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2bedah')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2bedah')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 HD=============================
    public function formpk2hd()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2hd')->pluck('DKKD');

        return view('penilaian.pk2hd', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2hd(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2hd')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2hd')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 ICU=============================
    public function formpk2icu()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2icu')->pluck('DKKD');

        return view('penilaian.pk2icu', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2icu(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2icu')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2icu')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 IGD=============================
    public function formpk2igd()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2igd')->pluck('DKKD');

        return view('penilaian.pk2igd', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2igd(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2igd')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2igd')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 IPCN=============================
    public function formpk2ipcn()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2ipcn')->pluck('DKKD');

        return view('penilaian.pk2ipcn', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2ipcn(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2ipcn')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2ipcn')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 MEDIKAL BEDAH=============================
    public function formpk2medikalbedah()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2medikalbedah')->pluck('DKKD');

        return view('penilaian.pk2medikalbedah', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2medikalbedah(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2medikalbedah')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2medikalbedah')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK2 NEONATOLOGI=============================
    public function formpk2neonatologi()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk2neonatologi')->pluck('DKKD');

        return view('penilaian.pk2neonatologi', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk2neonatologi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk2neonatologi')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk2neonatologi')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK3 ANESTESI=============================
    public function formpk3anestesi()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk3anestesi')->pluck('DKKD');

        return view('penilaian.pk3anestesi', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk3anestesi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk3anestesi')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk3anestesi')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK3 BEDAH=============================
    public function formpk3bedah()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk3bedah')->pluck('DKKD');

        return view('penilaian.pk3bedah', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk3bedah(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk3bedah')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk3bedah')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK3 HD=============================
    public function formpk3hd()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk3hd')->pluck('DKKD');

        return view('penilaian.pk3hd', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk3hd(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk3hd')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk3hd')->with('success', 'Penilaian berhasil disimpan.');
    }
     // ===================PK3 ICU=============================
     public function formpk3icu()
     {
         $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
         $kewenanganKlinis = DB::table('rkkpk3icu')->pluck('DKKD');
 
         return view('penilaian.pk3icu', compact('kewenanganKlinis', 'pegawai'));
     }
     public function simpanpk3icu(Request $request)
     {
         // dd($request->all());
         $request->validate([
             'penilai' => 'required',
             'jabatan' => 'required',
             'nopeg' => 'required',
             'mandiri' => 'required|array',
             'mandat' => 'required|array',
             'delegasi' => 'required|array',
         ]);
         $data = $request->all();
         $kewenangans = array_keys($data['mandiri']);
         foreach ($kewenangans as $kewenangan) {
             
             $criteria = [
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
             ];
             $updateData = [
                 'Penilai' => $data['penilai'],
                 'Jabatan' => $data['jabatan'],
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
                 'Mandiri' => $data['mandiri'][$kewenangan],
                 'Mandat' => $data['mandat'][$kewenangan],
                 'Delegasi' => $data['delegasi'][$kewenangan],
             ];
             // dd($updateData);
             DB::table('pk3icu')->updateOrInsert($criteria,$updateData);
         }
         return redirect()->route('admin.formpk3icu')->with('success', 'Penilaian berhasil disimpan.');
     }
     // ===================PK3 IGD=============================
     public function formpk3igd()
     {
         $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
         $kewenanganKlinis = DB::table('rkkpk3igd')->pluck('DKKD');
 
         return view('penilaian.pk3igd', compact('kewenanganKlinis', 'pegawai'));
     }
     public function simpanpk3igd(Request $request)
     {
         // dd($request->all());
         $request->validate([
             'penilai' => 'required',
             'jabatan' => 'required',
             'nopeg' => 'required',
             'mandiri' => 'required|array',
             'mandat' => 'required|array',
             'delegasi' => 'required|array',
         ]);
         $data = $request->all();
         $kewenangans = array_keys($data['mandiri']);
         foreach ($kewenangans as $kewenangan) {
             
             $criteria = [
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
             ];
             $updateData = [
                 'Penilai' => $data['penilai'],
                 'Jabatan' => $data['jabatan'],
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
                 'Mandiri' => $data['mandiri'][$kewenangan],
                 'Mandat' => $data['mandat'][$kewenangan],
                 'Delegasi' => $data['delegasi'][$kewenangan],
             ];
             // dd($updateData);
             DB::table('pk3igd')->updateOrInsert($criteria,$updateData);
         }
         return redirect()->route('admin.formpk3igd')->with('success', 'Penilaian berhasil disimpan.');
     }
     // ===================PK3 IPCN=============================
     public function formpk3ipcn()
     {
         $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
         $kewenanganKlinis = DB::table('rkkpk3ipcn')->pluck('DKKD');
 
         return view('penilaian.pk3ipcn', compact('kewenanganKlinis', 'pegawai'));
     }
     public function simpanpk3ipcn(Request $request)
     {
         // dd($request->all());
         $request->validate([
             'penilai' => 'required',
             'jabatan' => 'required',
             'nopeg' => 'required',
             'mandiri' => 'required|array',
             'mandat' => 'required|array',
             'delegasi' => 'required|array',
         ]);
         $data = $request->all();
         $kewenangans = array_keys($data['mandiri']);
         foreach ($kewenangans as $kewenangan) {
             
             $criteria = [
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
             ];
             $updateData = [
                 'Penilai' => $data['penilai'],
                 'Jabatan' => $data['jabatan'],
                 'Nopeg' => $data['nopeg'],
                 'DKKD' => $kewenangan,
                 'Mandiri' => $data['mandiri'][$kewenangan],
                 'Mandat' => $data['mandat'][$kewenangan],
                 'Delegasi' => $data['delegasi'][$kewenangan],
             ];
             // dd($updateData);
             DB::table('pk3ipcn')->updateOrInsert($criteria,$updateData);
         }
         return redirect()->route('admin.formpk3ipcn')->with('success', 'Penilaian berhasil disimpan.');
     }
     // ===================PK3 MEDIKAL BEDAH=============================
    public function formpk3medikalbedah()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk3medikalbedah')->pluck('DKKD');

        return view('penilaian.pk3medikalbedah', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk3medikalbedah(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk3medikalbedah')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk3medikalbedah')->with('success', 'Penilaian berhasil disimpan.');
    }
    // ===================PK3 NEONATOLOGI=============================
    public function formpk3neonatologi()
    {
        $pegawai = DB::table('perawat')->select('Nopeg', 'Nama')->get();
        $kewenanganKlinis = DB::table('rkkpk3neonatologi')->pluck('DKKD');

        return view('penilaian.pk3neonatologi', compact('kewenanganKlinis', 'pegawai'));
    }
    public function simpanpk3neonatologi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'penilai' => 'required',
            'jabatan' => 'required',
            'nopeg' => 'required',
            'mandiri' => 'required|array',
            'mandat' => 'required|array',
            'delegasi' => 'required|array',
        ]);
        $data = $request->all();
        $kewenangans = array_keys($data['mandiri']);
        foreach ($kewenangans as $kewenangan) {
            
            $criteria = [
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
            ];
            $updateData = [
                'Penilai' => $data['penilai'],
                'Jabatan' => $data['jabatan'],
                'Nopeg' => $data['nopeg'],
                'DKKD' => $kewenangan,
                'Mandiri' => $data['mandiri'][$kewenangan],
                'Mandat' => $data['mandat'][$kewenangan],
                'Delegasi' => $data['delegasi'][$kewenangan],
            ];
            // dd($updateData);
            DB::table('pk3neonatologi')->updateOrInsert($criteria,$updateData);
        }
        return redirect()->route('admin.formpk3neonatologi')->with('success', 'Penilaian berhasil disimpan.');
    }
}
