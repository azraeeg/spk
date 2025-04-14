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
                <h3 class="card-title">Pengisian Data Jaminan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.spk.storeDataSertif') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sebidangTanah">SEBIDANG TANAH :</label>
                            <input type="text" class="form-control" name="sebidangTanah" required>
                        </div>
                        <div class="form-group">
                            <label for="terletakDi">TERLETAK DI :</label>
                            <input type="text" class="form-control" name="terletakDi" required>
                        </div>
                        <div class="form-group">
                            <label for="luasTanah">LUAS TANAH (m²) :</label>
                            <input type="text" class="form-control" name="luasTanah" required>
                        </div>
                        <div class="form-group">
                            <label for="shmShgbNib">NOMOR SHM / SHGB / NIB :</label>
                            <input type="text" class="form-control" name="shmShgbNib" required>
                        </div>
                        <div class="form-group">
                            <label for="tglShmShgbNib">TANGGAL NOMOR SHM / SHGB / NIB :</label>
                            <input type="date" class="form-control" name="tglShmShgbNib" required>
                        </div>
                        <div class="form-group">
                            <label for="suratUkur">SURAT UKUR / GAMBAR SITUASI :</label>
                            <input type="text" class="form-control" name="suratUkur" required>
                        </div>
                        <div class="form-group">
                            <label for="tglSuratUkur">TANGGAL UKUR / GAMBAR SITUASI :</label>
                            <input type="date" class="form-control" name="tglSuratUkur" required>
                        </div>
                        <div class="form-group">
                            <label for="jenisBangunan">JENIS BANGUNAN :</label>
                            <input type="text" class="form-control" name="jenisBangunan" required>
                        </div>
                        <div class="form-group">
                            <label for="atasNama">ATAS NAMA :</label>
                            <input type="text" class="form-control" name="atasNama" required>
                        </div>
                        <div class="form-group">
                            <label for="pemilik">PEMILIK JAMINAN :</label>
                            <input type="text" class="form-control" name="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="nilaiWajar">NILAI WAJAR :</label>
                            <input type="text" class="form-control" name="nilaiWajar" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Selanjutnya</button>
                    </div>
                </form>
            </div>
</div>
@endsection