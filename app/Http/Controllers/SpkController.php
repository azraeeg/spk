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
        

        $kdCabang = Auth::user()->kd_cabang;

        // Ambil kacab
        $kacabs = DB::table('mstr_kacab')
            ->where('kd_cabang', $kdCabang)
            ->get();

        // Ambil notaris
        $notaris = DB::table('mstr_notaris')
            ->where('kd_cabang', $kdCabang)
            ->get();

        return view('spk.create', compact('kacabs', 'notaris'));
    }

    public function storeData(Request $request)
    {
        $request->validate([
            'noCif' => 'required',
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
            'biayaNotaris' => 'required',
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
            'kacabHadir' => 'required',
            'namaNotaris' => 'required',
        ], [
            'noSpk.unique' => 'Gagal input, No. SPK sudah terdaftar.',
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        $admKredit = $admKredit = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('Nama');

        // Simpan data ke tabel form_spk
        DB::table('form_spk')->insert([
            'noCif' => $request->input('noCif'),
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
            'biayaNotaris' => $request->input('biayaNotaris'),
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
            'kacabHadir' => $request->input('kacabHadir'),
            'namaNotaris' => $request->input('namaNotaris'),
            'admKredit' => $admKredit,
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);
        // Simpan noSpk ke session
        session(['noSpk' => $request->input('noSpk')]);
        return view('spk.jaminan', ['success' => 'Data berhasil disimpan, lanjut ke halaman jaminan.']);

    }

    
    // ===============create jaminan=================

    public function jaminan()
    {
        return view('spk.jaminan');
    }

    public function jaminanBpkb()
    {
        return view('spk.bpkb');
    }
    public function storeDataBpkb(Request $request)
    {
        $request->validate([
            'kendRoda' => 'required', 
            'merek' => 'required',
            'tahun' => 'required',
            'tipe' => 'required',
            'noBpkb' => 'required',
            'noPol' => 'required',
            'atasNama' => 'required',
            'pemilik' => 'required',
            'noRangka' => 'required',
            'noMesin' => 'required',
            'bahanBakar' => 'required',
            'nilaiHt' => 'required',
        ]);
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        // Simpan data ke tabel form_spk
        $noSpk = session('noSpk');
            if (!$noSpk) {
                return redirect()->back()->with('error', 'Data No. SPK tidak ditemukan. Silakan isi data SPK terlebih dahulu.');
            }
        DB::table('jmnbpkb')->insert([
            'kendRoda' => $request->input('kendRoda'),
            'merek' => $request->input('merek'),
            'tahun' => $request->input('tahun'),
            'tipe' => $request->input('tipe'),
            'noBpkb' => $request->input('noBpkb'),
            'noPol' => $request->input('noPol'),
            'atasNama' => $request->input('atasNama'),
            'pemilik' => $request->input('pemilik'),
            'noRangka' => $request->input('noRangka'),
            'noMesin' => $request->input('noMesin'),
            'bahanBakar' => $request->input('bahanBakar'),
            'nilaiHt' => $request->input('nilaiHt'),
            'noSpk' => $noSpk,
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);
        return view('spk.jaminan', [
            'success' => 'Data berhasil disimpan, lanjut ke halaman jaminan untuk menambah jaminan lainnya.'
        ]);
    }


    public function jaminanSertif()
    {
        return view('spk.sertifikat');
    }
    public function storeDataSertif(Request $request)
    {
        $request->validate([
            'sebidangTanah' => 'required', 
            'terletakDi' => 'required',
            'luasTanah' => 'required',
            'shmShgbNib' => 'required',
            'suratUkur' => 'required',
            'tglShmShgbNib' => 'required|date',
            'tglSuratUkur' => 'required|date',
            'jenisBangunan' => 'required',
            'atasNama' => 'required',
            'pemilik' => 'required',
            'nilaiWajar' => 'required',
        ]);
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        // Simpan data ke tabel form_spk
        $noSpk = session('noSpk');
            if (!$noSpk) {
                return redirect()->back()->with('error', 'Data No. SPK tidak ditemukan. Silakan isi data SPK terlebih dahulu.');
            }
        DB::table('jmnsertifikat')->insert([
            'sebidangTanah' => $request->input('sebidangTanah'),
            'terletakDi' => $request->input('terletakDi'),
            'luasTanah' => $request->input('luasTanah'),
            'shmShgbNib' => $request->input('shmShgbNib'),
            'suratUkur' => $request->input('suratUkur'),
            'jenisBangunan' => $request->input('jenisBangunan'),
            'atasNama' => $request->input('atasNama'),
            'pemilik' => $request->input('pemilik'),
            'nilaiWajar' => $request->input('nilaiWajar'),
            'tglShmShgbNib' => $request->input('tglShmShgbNib'),
            'tglSuratUkur' => $request->input('tglSuratUkur'),
            'noSpk' => $noSpk,
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);
        return view('spk.jaminan', [
            'success' => 'Data berhasil disimpan, lanjut ke halaman jaminan untuk menambah jaminan lainnya.'
        ]);
    }

    public function jaminanRekening()
    {
        return view('spk.rekening');
    }
    public function storeDataRek(Request $request)
    {
        $request->validate([
            'noBilyet' => 'required', 
            'noRek' => 'required',
            'atasNama' => 'required',
            'taksasi' => 'required',
        ]);
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        // Simpan data ke tabel form_spk
        $noSpk = session('noSpk');
            if (!$noSpk) {
                return redirect()->back()->with('error', 'Data No. SPK tidak ditemukan. Silakan isi data SPK terlebih dahulu.');
            }
        DB::table('jmnrekening')->insert([
            'noBilyet' => $request->input('noBilyet'),
            'noRek' => $request->input('noRek'),
            'atasNama' => $request->input('atasNama'),
            'taksasi' => $request->input('taksasi'),
            'noSpk' => $noSpk,
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);
        return view('spk.jaminan', [
            'success' => 'Data berhasil disimpan, lanjut ke halaman jaminan untuk menambah jaminan lainnya.'
        ]);
    }

    public function tanpaJaminan()
    {
        return view('spk.tanpajaminan');
    }

    public function storeDataTanpaJaminan(Request $request)
    {
        $request->validate([
            'tanpaJaminan' => 'required',
        ]);
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Pastikan user memiliki relasi ke choper dan mengambil kd_cabang
        $kd_cabang = $kd_cabang = DB::table('choper')->where('Nopeg', Auth::user()->Nopeg)->value('kd_cabang');
        // Simpan data ke tabel form_spk
        $noSpk = session('noSpk');
            if (!$noSpk) {
                return redirect()->back()->with('error', 'Data No. SPK tidak ditemukan. Silakan isi data SPK terlebih dahulu.');
            }
        DB::table('tanpajaminan')->insert([
            'tanpaJaminan' => $request->input('tanpaJaminan'),
            'noSpk' => $noSpk,
            'kd_cabang' => $kd_cabang, // Tambahkan kd_cabang dari choper
        ]);
        return view('dashboard', [
            'success' => 'Data berhasil disimpan, lanjut ke halaman jaminan untuk menambah jaminan lainnya.'
        ]);
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

    // ===========print dan cetak pdf spk==========
    
    public function cari(Request $request)
    {
        $search = $request->input('search');

        $query = DB::table('form_spk')->when($search, function ($query) use ($search) {
            return $query->where('Nama', 'like', '%' . $search . '%');
        });

        $nasabahData = $query->paginate(10);

        return view('printSpk.cari', compact('nasabahData', 'search'));
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
            [
                // Angka dasar
                'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine',
                'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 
                'eighteen', 'nineteen',
                'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety',

                // Skala besar
                'hundred', 'thousand', 'million', 'billion',

                // Gabungan khusus
                'satu ratus', 'satu ribu', 'satu juta', 'satu miliar'
            ],
            [
                // Terjemahan angka dasar
                'nol', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan',
                'sepuluh', 'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'enam belas', 'tujuh belas', 'delapan belas', 'sembilan belas',
                'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh', 'enam puluh', 'tujuh puluh', 'delapan puluh', 'sembilan puluh',

                // Skala besar
                'ratus', 'ribu', 'juta', 'miliar',

                // Gabungan khusus
                'seratus', 'seribu', 'satu juta', 'satu miliar'
            ],
            strtolower($terbilang)
        );
    }

    // =====installment=========
    private function getDataInstallment($spk)
    {
        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        // Ambil data jaminan
        $jmnSertifikat = DB::table('jmnsertifikat')->where('noSpk', $spk->noSpk)->get();
        $jmnbpkb = DB::table('jmnbpkb')->where('noSpk', $spk->noSpk)->get();
        $jmnrekening = DB::table('jmnrekening')->where('noSpk', $spk->noSpk)->get();

        // Ambil data cabang
        $kota         = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kota');
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->first();
        $namaKacab = ($spk->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = $cabang->kantorCabang ?? null;
        $tglSkKacab = $cabang->tglSkKacab ?? null;
        $noSkKacab = $cabang->noSkKacab ?? null;

        // Hitung nilai
        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;
        $cicilanBulanan = $spk->jangkaWaktu > 0 
            ? ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12)
            : 0;
        $denda = $spk->bunga > 0 ? $spk->bunga / 12 : 0;
        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        // Terbilang
        $plafondTerbilang = $this->konversiTerbilang($spk->plafondKred);
        $jangkaWaktuTerbilang = $this->konversiTerbilang($spk->jangkaWaktu);
        $bungaTerbilang = $this->konversiTerbilang($spk->bunga);
        $provisiTerbilang = $this->konversiTerbilang($spk->provisi);
        $nilaiProvisiTerbilang = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang = $this->konversiTerbilang($spk->adm);
        $cicilanBulananTerbilang = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang = $this->konversiTerbilang($denda);

        return [
            'printInstallment' => [$spk],
            'noSpk' => $spk->noSpk,
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
            'pengikatanJaminan' => $spk->pengikatanJaminan,
            'umur' => $umur,
            'namaKacab' => $namaKacab,
            'kantorCabang' => $kantorCabang,
            'tglSkKacab' => $tglSkKacab,
            'noSkKacab' => $noSkKacab,
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
            'jmnSertifikat' => $jmnSertifikat,
            'jmnbpkb' => $jmnbpkb,
            'jmnrekening' => $jmnrekening,
            'kota' => $kota,
        ];
    }
    public function printInstallment($noSpk)
    {
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        $viewData = $this->getDataInstallment($spk);
        return view('printSpk.installment', $viewData);
    }
    public function pdfInstallment($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        $viewData = $this->getDataInstallment($spk);

        $mpdf->WriteHTML(view('pdf.installment', ['viewData'=>$viewData]));
        $mpdf->Output();
    }


    // =====transparansi produk=========
    private function getDataTransparansiProduk($data)
    {
        
        //ambil data dari tabel mstr_kacab
        $kota         = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kota');
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->first();
        $namaKacab = ($data->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kantorCabang');

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
    
        return [
            'printInstallment'          => [$data],
            'noSpk'                     => $data->noSpk,
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
            'fasilitasKred'            => $data->fasilitasKred,
            'sifatKred'                => $data->sifatKred,
            'jenisGuna'                => $data->jenisGuna,
            'penggunaanKred'           => $data->penggunaanKred,
            'pengikatanKred'           => $data->pengikatanKred,
            'pengikatanJaminan'        => $data->pengikatanJaminan,
            'umur'                     => $umur,
            'namaKacab'                => $namaKacab,
            'kantorCabang'             => $kantorCabang,
            'kota'             => $kota,
            'cabang'             => $cabang,
        ];
    }
    public function printTransProduk(Request $request, $noSpk)
    {
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) return redirect()->back()->with('error', 'Data tidak ditemukan.');
    
        $viewData = $this->getDataTransparansiProduk($data);
    
        return view('printSpk.transparansiProduk', $viewData);
    }
    public function pdfTransProd($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) abort(404, 'Data tidak ditemukan.');

        $viewData = $this->getDataTransparansiProduk($data);

        $mpdf->WriteHTML(view('pdf.transprod', ['viewData'=>$viewData]));
        $mpdf->Output();
    }

    // =====persetujuan kredit==========
    private function getDataPersetujuanKredit($data)
    {
        // Ambil data dari tabel mstr_kacab
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->first();
        $namaKacab = ($data->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kantorCabang');
        $kota         = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kota');

        // Ambil data jaminan
        $jmnSertifikat = DB::table('jmnsertifikat')->where('noSpk', $data->noSpk)->get();
        $jmnbpkb = DB::table('jmnbpkb')->where('noSpk', $data->noSpk)->get();
        $jmnrekening = DB::table('jmnrekening')->where('noSpk', $data->noSpk)->get();

        // Hitung nilai provisi
        $nilaiProvisi = ($data->provisi / 100) * $data->plafondKred;

        // Hitung cicilan bulanan
        $cicilanBulanan = 0;
        if ($data->jangkaWaktu > 0) {
            $cicilanBulanan = ($data->plafondKred / $data->jangkaWaktu) + (($data->plafondKred * $data->bunga) / 100 / 12);
        }

        // Hitung denda
        $denda = $data->bunga > 0 ? $data->bunga / 12 : 0;

        // Hitung umur
        $umur = $data->tahunLahirDeb ? Carbon::parse($data->tahunLahirDeb)->diffInYears(Carbon::now()) : null;

        // Konversi ke terbilang
        $plafondTerbilang         = $this->konversiTerbilang($data->plafondKred);
        $jangkaWaktuTerbilang     = $this->konversiTerbilang($data->jangkaWaktu);
        $bungaTerbilang           = $this->konversiTerbilang($data->bunga);
        $provisiTerbilang         = $this->konversiTerbilang($data->provisi);
        $nilaiProvisiTerbilang    = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang             = $this->konversiTerbilang($data->adm);
        $cicilanBulananTerbilang  = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang           = $this->konversiTerbilang($denda);

        return [
            'printInstallment'          => [$data],
            'noSpk'                     => $data->noSpk,
            'namaDebitur'              => $data->namaDebitur,
            'namaIstri'                => $data->namaIstri,
            'pekerjaanDeb'             => $data->pekerjaanDeb,
            'alamatDeb'                => $data->alamatDeb,
            'noKtpDeb'                 => $data->noKtpDeb,
            'noKtpIstri'               => $data->noKtpIstri,
            'tahunLahirDeb'            => $data->tahunLahirDeb,
            'umur'                     => $umur,
            'tglPermohonan'            => $data->tglPermohonan,
            'tglPersetujuan'           => $data->tglPersetujuan,
            'tglDroping'               => $data->tglDroping,
            'tglJatuhTempo'            => $data->tglJatuhTempo,
            'jangkaWaktu'              => $data->jangkaWaktu,
            'jangkaWaktuTerbilang'     => $jangkaWaktuTerbilang,
            'plafondKred'              => $data->plafondKred,
            'plafondTerbilang'         => $plafondTerbilang,
            'bunga'                    => $data->bunga,
            'bungaTerbilang'           => $bungaTerbilang,
            'provisi'                  => $data->provisi,
            'provisiTerbilang'         => $provisiTerbilang,
            'nilaiProvisi'             => $nilaiProvisi,
            'nilaiProvisiTerbilang'    => $nilaiProvisiTerbilang,
            'adm'                      => $data->adm,
            'admTerbilang'             => $admTerbilang,
            'cicilanBulanan'           => $cicilanBulanan,
            'cicilanBulananTerbilang'  => $cicilanBulananTerbilang,
            'denda'                    => $denda,
            'dendaTerbilang'           => $dendaTerbilang,
            'noRekTab'                 => $data->noRekTab,
            'sifatKred'                => $data->sifatKred,
            'jenisGuna'                => $data->jenisGuna,
            'pengikatanKred'           => $data->pengikatanKred,
            'pengikatanJaminan'        => $data->pengikatanJaminan,
            'jmnSertifikat'            => $jmnSertifikat,
            'jmnbpkb'                  => $jmnbpkb,
            'jmnrekening'              => $jmnrekening,
            'namaKacab'                => $namaKacab,
            'kantorCabang'             => $kantorCabang,
            'kota'                     => $kota,
            'cabang'                   => $cabang,
        ];
    }
    public function printPersetujuanKred($noSpk)
    {
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $viewData = $this->getDataPersetujuanKredit($data);

        return view('printSpk.persetujuanKredit', $viewData);
    }
    public function pdfPersetKred($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) abort(404, 'Data tidak ditemukan.');

        $viewData = $this->getDataPersetujuanKredit($data);

        $mpdf->WriteHTML(view('pdf.persetujuankred', ['viewData'=>$viewData]));
        $mpdf->Output();
    }

    // =======feo==========
    private function getDataFeo($spk)
    {
        $jmnSertifikat = DB::table('jmnsertifikat')->where('noSpk', $spk->noSpk)->get();
        $jmnbpkb = DB::table('jmnbpkb')->where('noSpk', $spk->noSpk)->get();
        $jmnrekening = DB::table('jmnrekening')->where('noSpk', $spk->noSpk)->get();

        // Hitung total jaminan
        $totalJaminan = 
            $jmnrekening->sum('taksasi') +
            $jmnbpkb->sum('nilaiHt') +
            $jmnSertifikat->sum('nilaiWajar');

        // Ambil data kota, namaKacab, kantor
        $kota         = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kota');
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->first();
        $namaKacab = ($spk->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kantorCabang');

        // Hitung nilai provisi
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

        // Konversi ke terbilang
        $plafondTerbilang         = $this->konversiTerbilang($spk->plafondKred);
        $jangkaWaktuTerbilang     = $this->konversiTerbilang($spk->jangkaWaktu);
        $bungaTerbilang           = $this->konversiTerbilang($spk->bunga);
        $provisiTerbilang         = $this->konversiTerbilang($spk->provisi);
        $nilaiProvisiTerbilang    = $this->konversiTerbilang($nilaiProvisi);
        $admTerbilang             = $this->konversiTerbilang($spk->adm);
        $cicilanBulananTerbilang  = $this->konversiTerbilang($cicilanBulanan);
        $dendaTerbilang           = $this->konversiTerbilang($denda);

        return [
            'printInstallment'         => [$spk],
            'noSpk'                    => $spk->noSpk,
            'namaDebitur'              => $spk->namaDebitur,
            'namaIstri'                => $spk->namaIstri,
            'pekerjaanDeb'             => $spk->pekerjaanDeb,
            'alamatDeb'                => $spk->alamatDeb,
            'kotaPengadilanDeb'        => $spk->kotaPengadilanDeb,
            'noKtpDeb'                 => $spk->noKtpDeb,
            'noKtpIstri'               => $spk->noKtpIstri,
            'tglPermohonan'            => $spk->tglPermohonan,
            'tglPersetujuan'           => $spk->tglPersetujuan,
            'plafondKred'              => $spk->plafondKred,
            'jangkaWaktu'              => $spk->jangkaWaktu,
            'tglDroping'               => $spk->tglDroping,
            'tglJatuhTempo'            => $spk->tglJatuhTempo,
            'bunga'                    => $spk->bunga,
            'noRekTab'                 => $spk->noRekTab,
            'provisi'                  => $spk->provisi,
            'adm'                      => $spk->adm,
            'kota'                     => $kota,
            'cabang'                     => $cabang,
            'namaKacab'                => $namaKacab,
            'kantorCabang'            => $kantorCabang,
            'umur'                     => $umur,
            'plafondTerbilang'         => $plafondTerbilang,
            'jangkaWaktuTerbilang'     => $jangkaWaktuTerbilang,
            'bungaTerbilang'           => $bungaTerbilang,
            'provisiTerbilang'         => $provisiTerbilang,
            'nilaiProvisi'             => $nilaiProvisi,
            'nilaiProvisiTerbilang'    => $nilaiProvisiTerbilang,
            'admTerbilang'             => $admTerbilang,
            'cicilanBulanan'           => $cicilanBulanan,
            'cicilanBulananTerbilang'  => $cicilanBulananTerbilang,
            'denda'                    => $denda,
            'dendaTerbilang'           => $dendaTerbilang,
            'jmnSertifikat'            => $jmnSertifikat,
            'jmnbpkb'                  => $jmnbpkb,
            'jmnrekening'              => $jmnrekening,
            'totalJaminan'             => $totalJaminan,
        ];
    }
    public function printFeo($noSpk)
    {
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        $viewData = $this->getDataFeo($spk);

        return view('printSpk.feo', $viewData);
    }
    public function pdfFeo($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) abort(404, 'Data tidak ditemukan.');

        $viewData = $this->getDataFeo($data);

        $mpdf->WriteHTML(view('pdf.feo', ['viewData'=>$viewData]));
        $mpdf->Output();
    }

    // ===serah terima==========
    private function getDataSrhtrmjmn($spk)
    {
        $jmnSertifikat = DB::table('jmnsertifikat')->where('noSpk', $spk->noSpk)->get();
        $jmnbpkb = DB::table('jmnbpkb')->where('noSpk', $spk->noSpk)->get();
        $jmnrekening = DB::table('jmnrekening')->where('noSpk', $spk->noSpk)->get();

        $kota = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kota');
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->first();
        $namaKacab = ($spk->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->value('kantorCabang');

        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;

        $cicilanBulanan = 0;
        if ($spk->jangkaWaktu > 0) {
            $cicilanBulanan = ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12);
        }

        $denda = $spk->bunga > 0 ? $spk->bunga / 12 : 0;

        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        return [
            'printInstallment' => [$spk],
            'noSpk' => $spk->noSpk,
            'noCif' => $spk->noCif,
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
            'admKredit' => $spk->admKredit,
            'umur' => $umur,
            'plafondTerbilang' => $this->konversiTerbilang($spk->plafondKred),
            'jangkaWaktuTerbilang' => $this->konversiTerbilang($spk->jangkaWaktu),
            'bungaTerbilang' => $this->konversiTerbilang($spk->bunga),
            'provisiTerbilang' => $this->konversiTerbilang($spk->provisi),
            'nilaiProvisi' => $nilaiProvisi,
            'nilaiProvisiTerbilang' => $this->konversiTerbilang($nilaiProvisi),
            'admTerbilang' => $this->konversiTerbilang($spk->adm),
            'cicilanBulanan' => $cicilanBulanan,
            'cicilanBulananTerbilang' => $this->konversiTerbilang($cicilanBulanan),
            'denda' => $denda,
            'dendaTerbilang' => $this->konversiTerbilang($denda),
            'namaKacab' => $namaKacab,
            'kantorCabang' => $kantorCabang,
            'cabang' => $cabang,
            'jmnSertifikat' => $jmnSertifikat,
            'jmnbpkb' => $jmnbpkb,
            'jmnrekening' => $jmnrekening,
        ];
    }
    public function printSrhtrmjmn($noSpk)
    {
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        $viewData = $this->getDataSrhtrmjmn($spk);

        return view('printSpk.srhtrmjmn', $viewData);
    }
    public function pdfSrhTrm($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();
        if (!$data) abort(404, 'Data tidak ditemukan.');

        $viewData = $this->getDataSrhtrmjmn($data);

        $mpdf->WriteHTML(view('pdf.serahterimajmn', ['viewData'=>$viewData]));
        $mpdf->Output();
    }

    //======pengantar notaris==========
    public function getDataPengNotaris($noSpk)
    {
        $spk = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$spk) {
            abort(404, 'Data SPK tidak ditemukan.');
        }

        $jmnSertifikat = DB::table('jmnsertifikat')->where('noSpk', $noSpk)->get();
        $jmnbpkb = DB::table('jmnbpkb')->where('noSpk', $noSpk)->get();
        $jmnrekening = DB::table('jmnrekening')->where('noSpk', $noSpk)->get();

        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $spk->kd_cabang ?? '')->first();
        $namaKacab = ($spk->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = $cabang->kantorCabang ?? '';

        $nilaiProvisi = ($spk->provisi / 100) * $spk->plafondKred;
        $cicilanBulanan = ($spk->jangkaWaktu > 0)
            ? ($spk->plafondKred / $spk->jangkaWaktu) + (($spk->plafondKred * $spk->bunga) / 100 / 12)
            : 0;
        $denda = ($spk->bunga > 0) ? $spk->bunga / 12 : 0;
        $umur = $spk->tahunLahirDeb ? Carbon::parse($spk->tahunLahirDeb)->diffInYears(now()) : null;

        $terbilang = fn($angka) => $this->konversiTerbilang($angka);

        return [
            'printInstallment' => [$spk],
            'noSpk' => $noSpk,
            'noCif' => $spk->noCif,
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
            'admKredit' => $spk->admKredit,
            'fasilitasKred' => $spk->fasilitasKred,
            'pengikatanJaminan' => $spk->pengikatanJaminan,
            'umur' => $umur,
            'plafondTerbilang' => $terbilang($spk->plafondKred),
            'jangkaWaktuTerbilang' => $terbilang($spk->jangkaWaktu),
            'bungaTerbilang' => $terbilang($spk->bunga),
            'provisiTerbilang' => $terbilang($spk->provisi),
            'nilaiProvisi' => $nilaiProvisi,
            'nilaiProvisiTerbilang' => $terbilang($nilaiProvisi),
            'admTerbilang' => $terbilang($spk->adm),
            'cicilanBulanan' => $cicilanBulanan,
            'cicilanBulananTerbilang' => $terbilang($cicilanBulanan),
            'denda' => $denda,
            'dendaTerbilang' => $terbilang($denda),
            'namaKacab' => $namaKacab,
            'kantorCabang' => $kantorCabang,
            'jmnbpkb' => $jmnbpkb,
            'jmnrekening' => $jmnrekening,
            'jmnSertifikat' => $jmnSertifikat,
        ];
    }
    public function printPengNotaris($noSpk)
    {
        $viewData = $this->getDataPengNotaris($noSpk);
        return view('printSpk.pengantarNotaris', $viewData);
    }
    public function pdfPengNotaris($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataPengNotaris($noSpk);

        $mpdf->WriteHTML(view('pdf.pengnotaris', ['viewData'=>$viewData]));
        $mpdf->Output();
    }

    //====asessoir============
    public function getDataAssesoir($noSpk)
    {
        $data = DB::table('form_spk')->where('noSpk', $noSpk)->first();

        if (!$data) {
            abort(404, 'Data tidak ditemukan.');
        }

        $kota = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->value('kota');
        $cabang = DB::table('mstr_kacab')->where('kd_cabang', $data->kd_cabang ?? '')->first();
        $namaKacab = ($data->kacabHadir == 0) ? 'Bambang Susanto, S.E., M.M.' : ($cabang->namaKacab ?? null);
        $kantorCabang = $cabang->kantorCabang ?? '';

        $nilaiProvisi = ($data->provisi / 100) * $data->plafondKred;
        $cicilanBulanan = ($data->jangkaWaktu > 0)
            ? ($data->plafondKred / $data->jangkaWaktu) + (($data->plafondKred * $data->bunga) / 100 / 12)
            : 0;
        $denda = $data->bunga > 0 ? $data->bunga / 12 : 0;
        $umur = $data->tahunLahirDeb ? Carbon::parse($data->tahunLahirDeb)->diffInYears(now()) : null;

        $terbilang = fn($angka) => $this->konversiTerbilang($angka);

        return [
            'printInstallment'         => [$data],
            'noSpk'                    => $noSpk,
            'namaDebitur'              => $data->namaDebitur,
            'namaIstri'                => $data->namaIstri,
            'pekerjaanDeb'             => $data->pekerjaanDeb,
            'alamatDeb'                => $data->alamatDeb,
            'noKtpDeb'                 => $data->noKtpDeb,
            'noKtpIstri'               => $data->noKtpIstri,
            'tglPermohonan'            => $data->tglPermohonan,
            'tglPersetujuan'           => $data->tglPersetujuan,
            'plafondKred'              => $data->plafondKred,
            'jangkaWaktu'              => $data->jangkaWaktu,
            'tglDroping'               => $data->tglDroping,
            'tglJatuhTempo'            => $data->tglJatuhTempo,
            'bunga'                    => $data->bunga,
            'noRekTab'                 => $data->noRekTab,
            'provisi'                  => $data->provisi,
            'adm'                      => $data->adm,
            'noRekKred'                => $data->noRekKred,
            'pekerjaanIstri'           => $data->pekerjaanIstri,
            'alamatIstri'              => $data->alamatIstri,
            'namaIbuDebitur'           => $data->namaIbuDebitur,
            'namaIbuIstri'             => $data->namaIbuIstri,
            'penggunaanKred'           => $data->penggunaanKred,
            'umur'                     => $umur,
            'kota'                     => $kota,
            'kantorCabang'             => $kantorCabang,
            'namaKacab'                => $namaKacab,
            'nilaiProvisi'             => $nilaiProvisi,
            'cicilanBulanan'           => $cicilanBulanan,
            'denda'                    => $denda,
            'plafondTerbilang'         => $terbilang($data->plafondKred),
            'jangkaWaktuTerbilang'     => $terbilang($data->jangkaWaktu),
            'bungaTerbilang'           => $terbilang($data->bunga),
            'provisiTerbilang'         => $terbilang($data->provisi),
            'nilaiProvisiTerbilang'    => $terbilang($nilaiProvisi),
            'admTerbilang'             => $terbilang($data->adm),
            'cicilanBulananTerbilang'  => $terbilang($cicilanBulanan),
            'dendaTerbilang'           => $terbilang($denda),
        ];
    }
    public function printAssesoir($noSpk)
    {
        $data = $this->getDataAssesoir($noSpk);
        return view('printSpk.assesoir', $data);
    }
    public function pdfAssesoir1($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataAssesoir($noSpk);

        $mpdf->WriteHTML(view('pdf.assesoir1', ['viewData'=>$viewData]));
        $mpdf->Output();
    }
    public function pdfAssesoir2($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataAssesoir($noSpk);

        $mpdf->WriteHTML(view('pdf.assesoir2', ['viewData'=>$viewData]));
        $mpdf->Output();
    }
    public function pdfAssesoir3($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataAssesoir($noSpk);

        $mpdf->WriteHTML(view('pdf.assesoir3', ['viewData'=>$viewData]));
        $mpdf->Output();
    }
    public function pdfAssesoir4($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataAssesoir($noSpk);

        $mpdf->WriteHTML(view('pdf.assesoir4', ['viewData'=>$viewData]));
        $mpdf->Output();
    }
    public function pdfAssesoir5($noSpk)
    {
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'dejavusans'
        ]);

        $viewData = $this->getDataAssesoir($noSpk);

        $mpdf->WriteHTML(view('pdf.assesoir5', ['viewData'=>$viewData]));
        $mpdf->Output();
    }
}
