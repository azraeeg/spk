<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Models\FormSpk;
use App\Models\User;
use Riskihajar\Terbilang\Facades\Terbilang;



class SpkController extends Controller
{
    // ===================create spk======================
    public function showspk()
    {
        return view('spk.create');
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'noRekKred' => 'required', 
            'noRekTab' => 'required',
            'noSpk' => 'required|unique:form_spk,noSpk',
            'namaDebitur' => 'required',
            'namaIbuDebitur' => 'required',
            'tahunLahirDeb' => 'required|date',
            'pekerjaanDeb' => 'required',
            'alamatDeb' => 'required',
            'kotaPengadilanDeb' => 'required',
            'noKtpDeb' => 'required',
            'namaIstri' => 'required',
            'namaIbuIstri' => 'required',
            'tahunLahirIstri' => 'required|date',
            'pekerjaanIstri' => 'required',
            'alamatIstri' => 'required',
            'kotaPengadilanIstri' => 'required',
            'noKtpIstri' => 'required',
            'namaPenj' => 'required',
            'tahunLahirPenj' => 'required|date',
            'pekerjaanPenj' => 'required',
            'alamatPenj' => 'required',
            'noKtpPenj' => 'required',
            'hubunganKel' => 'required',
            'tglPermohonan' => 'required|date',
            'tglPersetujuan' => 'required|date',
            'tglDroping' => 'required|date',
            'plafondKred' => 'required',
            'fasilitasKred' => 'required',
            'jangkaWaktu' => 'required',
            'bunga' => 'required',
            'provisi' => 'required',
            'materai' => 'required',
            'adm' => 'required',
            'notaris' => 'required',
            'asuransiJiwa' => 'required',
            'asuransiJaminan' => 'required',
            'provisi2' => 'required',
            'angPokBung' => 'required',
            'angBung' => 'required',
            'totBiaya' => 'required',
            'sifatKred' => 'required',
            'jenisGuna' => 'required',
            'penggunaanKred' => 'required',
            'pengikatanKred' => 'required',
            'pengikatanJaminan' => 'required',
        ], [
            'noSpk.unique' => 'Gagal input, No. SPK sudah terdaftar.',
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // dd(DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->first());


        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        // dd($kd_cabang);
        
        // $user->choper ? $user->choper->kd_cabang : null;

        // Simpan data ke tabel form_spk
        DB::table('form_spk')->insert([
            'noRekKred' => $request->input('noRekKred'),
            'noRekTab' => $request->input('noRekTab'),
            'noSpk' => $request->input('noSpk'),
            'namaDebitur' => $request->input('namaDebitur'),
            'namaIbuDebitur' => $request->input('namaIbuDebitur'),
            'tahunLahirDeb' => $request->input('tahunLahirDeb'),
            'pekerjaanDeb' => $request->input('pekerjaanDeb'),
            'alamatDeb' => $request->input('alamatDeb'),
            'kotaPengadilanDeb' => $request->input('kotaPengadilanDeb'),
            'noKtpDeb' => $request->input('noKtpDeb'),
            'namaIstri' => $request->input('namaIstri'),
            'namaIbuIstri' => $request->input('namaIbuIstri'),
            'tahunLahirIstri' => $request->input('tahunLahirIstri'),
            'pekerjaanIstri' => $request->input('pekerjaanIstri'),
            'alamatIstri' => $request->input('alamatIstri'),
            'kotaPengadilanIstri' => $request->input('kotaPengadilanIstri'),
            'noKtpIstri' => $request->input('noKtpIstri'),
            'namaPenj' => $request->input('namaPenj'),
            'tahunLahirPenj' => $request->input('tahunLahirPenj'),
            'pekerjaanPenj' => $request->input('pekerjaanPenj'),
            'alamatPenj' => $request->input('alamatPenj'),
            'noKtpPenj' => $request->input('noKtpPenj'),
            'hubunganKel' => $request->input('hubunganKel'),
            'tglPermohonan' => $request->input('tglPermohonan'),
            'tglPersetujuan' => $request->input('tglPersetujuan'),
            'tglDroping' => $request->input('tglDroping'),
            'plafondKred' => $request->input('plafondKred'),
            'fasilitasKred' => $request->input('fasilitasKred'),
            'jangkaWaktu' => $request->input('jangkaWaktu'),
            'bunga' => $request->input('bunga'),
            'provisi' => $request->input('provisi'),
            'materai' => $request->input('materai'),
            'adm' => $request->input('adm'),
            'notaris' => $request->input('notaris'),
            'asuransiJiwa' => $request->input('asuransiJiwa'),
            'asuransiJaminan' => $request->input('asuransiJaminan'),
            'provisi2' => $request->input('provisi2'),
            'angPokBung' => $request->input('angPokBung'),
            'angBung' => $request->input('angBung'),
            'totBiaya' => $request->input('totBiaya'),
            'sifatKred' => $request->input('sifatKred'),
            'jenisGuna' => $request->input('jenisGuna'),
            'penggunaanKred' => $request->input('penggunaanKred'),
            'pengikatanKred' => $request->input('pengikatanKred'),
            'pengikatanJaminan' => $request->input('pengikatanJaminan'),
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);

        return redirect()->route('admin.spk.index')->with('success', 'Data berhasil disimpan.');
    }

    


    // ==========================================================


    // ===================read spk===============================


    public function index(Request $request)
    {
        $search = $request->input('search', '');

        // $query = FormSpk::with('form_spk')
        //     ->when($search, function ($query) use ($search) {
        //         return $query->where('noSpk', 'like', '%' . $search . '%');
        //     });
        $query = FormSpk::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('noSpk', 'like', '%' . $search . '%');
            });

