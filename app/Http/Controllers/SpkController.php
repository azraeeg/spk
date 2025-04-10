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

        // return redirect()->route('admin.spk.index')->with('success', 'Data berhasil disimpan.');
        return redirect()->route('spk.jaminan')->with('success', 'Data berhasil disimpan, lanjut ke halaman jaminan.');

    }

    public function jaminan()
    {
        return view('spk.jaminan');
    }

    public function jaminanBpkb()
    {
        return view('spk.bpkb');
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
        // Ambil semua data SPK dalam satu query
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

        return view('printSpk.installment', [
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
            'adm' => $spk->adm,
            'noRekTab' => $spk->noRekTab,
            'provisi' => $spk->provisi,
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
        // Ambil semua data dari form_spk berdasarkan noSpk
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        // Jika data tidak ditemukan, redirect atau tampilkan error
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($data->provisi / 100) * $data->plafondKred;

        // Hitung cicilan bulanan
        $cicilanBulanan = 0;
        if ($data->jangkaWaktu > 0) {
            $cicilanBulanan = ($data->plafondKred / $data->jangkaWaktu) + (($data->plafondKred * $data->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = 0;
        if ($data->bunga > 0) {
            $denda = $data->bunga / 12;
        }

        // Hitung umur berdasarkan tahun lahir
        $umur = $data->tahunLahirDeb ? Carbon::parse($data->tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi ke terbilang
        $plafondTerbilang = $this->konversiTerbilang($data->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($data->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($data->bunga);
        $provisiTerbilang = $this->konversiTerbilang($data->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($data->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.transparansiProduk', [
            'printInstallment'          => [$data],
            'noSpk'                     => $data->noSpk,
            'kacab'                     => $data->kacab,
            'namaDebitur'              => $data->namaDebitur,
            'namaIstri'                => $data->namaIstri,
            'pekerjaanDeb'             => $data->pekerjaanDeb,
            'alamatDeb'                => $data->alamatDeb,
            'noKtpDeb'                 => $data->noKtpDeb,
            'noKtpIstri'               => $data->noKtpIstri,
            'tglPermohonan'            => $data->tglPermohonan,
            'tglPersetujuan'           => $data->tglPersetujuan,
            'plafondKred'              => $data->plafondKred,
            'plafondTerbilang'         => $plafondTerbilang,
            'jangkaWaktu'              => $data->jangkaWaktu,
            'jangkaWaktuTerbilang'     => $jangkaWaktuTerbilang,
            'tglDroping'               => $data->tglDroping,
            'tglJatuhTempo'            => $data->tglJatuhTempo,
            'bunga'                    => $data->bunga,
            'bungaTerbilang'           => $bungaTerbilang,
            'noRekTab'                 => $data->noRekTab,
            'provisi'                  => $data->provisi,
            'provisiTerbilang'         => $provisiTerbilang,
            'nilaiProvisi'            => $nilaiProvisi,
            'nilaiProvisiTerbilang'    => $nilaiProvisiTerbilang,
            'adm'                      => $data->adm,
            'admTerbilang'             => $admTerbilang,
            'cicilanBulanan'           => $cicilanBulanan,
            'cicilanBulananTerbilang'  => $cicilanBulananTerbilang,
            'denda'                    => $denda,
            'dendaTerbilang'           => $dendaTerbilang,
            'namaKacab'                => $data->namaKacab,
            'fasilitasKred'            => $data->fasilitasKred,
            'sifatKred'                => $data->sifatKred,
            'jenisGuna'                => $data->jenisGuna,
            'penggunaanKred'           => $data->penggunaanKred,
            'pengikatanKred'           => $data->pengikatanKred,
            'pengikatanJaminan'        => $data->pengikatanJaminan,
            'umur'                     => $umur,
        ]);
    }

    public function printPersetujuanKred($noSpk)
    {
        // Ambil semua data dari form_spk berdasarkan noSpk
        $printInstallment = DB::table('form_spk')->where('noSpk', $noSpk)->get();
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        // Data utama
        $kacab = $data->kacab;
        $namaDebitur = $data->namaDebitur;
        $namaIstri = $data->namaIstri;
        $pekerjaanDeb = $data->pekerjaanDeb;
        $alamatDeb = $data->alamatDeb;
        $noKtpDeb = $data->noKtpDeb;
        $noKtpIstri = $data->noKtpIstri;
        $tahunLahirDeb = $data->tahunLahirDeb;

        // Data tanggal dan jangka waktu
        $tglPermohonan = $data->tglPermohonan;
        $tglPersetujuan = $data->tglPersetujuan;
        $tglDroping = $data->tglDroping;
        $tglJatuhTempo = $data->tglJatuhTempo;
        $jangkaWaktu = $data->jangkaWaktu;

        // Data finansial
        $plafondKred = $data->plafondKred;
        $bunga = (float) $data->bunga;
        $provisi = $data->provisi;
        $adm = $data->adm;
        $noRekTab = $data->noRekTab;
        $namaKacab = $data->namaKacab;

        // Data jenis kredit
        $sifatKred = $data->sifatKred;
        $jenisGuna = $data->jenisGuna;
        $pengikatanKred = $data->pengikatanKred;
        $pengikatanJaminan = $data->pengikatanJaminan;

        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($provisi / 100) * $plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        if ($jangkaWaktu > 0) {
            $cicilanBulanan = ($plafondKred / $jangkaWaktu) + (($plafondKred * $bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $bunga > 0 ? $bunga / 12 : 0;

        // Hitung umur berdasarkan tahun lahir
        $umur = $tahunLahirDeb ? Carbon::parse($tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi angka ke dalam teks (terbilang)
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
            'jangkaWaktu', 'jangkaWaktuTerbilang', 'tglDroping', 'tglJatuhTempo',
            'bunga', 'bungaTerbilang', 'noRekTab', 'provisi', 'provisiTerbilang',
            'nilaiProvisi', 'nilaiProvisiTerbilang', 'adm', 'admTerbilang',
            'cicilanBulanan', 'cicilanBulananTerbilang', 'denda', 'dendaTerbilang',
            'namaKacab', 'sifatKred', 'jenisGuna', 'pengikatanKred', 'pengikatanJaminan'
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
        // Ambil semua data terkait dalam satu query
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$data) {
            abort(404, 'Data tidak ditemukan.');
        }

        $kota = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kota');


        // Hitung nilai provisi dalam rupiah
        $nilaiProvisi = ($data->provisi / 100) * $data->plafondKred;

        // Hitung nilai cicilan bulanan
        $cicilanBulanan = 0;
        if ($data->jangkaWaktu > 0) {
            $cicilanBulanan = ($data->plafondKred / $data->jangkaWaktu) + (($data->plafondKred * $data->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $data->bunga > 0 ? $data->bunga / 12 : 0;

        // Hitung umur debitur
        $umur = $data->tahunLahirDeb ? Carbon::parse($data->tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi nominal ke bentuk terbilang
        $plafondTerbilang = $this->konversiTerbilang($data->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($data->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($data->bunga);
        $provisiTerbilang = $this->konversiTerbilang($data->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($data->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return view('printSpk.assesoir', [
            'printInstallment'        => DB::table('form_spk')->where('noSpk', $noSpk)->get(),
            'noSpk'                   => $noSpk,
            'kacab'                   => $data->kacab,
            'namaDebitur'             => $data->namaDebitur,
            'namaIstri'               => $data->namaIstri,
            'pekerjaanDeb'            => $data->pekerjaanDeb,
            'alamatDeb'               => $data->alamatDeb,
            'noKtpDeb'                => $data->noKtpDeb,
            'noKtpIstri'              => $data->noKtpIstri,
            'tglPermohonan'           => $data->tglPermohonan,
            'tglPersetujuan'          => $data->tglPersetujuan,
            'plafondKred'             => $data->plafondKred,
            'jangkaWaktu'             => $data->jangkaWaktu,
            'tglDroping'              => $data->tglDroping,
            'tglJatuhTempo'           => $data->tglJatuhTempo,
            'bunga'                   => $data->bunga,
            'noRekTab'                => $data->noRekTab,
            'provisi'                 => $data->provisi,
            'adm'                     => $data->adm,
            'namaKacab'               => $data->namaKacab,
            'noRekKred'               => $data->noRekKred,
            'noRekTab'                => $data->noRekTab,
            'namaIstri'               => $data->namaIstri,
            'pekerjaanIstri'          => $data->pekerjaanIstri,
            'alamatIstri'             => $data->alamatIstri,
            'noKtpIstri'              => $data->noKtpIstri,
            'namaIbuDebitur'          => $data->namaIbuDebitur,
            'namaIbuIstri'            => $data->namaIbuIstri,
            'penggunaanKred'        => $data->penggunaanKred,

            'umur'                   => $umur,
            'kota'                   => $kota,
            'nilaiProvisi'           => $nilaiProvisi,
            'cicilanBulanan'         => $cicilanBulanan,
            'denda'                  => $denda,
            'plafondTerbilang'       => $plafondTerbilang,
            'jangkaWaktuTerbilang'   => $jangkaWaktuTerbilang,
            'bungaTerbilang'         => $bungaTerbilang,
            'provisiTerbilang'       => $provisiTerbilang,
            'nilaiProvisiTerbilang'  => $nilaiProvisiTerbilang,
            'admTerbilang'           => $admTerbilang,
            'cicilanBulananTerbilang'=> $cicilanBulananTerbilang,
            'dendaTerbilang'         => $dendaTerbilang,
        ]);
    }
}
