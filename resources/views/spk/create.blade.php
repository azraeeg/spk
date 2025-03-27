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
                <h3 class="card-title">Pengisian SPK BPR NUSAMBA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.spk.create') }}" method="post" enctype="multipart/form-data">
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
                                <option value="1">Ins modal kerja</option>
                                <option value="2">Ins investasi</option>
                                <option value="3">Ins Konsumsi</option>
                                <option value="4">Reg modal kerja</option>
                                <option value="5">Reg Investasi</option>
                                <option value="6">Reg Konsumsi</option>
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
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>

</div>
</div>
<script>
        function displayFileName(inputId) {
        var fileName = document.getElementById(inputId).files[0].name;
        document.getElementById('fileLabel' + inputId.substr(4)).innerText = fileName;
    }
</script>
@endsection