@extends('layouts.app')  
@section('content') 


    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Pengisian Data Debitur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.spk.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="noRekKred">NO. REKENENING KREDIT :</label>
                            <input type="text" class="form-control" name="noRekKred" required>
                        </div>
                        <div class="form-group">
                            <label for="noRekTab">NO. REKENING TAB :</label>
                            <input type="text" class="form-control" name="noRekTab" required>
                        </div>
                        <div class="form-group">
                            <label for="noSpk">NO. SPK :</label>
                            <input type="text" class="form-control" name="noSpk" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="namaDebitur">NAMA DEBITUR :</label>
                            <input type="text" class="form-control" name="namaDebitur" required>
                        </div>
                        <div class="form-group">
                            <label for="namaIbuDebitur">NAMA IBU DEBITUR :</label>
                            <input type="text" class="form-control" name="namaIbuDebitur" required>
                        </div>
                        <div class="form-group">
                            <label for="tahunLahirDeb">TAHUN LAHIR :</label>
                            <input type="date" class="form-control" name="tahunLahirDeb" required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaanDeb">PEKERJAAN :</label>
                            <input type="text" class="form-control" name="pekerjaanDeb" required>
                        </div>
                        <div class="form-group">
                            <label for="alamatDeb">ALAMAT :</label>
                            <input type="text" class="form-control" name="alamatDeb" required>
                        </div>
                        <div class="form-group">
                            <label for="kotaPengadilanDeb">KOTA PENGADILAN :</label>
                            <input type="text" class="form-control" name="kotaPengadilanDeb" required>
                        </div>
                        <div class="form-group">
                            <label for="noKtpDeb">NO. KTP :</label>
                            <input type="text" class="form-control" name="noKtpDeb" required>
                        </div>
                        <div class="form-group">
                            <label for="namaIstri">NAMA ISTRI DEBITUR :</label>
                            <input type="text" class="form-control" name="namaIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="namaIbuIstri">NAMA IBU ISTRI DEBITUR :</label>
                            <input type="text" class="form-control" name="namaIbuIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="tahunLahirIstri">TAHUN LAHIR ISTRI:</label>
                            <input type="date" class="form-control" name="tahunLahirIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaanIstri">PEKERJAAN ISTRI:</label>
                            <input type="text" class="form-control" name="pekerjaanIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="alamatIstri">ALAMAT ISTRI:</label>
                            <input type="text" class="form-control" name="alamatIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="kotaPengadilanIstri">KOTA PENGADILAN ISTRI :</label>
                            <input type="text" class="form-control" name="kotaPengadilanIstri" required>
                        </div>
                        <div class="form-group">
                            <label for="noKtpIstri">NO. KTP ISTRI:</label>
                            <input type="text" class="form-control" name="noKtpIstri" required>
                        </div>

                        <div class="form-group">
                            <label for="namaPenj">NAMA PENJAMIN :</label>
                            <input type="text" class="form-control" name="namaPenj" required>
                        </div>
                        <div class="form-group">
                            <label for="tahunLahirPenj">TAHUN LAHIR :</label>
                            <input type="date" class="form-control" name="tahunLahirPenj" required>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaanPenj">PEKERJAAN :</label>
                            <input type="text" class="form-control" name="pekerjaanPenj" required>
                        </div>
                        <div class="form-group">
                            <label for="alamatPenj">ALAMAT :</label>
                            <input type="text" class="form-control" name="alamatPenj" required>
                        </div>
                        <div class="form-group">
                            <label for="noKtpPenj">NO. KTP PENJAMIN :</label>
                            <input type="text" class="form-control" name="noKtpPenj" required>
                        </div>
                        <div class="form-group">
                            <label for="hubunganKel">HUBUNGAN KELUARGA :</label>
                            <input type="text" class="form-control" name="hubunganKel" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="tglPermohonan">TANGGAL PERMOHONAN :</label>
                            <input type="date" class="form-control" name="tglPermohonan" required>
                        </div>
                        <div class="form-group">
                            <label for="tglPersetujuan">TANGGAL PERSETUJUAN :</label>
                            <input type="date" class="form-control" name="tglPersetujuan" required>
                        </div>
                        <div class="form-group">
                            <label for="tglDroping">TANGGAL DROPING :</label>
                            <input type="date" class="form-control" name="tglDroping" required>
                        </div>
                        <div class="form-group">
                            <label for="plafondKred">PLAFOND KREDIT :</label>
                            <input type="text" class="form-control" name="plafondKred" required>
                        </div>
                        <div class="form-group">
                            <label for="fasilitasKred">FASILITAS KREDIT :</label>
                            <select class="form-control" name="fasilitasKred" required>
                                <option value=""></option>
                                <option value="Instalment modal kerja">Instalment modal kerja</option>
                                <option value="Instalment investasi">Instalment investasi</option>
                                <option value="Instalment Konsumsi">Instalment Konsumsi</option>
                                <option value="Reguler modal kerja">Reguler modal kerja</option>
                                <option value="Reguler Investasi">Reguler Investasi</option>
                                <option value="Reguler Konsumsi">Reguler Konsumsi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jangkaWaktu">JANGKA WAKTU :</label>
                            <input type="text" class="form-control" name="jangkaWaktu" required>
                        </div>
                        <div class="form-group">
                            <label for="bunga">BUNGA :</label>
                            <input type="text" class="form-control" name="bunga" required>
                        </div>
                        <div class="form-group">
                            <label for="provisi">PROVISI :</label>
                            <input type="text" class="form-control" name="provisi" required>
                        </div>
                        <div class="form-group">
                            <label for="materai">MATERAI :</label>
                            <input type="text" class="form-control" name="materai" required>
                        </div>
                        <div class="form-group">
                            <label for="adm">ADMINISTRASI :</label>
                            <input type="text" class="form-control" name="adm" required>
                        </div>
                        <div class="form-group">
                            <label for="notaris">NOTARIS :</label>
                            <input type="text" class="form-control" name="notaris" required>
                        </div>
                        <div class="form-group">
                            <label for="asuransiJiwa">ASURANSI JIWA :</label>
                            <input type="text" class="form-control" name="asuransiJiwa" required>
                        </div>
                        <div class="form-group">
                            <label for="asuransiJaminan">ASURANSI JAMINAN :</label>
                            <input type="text" class="form-control" name="asuransiJaminan" required>
                        </div>
                        <div class="form-group">
                            <label for="provisi2">PROVISI (paling bawah form spk):</label>
                            <input type="text" class="form-control" name="provisi2" required placeholder="Bila jumlah lebih atau = 1 juta ditulis =w1, kalau kurang dari 1 juta ditulis =x1">
                        </div>
                        <div class="form-group">
                            <label for="angPokBung">ANGSURAN POKOK + BUNGA:</label>
                            <input type="text" class="form-control" name="angPokBung" required placeholder="Bila jumlah lebih atau = 1 juta ditulis =w2, kalau kurang dari 1 juta ditulis =x2">
                        </div>
                        <div class="form-group">
                            <label for="angBung">ANGSURAN BUNGA :</label>
                            <input type="text" class="form-control" name="angBung" required placeholder="Bila jumlah lebih atau = 1 juta ditulis =w3, kalau kurang dari 1 juta ditulis =x3">
                        </div>
                        <div class="form-group">
                            <label for="totBiaya">TOTAL BIAYA :</label>
                            <input type="text" class="form-control" name="totBiaya" required placeholder="Bila jumlah lebih atau = 1 juta ditulis =w4, kalau kurang dari 1 juta ditulis =x4">
                        </div>
                        <div class="form-group">
                            <label for="sifatKred">SIFAT KREDIT :</label>
                            <select class="form-control" name="sifatKred" required>
                                <option value=""></option>
                                <option value="Instalment modal kerja">Instalment</option>
                                <option value="Instalment investasi">Reguler</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenisGuna">JENIS GUNA :</label>
                            <select class="form-control" name="jenisGuna" required>
                                <option value=""></option>
                                <option value="Modal Kerja">10-Modal Kerja</option>
                                <option value="Investasi">20-Investasi</option>
                                <option value="Kredit Pemilikan Rumah">31-Kons: Kredit Pemilikan Rumah</option>
                                <option value="Kredit Kendaraan Bermotor">35-Kons: Kredit Kendaraan Bermotor</option>
                                <option value="Kredit Konsumsi Lainnya">39-Kons: Kredit Konsumsi Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penggunaanKred">PENGGUNAAN KREDIT :</label>
                            <input type="text" class="form-control" name="penggunaanKred" required>
                        </div>
                        <div class="form-group">
                            <label for="pengikatanKred">PENGIKATAN KREDIT :</label>
                            <input type="text" class="form-control" name="pengikatanKred" required>
                        </div>
                        <div class="form-group">
                            <label for="pengikatanJaminan">PENGIKATAN JAMINAN :</label>
                            <input type="text" class="form-control" name="pengikatanJaminan" required>
                        </div>
                    <!-- /.card-body -->
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Selanjutnya</button>
                    </div>
                </form>
            </div>
</div>
@endsection