        $spkData = $query->paginate(10);

        return view('spk.read', compact('spkData', 'search'));
    }

    // public function show($id)
    // {
    //     $data = User::find($id);

    //     return view('fileperawat.lihatprofil', compact('data'));
    // }

    public function update(Request $request, $noSpk)
    {

        // Lakukan validasi sesuai kebutuhan
        $request->validate([
            'noRekKred' => 'required', 
            'noRekTab' => 'required',
            'noSpk' => 'required',
            'namaDebitur' => 'required',
            'namaIbuDebitur' => 'required',
            'tahunLahirDeb' => 'required|date',
            'pekerjaanDeb' => 'required',
            'alamatDeb' => 'required',
            'kotaPengadilanDeb' => 'required',
            'noKtpDeb' => 'required',
            'namaIstri' => 'required',
            'namaIbuIstri' => 'required',
            'tahunLahirIstri' => 'required|date',
            'pekerjaanIstri' => 'required',
            'alamatIstri' => 'required',
            'kotaPengadilanIstri' => 'required',
            'noKtpIstri' => 'required',
            'namaPenj' => 'required',
            'tahunLahirPenj' => 'required|date',
            'pekerjaanPenj' => 'required',
            'alamatPenj' => 'required',
            'noKtpPenj' => 'required',
            'hubunganKel' => 'required',
            'tglPermohonan' => 'required|date',
            'tglPersetujuan' => 'required|date',
            'tglDroping' => 'required|date',
            'plafondKred' => 'required',
            'fasilitasKred' => 'required',
            'jangkaWaktu' => 'required',
            'bunga' => 'required',
            'provisi' => 'required',
            'materai' => 'required',
            'adm' => 'required',
            'notaris' => 'required',
            'asuransiJiwa' => 'required',
            'asuransiJaminan' => 'required',
            'provisi2' => 'required',
            'angPokBung' => 'required',
            'angBung' => 'required',
            'totBiaya' => 'required',
            'sifatKred' => 'required',
            'jenisGuna' => 'required',
            'penggunaanKred' => 'required',
            'pengikatanKred' => 'required',
            'pengikatanJaminan' => 'required',
        ]);



        

        // Update data di database
        DB::table('form_spk')->where('noSpk', $noSpk)->update([
            
            'noRekKred' => $request->noRekKred, 
            'noRekTab' => $request->noRekTab,
            'noSpk' => $request->noSpk,
            'namaDebitur' => $request->namaDebitur,
            'namaIbuDebitur' => $request->namaIbuDebitur,
            'tahunLahirDeb' => $request->tahunLahirDeb,
            'pekerjaanDeb' => $request->pekerjaanDeb,
            'alamatDeb' => $request->alamatDeb,
            'kotaPengadilanDeb' => $request->kotaPengadilanDeb,
            'noKtpDeb' => $request->noKtpDeb,
            'namaIstri' => $request->namaIstri,
            'namaIbuIstri' => $request->namaIbuIstri,
            'tahunLahirIstri' => $request->tahunLahirIstri,
            'pekerjaanIstri' => $request->pekerjaanIstri,
            'alamatIstri' => $request->alamatIstri,
            'kotaPengadilanIstri' => $request->kotaPengadilanIstri,
            'noKtpIstri' => $request->noKtpIstri,
            'namaPenj' => $request->namaPenj,
            'tahunLahirPenj' => $request->tahunLahirPenj,
            'pekerjaanPenj' => $request->pekerjaanPenj,
            'alamatPenj' => $request->alamatPenj,
            'noKtpPenj' => $request->noKtpPenj,
            'hubunganKel' => $request->hubunganKel,
            'tglPermohonan' => $request->tglPermohonan,
            'tglPersetujuan' => $request->tglPersetujuan,
            'tglDroping' => $request->tglDroping,
            'plafondKred' => $request->plafondKred,
            'fasilitasKred' => $request->fasilitasKred,
            'jangkaWaktu' => $request->jangkaWaktu,
            'bunga' => $request->bunga,
            'provisi' => $request->provisi,
            'materai' => $request->materai,
            'adm' => $request->adm,
            'notaris' => $request->notaris,
            'asuransiJiwa' => $request->asuransiJiwa,
            'asuransiJaminan' => $request->asuransiJaminan,
            'provisi2' => $request->provisi2,
            'angPokBung' => $request->angPokBung,
            'angBung' => $request->angBung,
            'totBiaya' => $request->totBiaya,
            'sifatKred' => $request->sifatKred,
            'jenisGuna' => $request->jenisGuna,
            'penggunaanKred' => $request->penggunaanKred,
            'pengikatanKred' => $request->pengikatanKred,
            'pengikatanJaminan' => $request->pengikatanJaminan,
        ]);


        return redirect()->route('admin.spk.index')->with('success', 'Data berhasil diperbarui.');
    }


    // ====================KOLOM AKSI=========================
    public function edit($noSpk)
    {
        $spkData = DB::table('form_spk')->where('noSpk', $noSpk)->first();


        return view('spk.edit', ['spkData' => $spkData]);
    }

    public function destroy($noSpk)
    {
        DB::table('form_spk')->where('noSpk', $noSpk)->delete();

        return redirect()->route('admin.spk.index')->with('success', 'Data SPK berhasil dihapus.');
    }

    // ============================================================================

    // ===========print spk==========
    // public function installment()
    // {
    //     return view('printSpk.installment');
    // }
    
    public function cari(Request $request)
    {
        $search = $request->input('search');

        $query = DB::table('form_spk')->when($search, function ($query) use ($search) {
            return $query->where('Nama', 'like', '%' . $search . '%');
        });

        $nasabahData = $query->paginate(10);

        return view('printSpk.cari', compact('nasabahData', 'search'));
    }

    public function printInstallment($noSpk)
    {
        // Ambil data berdasarkan noSpk
        $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
        $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
        $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
        $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
        $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
        $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
        $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
        $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
        $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
        $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
        $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        $jangkaWaktu = DB::table('form_spk')->where('noSpk', $noSpk)->value('jangkaWaktu');
        $tglDroping = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglDroping');
        $tglJatuhTempo = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglJatuhTempo');
        $bunga = (float) DB::table('form_spk')->where('noSpk', $noSpk)->value('bunga');
        $noRekTab = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekTab');
        $provisi = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi');
        $adm = DB::table('form_spk')->where('noSpk', $noSpk)->value('adm');
        $namaKacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKacab');
        $pengikatanJaminan = DB::table('form_spk')->where('noSpk', $noSpk)->value('pengikatanJaminan');

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($provisi / 100) * $plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        
        if ($jangkaWaktu > 0) {
            $cicilanBulanan = ($plafondKred / $jangkaWaktu) + (($plafondKred * $bunga) / 100 / 12);
        }
        // Hitung denda
        $denda = 0;

        if ($bunga > 0){
            $denda = $bunga / 12;
        }
        
        // Ambil tahun lahir debitur dan hitung umur
        $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        $umur = $tahunLahirDeb ? Carbon::parse($tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi nominal ke bentuk teks dalam bahasa Indonesia
        $plafondTerbilang = $this->konversiTerbilang($plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($bunga);
        $provisiTerbilang = $this->konversiTerbilang($provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.installment', compact(
            'printInstallment', 'noSpk', 'kacab', 'namaDebitur', 'umur',
            'namaIstri', 'pekerjaanDeb', 'alamatDeb', 'noKtpDeb', 'noKtpIstri',
            'tglPermohonan', 'tglPersetujuan', 'plafondKred', 'plafondTerbilang',
            'jangkaWaktu','jangkaWaktuTerbilang','tglDroping','tglJatuhTempo','bunga','adm',
            'bungaTerbilang','noRekTab','provisiTerbilang','provisi','nilaiProvisi','nilaiProvisiTerbilang',
            'admTerbilang','cicilanBulanan','cicilanBulananTerbilang','denda','dendaTerbilang','namaKacab',
            'pengikatanJaminan'

        ));
    }

    /**
     * Fungsi untuk mengubah angka menjadi teks dengan format bahasa Indonesia yang benar.
     */
    private function konversiTerbilang($angka)
    {
        // Ubah angka ke string untuk mengecek apakah ada koma
        $angkaStr = (string) $angka;

        // Jika ada koma (angka desimal)
        if (strpos($angkaStr, '.') !== false || strpos($angkaStr, ',') !== false) {
            // Pisahkan angka sebelum dan sesudah koma
            $parts = explode('.', str_replace(',', '.', $angkaStr));

            // Konversi bagian sebelum koma
            $terbilang = Terbilang::make((int)$parts[0]) . " koma";

            // Konversi bagian desimal per digit
            foreach (str_split($parts[1]) as $digit) {
                $terbilang .= ' ' . Terbilang::make((int)$digit);
            }

            return $this->formatTerbilang($terbilang);
        }

        // Jika angka bulat
        return $this->formatTerbilang(Terbilang::make($angka));
    }

    /**
     * Format hasil terbilang untuk mengganti istilah dalam bahasa Indonesia
     */
    private function formatTerbilang($terbilang)
    {
        return str_replace(
            ['zero','one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten',
            'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'twenty', 'thirty', 'forty', 'fifty',
            'hundred', 'thousand', 'million', 'billion',
            'satu ratus', 'satu ribu'], // Ubah juga "satu ratus" → "seratus", "satu ribu" → "seribu"

            ['nol','satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh',
            'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh',
            'ratus', 'ribu', 'juta', 'miliar',
            'seratus', 'seribu'], // Ganti ke bahasa Indonesia yang benar

            $terbilang
        );
    }
    public function printTransProduk($noSpk)
    {
        // Ambil data berdasarkan noSpk
        $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
        $noSpk = DB::table('form_spk')->where('noSpk', $noSpk)->value('noSpk');
        $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
        $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
        $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
        $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
        $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
        $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
        $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
        $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
        $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
        $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        $jangkaWaktu = DB::table('form_spk')->where('noSpk', $noSpk)->value('jangkaWaktu');
        $tglDroping = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglDroping');
        $tglJatuhTempo = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglJatuhTempo');
        $bunga = (float) DB::table('form_spk')->where('noSpk', $noSpk)->value('bunga');
        $noRekTab = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekTab');
        $provisi = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi');
        $adm = DB::table('form_spk')->where('noSpk', $noSpk)->value('adm');
        $namaKacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKacab');
        $fasilitasKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('fasilitasKred');
        $sifatKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('sifatKred');
        $jenisGuna = DB::table('form_spk')->where('noSpk', $noSpk)->value('jenisGuna');
        $penggunaanKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('penggunaanKred');
        $pengikatanKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('pengikatanKred');
        $pengikatanJaminan = DB::table('form_spk')->where('noSpk', $noSpk)->value('pengikatanJaminan');

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($provisi / 100) * $plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        
        if ($jangkaWaktu > 0) {
            $cicilanBulanan = ($plafondKred / $jangkaWaktu) + (($plafondKred * $bunga) / 100 / 12);
        }
        // Hitung denda
        $denda = 0;

        if ($bunga > 0){
            $denda = $bunga / 12;
        }
        
        // Ambil tahun lahir debitur dan hitung umur
        $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        $umur = $tahunLahirDeb ? Carbon::parse($tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi nominal ke bentuk teks dalam bahasa Indonesia
        $plafondTerbilang = $this->konversiTerbilang($plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($bunga);
        $provisiTerbilang = $this->konversiTerbilang($provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.transparansiProduk', compact(
            'printInstallment', 'noSpk', 'kacab', 'namaDebitur', 'umur',
            'namaIstri', 'pekerjaanDeb', 'alamatDeb', 'noKtpDeb', 'noKtpIstri',
            'tglPermohonan', 'tglPersetujuan', 'plafondKred', 'plafondTerbilang',
            'jangkaWaktu','jangkaWaktuTerbilang','tglDroping','tglJatuhTempo','bunga','adm',
            'bungaTerbilang','noRekTab','provisiTerbilang','provisi','nilaiProvisi','nilaiProvisiTerbilang',
            'admTerbilang','cicilanBulanan','cicilanBulananTerbilang','denda','dendaTerbilang','namaKacab',
            'fasilitasKred','sifatKred','jenisGuna','penggunaanKred','pengikatanKred','pengikatanJaminan'

        ));
    }

    public function printPersetujuanKred($noSpk)
    {
        // Ambil data berdasarkan noSpk
        $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
        $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
        $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
        $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
        $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
        $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
        $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
        $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
        $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
        $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
        $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        $jangkaWaktu = DB::table('form_spk')->where('noSpk', $noSpk)->value('jangkaWaktu');
        $tglDroping = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglDroping');
        $tglJatuhTempo = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglJatuhTempo');
        $bunga = (float) DB::table('form_spk')->where('noSpk', $noSpk)->value('bunga');
        $noRekTab = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekTab');
        $provisi = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi');
        $adm = DB::table('form_spk')->where('noSpk', $noSpk)->value('adm');
        $namaKacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKacab');
        $sifatKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('sifatKred');
        $jenisGuna = DB::table('form_spk')->where('noSpk', $noSpk)->value('jenisGuna');
        $pengikatanKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('pengikatanKred');
        $pengikatanJaminan = DB::table('form_spk')->where('noSpk', $noSpk)->value('pengikatanJaminan');

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($provisi / 100) * $plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        
        if ($jangkaWaktu > 0) {
            $cicilanBulanan = ($plafondKred / $jangkaWaktu) + (($plafondKred * $bunga) / 100 / 12);
        }
        // Hitung denda
        $denda = 0;

        if ($bunga > 0){
            $denda = $bunga / 12;
        }
        
        // Ambil tahun lahir debitur dan hitung umur
        $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        $umur = $tahunLahirDeb ? Carbon::parse($tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi nominal ke bentuk teks dalam bahasa Indonesia
        $plafondTerbilang = $this->konversiTerbilang($plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($bunga);
        $provisiTerbilang = $this->konversiTerbilang($provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.persetujuanKredit', compact(
            'printInstallment', 'noSpk', 'kacab', 'namaDebitur', 'umur',
            'namaIstri', 'pekerjaanDeb', 'alamatDeb', 'noKtpDeb', 'noKtpIstri',
            'tglPermohonan', 'tglPersetujuan', 'plafondKred', 'plafondTerbilang',
            'jangkaWaktu','jangkaWaktuTerbilang','tglDroping','tglJatuhTempo','bunga','adm',
            'bungaTerbilang','noRekTab','provisiTerbilang','provisi','nilaiProvisi','nilaiProvisiTerbilang',
            'admTerbilang','cicilanBulanan','cicilanBulananTerbilang','denda','dendaTerbilang','namaKacab',
            'sifatKred','jenisGuna','pengikatanJaminan','pengikatanKred'

        ));
    }

    public function printFeo($noSpk)
    {
        // Ambil seluruh data form_spk dalam satu query
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        // Cek jika data tidak ditemukan
        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        // Ambil data kota dari mstr_kacab
        $kota = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kota');

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;

        // Hitung cicilan bulanan
        $cicilanBulanan = 0;
        if ($spk->jangkaWaktu > 0) {
            $cicilanBulanan = ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $spk->bunga > 0 ? $spk->bunga / 12 : 0;

        // Hitung umur
        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        // Konversi ke teks
        $plafondTerbilang = $this->konversiTerbilang($spk->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($spk->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($spk->bunga);
        $provisiTerbilang = $this->konversiTerbilang($spk->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($spk->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.feo', [
            'printInstallment' => [$spk], // agar tetap bisa dipakai sebagai koleksi jika di view pakai loop
            'noSpk' => $noSpk,
            'kacab' => $spk->kacab,
            'namaDebitur' => $spk->namaDebitur,
            'namaIstri' => $spk->namaIstri,
            'pekerjaanDeb' => $spk->pekerjaanDeb,
            'alamatDeb' => $spk->alamatDeb,
            'kotaPengadilanDeb' => $spk->kotaPengadilanDeb,
            'noKtpDeb' => $spk->noKtpDeb,
            'noKtpIstri' => $spk->noKtpIstri,
            'tglPermohonan' => $spk->tglPermohonan,
            'tglPersetujuan' => $spk->tglPersetujuan,
            'plafondKred' => $spk->plafondKred,
            'jangkaWaktu' => $spk->jangkaWaktu,
            'tglDroping' => $spk->tglDroping,
            'tglJatuhTempo' => $spk->tglJatuhTempo,
            'bunga' => $spk->bunga,
            'noRekTab' => $spk->noRekTab,
            'provisi' => $spk->provisi,
            'adm' => $spk->adm,
            'namaKacab' => $spk->namaKacab,
            'kota' => $kota,
            'umur' => $umur,
            'plafondTerbilang' => $plafondTerbilang,
            'jangkaWaktuTerbilang' => $jangkaWaktuTerbilang,
            'bungaTerbilang' => $bungaTerbilang,
            'provisiTerbilang' => $provisiTerbilang,
            'nilaiProvisi' => $nilaiProvisi,
            'nilaiProvisiTerbilang' => $nilaiProvisiTerbilang,
            'admTerbilang' => $admTerbilang,
            'cicilanBulanan' => $cicilanBulanan,
            'cicilanBulananTerbilang' => $cicilanBulananTerbilang,
            'denda' => $denda,
            'dendaTerbilang' => $dendaTerbilang,
        ]);
    }


    public function printSrhtrmjmn($noSpk)
    {
        // Ambil seluruh data form_spk dalam satu query
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;

        // Hitung cicilan bulanan
        $cicilanBulanan = 0;
        if ($spk->jangkaWaktu > 0) {
            $cicilanBulanan = ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $spk->bunga > 0 ? $spk->bunga / 12 : 0;

        // Hitung umur
        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        // Konversi ke teks
        $plafondTerbilang = $this->konversiTerbilang($spk->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($spk->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($spk->bunga);
        $provisiTerbilang = $this->konversiTerbilang($spk->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($spk->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.srhtrmjmn', [
            'printInstallment' => [$spk],
            'noSpk' => $noSpk,
            'kacab' => $spk->kacab,
            'namaDebitur' => $spk->namaDebitur,
            'namaIstri' => $spk->namaIstri,
            'pekerjaanDeb' => $spk->pekerjaanDeb,
            'alamatDeb' => $spk->alamatDeb,
            'noKtpDeb' => $spk->noKtpDeb,
            'noKtpIstri' => $spk->noKtpIstri,
            'tglPermohonan' => $spk->tglPermohonan,
            'tglPersetujuan' => $spk->tglPersetujuan,
            'plafondKred' => $spk->plafondKred,
            'jangkaWaktu' => $spk->jangkaWaktu,
            'tglDroping' => $spk->tglDroping,
            'tglJatuhTempo' => $spk->tglJatuhTempo,
            'bunga' => $spk->bunga,
            'noRekKred' => $spk->noRekKred,
            'noRekTab' => $spk->noRekTab,
            'provisi' => $spk->provisi,
            'adm' => $spk->adm,
            'namaKacab' => $spk->namaKacab,
            'umur' => $umur,
            'plafondTerbilang' => $plafondTerbilang,
            'jangkaWaktuTerbilang' => $jangkaWaktuTerbilang,
            'bungaTerbilang' => $bungaTerbilang,
            'provisiTerbilang' => $provisiTerbilang,
            'nilaiProvisi' => $nilaiProvisi,
            'nilaiProvisiTerbilang' => $nilaiProvisiTerbilang,
            'admTerbilang' => $admTerbilang,
            'cicilanBulanan' => $cicilanBulanan,
            'cicilanBulananTerbilang' => $cicilanBulananTerbilang,
            'denda' => $denda,
            'dendaTerbilang' => $dendaTerbilang,
        ]);
    }

    public function printPengNotaris($noSpk)
    {
        // Ambil seluruh data form_spk dalam satu query
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;

        // Hitung cicilan bulanan
        $cicilanBulanan = 0;
        if ($spk->jangkaWaktu > 0) {
            $cicilanBulanan = ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $spk->bunga > 0 ? $spk->bunga / 12 : 0;

        // Hitung umur debitur
        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        // Konversi ke teks
        $plafondTerbilang = $this->konversiTerbilang($spk->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($spk->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($spk->bunga);
        $provisiTerbilang = $this->konversiTerbilang($spk->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($spk->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.pengantarNotaris', [
            'printInstallment' => [$spk],
            'noSpk' => $noSpk,
            'kacab' => $spk->kacab,
            'namaDebitur' => $spk->namaDebitur,
            'namaIstri' => $spk->namaIstri,
            'pekerjaanDeb' => $spk->pekerjaanDeb,
            'alamatDeb' => $spk->alamatDeb,
            'noKtpDeb' => $spk->noKtpDeb,
            'noKtpIstri' => $spk->noKtpIstri,
            'tglPermohonan' => $spk->tglPermohonan,
            'tglPersetujuan' => $spk->tglPersetujuan,
            'plafondKred' => $spk->plafondKred,
            'jangkaWaktu' => $spk->jangkaWaktu,
            'tglDroping' => $spk->tglDroping,
            'tglJatuhTempo' => $spk->tglJatuhTempo,
            'bunga' => $spk->bunga,
            'noRekTab' => $spk->noRekTab,
            'provisi' => $spk->provisi,
            'adm' => $spk->adm,
            'fasilitasKred' => $spk->fasilitasKred,
            'namaKacab' => $spk->namaKacab,
            'pengikatanJaminan' => $spk->pengikatanJaminan,
            'umur' => $umur,
            'plafondTerbilang' => $plafondTerbilang,
            'jangkaWaktuTerbilang' => $jangkaWaktuTerbilang,
            'bungaTerbilang' => $bungaTerbilang,
            'provisiTerbilang' => $provisiTerbilang,
            'nilaiProvisi' => $nilaiProvisi,
            'nilaiProvisiTerbilang' => $nilaiProvisiTerbilang,
            'admTerbilang' => $admTerbilang,
            'cicilanBulanan' => $cicilanBulanan,
            'cicilanBulananTerbilang' => $cicilanBulananTerbilang,
            'denda' => $denda,
            'dendaTerbilang' => $dendaTerbilang,
        ]);
    }

    public function printAssesoir($noSpk)
    {
        // Ambil data berdasarkan noSpk
        $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
        $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
        $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
        $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
        $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
        $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
        $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
        $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
        $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
        $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
        $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        $jangkaWaktu = DB::table('form_spk')->where('noSpk', $noSpk)->value('jangkaWaktu');
        $tglDroping = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglDroping');
        $tglJatuhTempo = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglJatuhTempo');
        $bunga = (float) DB::table('form_spk')->where('noSpk', $noSpk)->value('bunga');
        $noRekTab = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekTab');
        $provisi = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi');
        $adm = DB::table('form_spk')->where('noSpk', $noSpk)->value('adm');
        $namaKacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKacab');

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($provisi / 100) * $plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        
        if ($jangkaWaktu > 0) {
            $cicilanBulanan = ($plafondKred / $jangkaWaktu) + (($plafondKred * $bunga) / 100 / 12);
        }
        // Hitung denda
        $denda = 0;

        if ($bunga > 0){
            $denda = $bunga / 12;
        }
        
        // Ambil tahun lahir debitur dan hitung umur
        $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        $umur = $tahunLahirDeb ? Carbon::parse($tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi nominal ke bentuk teks dalam bahasa Indonesia
        $plafondTerbilang = $this->konversiTerbilang($plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($bunga);
        $provisiTerbilang = $this->konversiTerbilang($provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.assesoir', compact(
            'printInstallment', 'noSpk', 'kacab', 'namaDebitur', 'umur',
            'namaIstri', 'pekerjaanDeb', 'alamatDeb', 'noKtpDeb', 'noKtpIstri',
            'tglPermohonan', 'tglPersetujuan', 'plafondKred', 'plafondTerbilang',
            'jangkaWaktu','jangkaWaktuTerbilang','tglDroping','tglJatuhTempo','bunga','adm',
            'bungaTerbilang','noRekTab','provisiTerbilang','provisi','nilaiProvisi','nilaiProvisiTerbilang',
            'admTerbilang','cicilanBulanan','cicilanBulananTerbilang','denda','dendaTerbilang','namaKacab'

        ));
    }
    
   
}

    // public function printInstallment($noSpk)
    // {
    //     // Ambil data berdasarkan noSpk
    //     $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
    //     $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
    //     $namaKkk = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKkk');
    //     $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
    //     $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
    //     $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
    //     $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
    //     $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
    //     $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
    //     $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
    //     $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
    //     $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        
    //     $plafondTerbilang = Terbilang::make($plafondKred);

    //     // Ganti teks bahasa Inggris ke bahasa Indonesia secara manual
    //     $plafondTerbilang = str_replace(
    //         ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten',
    //          'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'twenty', 'thirty', 'forty', 'fifty',
    //          'hundred', 'thousand', 'million', 'billion'],
    //         ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh',
    //          'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh',
    //          'seratus','ratus', 'ribu', 'seribu','juta', 'miliar'],
    //         $plafondTerbilang
    //     );
        
    //     // Ambil tahun lahir debitur
    //     $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        
    //     // Hitung umur
    //     $umur = $tahunLahirDeb ? \Carbon\Carbon::parse($tahunLahirDeb)->diffInYears(\Carbon\Carbon::now()) : null;


    
    //     return view('printSpk.installment', compact('printInstallment', 'noSpk', 'namaKkk',
    //      'kacab', 'namaDebitur', 'umur','namaIstri','pekerjaanDeb','alamatDeb','noKtpDeb',
    //     'noKtpIstri','tglPermohonan','tglPersetujuan','plafondKred','plafondTerbilang'));
    // }
    
    

    
    // public function printInstallment($noSpk)
    // {
    //     $nasabah = DB::table('form_spk')->select('noSpk', 'namaDebitur')->get();
    //     $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
    //     $kacab = DB::table('form_spk')->where('noSpk', $noSpk)->value('kacab');
    //     $namaKkk = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaKkk');
    //     $noSpk = DB::table('form_spk')->where('noSpk', $noSpk)->value('noSpk');
        // $noRekKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekKred');
        // $noRekTab = DB::table('form_spk')->where('noSpk', $noSpk)->value('noRekTab');
        // $namaDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaDebitur');
        // $namaIbuDebitur = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIbuDebitur');
        // $tahunLahirDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirDeb');
        // $pekerjaanDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanDeb');
        // $alamatDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatDeb');
        // $HaskotaPengadilanDebil5 = DB::table('form_spk')->where('noSpk', $noSpk)->value('HaskotaPengadilanDebil5');
        // $noKtpDeb = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpDeb');
        // $namaIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIstri');
        // $namaIbuIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaIbuIstri');
        // $tahunLahirIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirIstri');
        // $pekerjaanIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanIstri');
        // $alamatIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatIstri');
        // $kotaPengadilanIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('kotaPengadilanIstri');
        // $noKtpIstri = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpIstri');
        // $namaPenj = DB::table('form_spk')->where('noSpk', $noSpk)->value('namaPenj');
        // $tahunLahirPenj = DB::table('form_spk')->where('noSpk', $noSpk)->value('tahunLahirPenj');
        // $pekerjaanPenj = DB::table('form_spk')->where('noSpk', $noSpk)->value('pekerjaanPenj');
        // $alamatPenj = DB::table('form_spk')->where('noSpk', $noSpk)->value('alamatPenj');
        // $noKtpPenj = DB::table('form_spk')->where('noSpk', $noSpk)->value('noKtpPenj');
        // $hubunganKel = DB::table('form_spk')->where('noSpk', $noSpk)->value('hubunganKel');
        // $tglPermohonan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPermohonan');
        // $tglPersetujuan = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglPersetujuan');
        // $tglDroping = DB::table('form_spk')->where('noSpk', $noSpk)->value('tglDroping');
        // $plafondKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('plafondKred');
        // $fasilitasKred = DB::table('form_spk')->where('noSpk', $noSpk)->value('fasilitasKred');
        // $jangkaWaktu = DB::table('form_spk')->where('noSpk', $noSpk)->value('jangkaWaktu');
        // $bunga = DB::table('form_spk')->where('noSpk', $noSpk)->value('bunga');
        // $provisi = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi');
        // $materai = DB::table('form_spk')->where('noSpk', $noSpk)->value('materai');
        // $adm = DB::table('form_spk')->where('noSpk', $noSpk)->value('adm');
        // $notaris = DB::table('form_spk')->where('noSpk', $noSpk)->value('notaris');
        // $asuransiJiwa = DB::table('form_spk')->where('noSpk', $noSpk)->value('asuransiJiwa');
        // $asuransiJaminan = DB::table('form_spk')->where('noSpk', $noSpk)->value('asuransiJaminan');
        // $provisi2 = DB::table('form_spk')->where('noSpk', $noSpk)->value('provisi2');
        // $angPokBung = DB::table('form_spk')->where('noSpk', $noSpk)->value('angPokBung');
        // $angBung = DB::table('form_spk')->where('noSpk', $noSpk)->value('angBung');
        // $totBiaya = DB::table('form_spk')->where('noSpk', $noSpk)->value('totBiaya');


        // 'alamatDeb', 'HaskotaPengadilanDebil5', 'noKtpDeb', 'namaIstri', 
        //     'namaIbuIstri', 'tahunLahirIstri', 'pekerjaanIstri', 'alamatIstri', 
        //     'kotaPengadilanIstri', 'noKtpIstri', 'namaPenj', 'tahunLahirPenj', 
        //     'pekerjaanPenj', 'alamatPenj', 'noKtpPenj', 'hubunganKel', 
        //     'tglPermohonan', 'tglPersetujuan', 'tglDroping', 'plafondKred', 
        //     'fasilitasKred', 'jangkaWaktu', 'bunga', 'provisi', 'materai', 
        //     'adm', 'notaris', 'asuransiJiwa', 'asuransiJaminan', 'provisi2', 
        //     'angPokBung', 'angBung', 'totBiaya'
                // 'noRekKred', 'noRekTab', 
                // 'namaDebitur', 'namaIbuDebitur', 'tahunLahirDeb', 'pekerjaanDeb', 
        // return view('printSpk.installment', compact(
        //     'nasabah', 'printInstallment', 'noSpk', 'namaKkk','kacab',
            
        // ));
// }









