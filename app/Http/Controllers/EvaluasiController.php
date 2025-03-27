<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EvaluasiController extends Controller
{

    // =============read==============
    public function evaread()
    {
        return view('evaluasi.read');
    }
    public function formhasil(Request $request)
    {
        $search = $request->input('search');

        $query = DB::table('spk')->when($search, function ($query) use ($search) {
            return $query->where('Nama', 'like', '%' . $search . '%');
        });

        $dokterData = $query->paginate(10);

        return view('evaluasi.readhasileva', compact('dokterData', 'search'));
    }

    public function hasilbedah($nopeg)
    {
        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $hasilPenilaian = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->get();
        $DPJP = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('DPJP');
        $Bulan = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Bulan');
        $Penilai = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Penilai');
        $Tanggal = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Tanggal');
        $Hasil1 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil1');
        $Hasil2 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil2');
        $Hasil3 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil3');
        $Hasil4 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil4');
        $Hasil5 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil5');
        $Hasil6 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil6');
        $Hasil7 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil7');
        $Hasil8 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil8');
        $Hasil9 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil9');
        $Hasil10 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil10');

        $Qrcode = DB::table('choper')->where('Nama', $Penilai)->value('Qrcode');
        $Qrcode2 = DB::table('choper')->where('Nama', $DPJP)->value('Qrcode');

        return view('evaluasi.hasilbedah', compact('Qrcode','Qrcode2','pegawai','hasilPenilaian', 'nopeg', 'Penilai', 'Tanggal','DPJP','Bulan','Hasil1', 'Hasil2', 'Hasil3', 'Hasil4', 'Hasil5', 'Hasil6', 'Hasil7', 'Hasil8', 'Hasil9', 'Hasil10'));
    }

    public function hasilnonbedah($nopeg)
    {

        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $hasilPenilaian = DB::table('evaluasi')->where('Nopeg', $nopeg)->get();
        $DPJP = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('DPJP');
        $Bulan = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Bulan');
        $Penilai = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Penilai');
        $Tanggal = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Tanggal');
        $Hasil1 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil1');
        $Hasil2 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil2');
        $Hasil3 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil3');
        $Hasil4 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil4');
        $Hasil5 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil5');
        $Hasil6 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil6');
        $Hasil7 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil7');
        $Hasil8 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil8');
        $Hasil9 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil9');

        $Qrcode = DB::table('choper')->where('Nama', $Penilai)->value('Qrcode');
        $Qrcode2 = DB::table('choper')->where('Nama', $DPJP)->value('Qrcode');


        return view('evaluasi.hasilnonbedah', compact('Qrcode2','Qrcode','pegawai','hasilPenilaian', 'nopeg', 'Penilai', 'Tanggal','DPJP','Bulan','Hasil1', 'Hasil2', 'Hasil3', 'Hasil4', 'Hasil5', 'Hasil6', 'Hasil7', 'Hasil8', 'Hasil9'));
    }

    // =============read user=======================
    public function hasilnonbedahuser()
    {
        $user = Auth::user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('evaluasi')->where('Nopeg', $nopeg)->get();
        $DPJP = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('DPJP');
        $Bulan = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Bulan');
        $Penilai = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Penilai');
        $Tanggal = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Tanggal');
        $Hasil1 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil1');
        $Hasil2 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil2');
        $Hasil3 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil3');
        $Hasil4 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil4');
        $Hasil5 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil5');
        $Hasil6 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil6');
        $Hasil7 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil7');
        $Hasil8 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil8');
        $Hasil9 = DB::table('evaluasi')->where('Nopeg', $nopeg)->value('Hasil9');

        $Qrcode = DB::table('choper')->where('Nama', $Penilai)->value('Qrcode');
        $Qrcode2 = DB::table('choper')->where('Nama', $DPJP)->value('Qrcode');
        // dd($nopeg);

        return view('profil.hasilnonbedahuser', compact('nama','Qrcode2','Qrcode','hasilPenilaian', 'nopeg', 'Penilai', 'Tanggal','DPJP','Bulan','Hasil1', 'Hasil2', 'Hasil3', 'Hasil4', 'Hasil5', 'Hasil6', 'Hasil7', 'Hasil8', 'Hasil9'));
    }

    public function hasilbedahuser()
    {
        $user = Auth::user();
        $nopeg = $user->Nopeg;
        $nama = $user->Nama;
        $hasilPenilaian = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->get();
        $DPJP = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('DPJP');
        $Bulan = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Bulan');
        $Penilai = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Penilai');
        $Tanggal = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Tanggal');
        $Hasil1 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil1');
        $Hasil2 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil2');
        $Hasil3 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil3');
        $Hasil4 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil4');
        $Hasil5 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil5');
        $Hasil6 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil6');
        $Hasil7 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil7');
        $Hasil8 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil8');
        $Hasil9 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil9');
        $Hasil10 = DB::table('evaluasibedah')->where('Nopeg', $nopeg)->value('Hasil10');

        $Qrcode = DB::table('choper')->where('Nama', $Penilai)->value('Qrcode');
        $Qrcode2 = DB::table('choper')->where('Nama', $DPJP)->value('Qrcode');
        // dd($nopeg);

        return view('profil.hasilbedahuser', compact('nama','Qrcode2','Qrcode','hasilPenilaian', 'nopeg', 'Penilai', 'Tanggal','DPJP','Bulan','Hasil1', 'Hasil2', 'Hasil3', 'Hasil4', 'Hasil5', 'Hasil6', 'Hasil7', 'Hasil8', 'Hasil9','Hasil10'));
    }

    // ============create===============
    public function formnonbedah(Request $request)
    {


        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $penilai = DB::table('spk')->select('Nama')->get();
        $ternilai = DB::table('spk')->select('Nama')->get();

        return view('evaluasi.createnonbedah', compact('pegawai','penilai','ternilai'));
    }

    public function storenonbedah(Request $request)
    {
        // Validasi input jika diperlukan
        // dd($request->all());
        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $request->validate([
            'Bulan' => 'required',
            'Nopeg' => 'required',
            'Hasil1' => 'required',
            'Hasil2' => 'required',
            'Hasil3' => 'required',
            'Hasil4' => 'required',
            'Hasil5' => 'required',
            'Hasil6' => 'required',
            'Hasil7' => 'required',
            'Hasil8' => 'required',
            'Hasil9' => 'required',
            'Tanggal' => 'required',
            'Penilai' => 'required',
            'DPJP' => 'required',
            // Anda bisa menambahkan validasi lainnya sesuai kebutuhan
        ]);



        // Simpan data ke dalam database
        db::table('evaluasi')->updateOrInsert([
            'Bulan' => $request->Bulan,
            'Nopeg' => $request->Nopeg,
            'Hasil1' => $request->Hasil1,
            'Hasil2' => $request->Hasil2,
            'Hasil3' => $request->Hasil3,
            'Hasil4' => $request->Hasil4,
            'Hasil5' => $request->Hasil5,
            'Hasil6' => $request->Hasil6,
            'Hasil7' => $request->Hasil7,
            'Hasil8' => $request->Hasil8,
            'Hasil9' => $request->Hasil9,
            'Tanggal' => $request->Tanggal,
            'Penilai' => $request->Penilai,
            'DPJP' => $request->DPJP,
            // Sesuaikan dengan nama kolom dan input pada form Anda
            // Anda juga bisa menyimpan data lainnya dari form sesuai kebutuhan
        ]);
        return redirect()->route('admin.form.nonbedah', compact('pegawai'))->with('success Data berhasil disimpan.');
    }

    public function formbedah(Request $request)
    {

        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $penilai = DB::table('spk')->select('Nama')->get();
        $ternilai = DB::table('spk')->select('Nama')->get();

        return view('evaluasi.createbedah', compact('pegawai','penilai','ternilai'));
    }
    public function storebedah(Request $request)
    {
        // Validasi input jika diperlukan
        // dd($request->all());
        $pegawai = DB::table('spk')->select('Nopeg', 'Nama')->get();
        $request->validate([
            'Bulan' => 'required',
            'Nopeg' => 'required',
            'Hasil1' => 'required',
            'Hasil2' => 'required',
            'Hasil3' => 'required',
            'Hasil4' => 'required',
            'Hasil5' => 'required',
            'Hasil6' => 'required',
            'Hasil7' => 'required',
            'Hasil8' => 'required',
            'Hasil9' => 'required',
            'Hasil10' => 'required',
            'Tanggal' => 'required',
            'Penilai' => 'required',
            'DPJP' => 'required',
            // Anda bisa menambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke dalam database
        db::table('evaluasiBedah')->updateOrInsert([
            'Bulan' => $request->Bulan,
            'Nopeg' => $request->Nopeg,
            'Hasil1' => $request->Hasil1,
            'Hasil2' => $request->Hasil2,
            'Hasil3' => $request->Hasil3,
            'Hasil4' => $request->Hasil4,
            'Hasil5' => $request->Hasil5,
            'Hasil6' => $request->Hasil6,
            'Hasil7' => $request->Hasil7,
            'Hasil8' => $request->Hasil8,
            'Hasil9' => $request->Hasil9,
            'Hasil10' => $request->Hasil10,
            'Tanggal' => $request->Tanggal,
            'Penilai' => $request->Penilai,
            'DPJP' => $request->DPJP,
            // Sesuaikan dengan nama kolom dan input pada form Anda
            // Anda juga bisa menyimpan data lainnya dari form sesuai kebutuhan
        ]);
        return redirect()->route('admin.form.bedah', compact('pegawai'))->with('success', 'Data berhasil disimpan.');
    }
}
