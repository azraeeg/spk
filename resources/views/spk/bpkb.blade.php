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
              <form action="{{ route('admin.spk.storeDataBpkb') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kendRoda">KENDARAAN RODA :</label>
                            <input type="text" class="form-control" name="kendRoda" required>
                        </div>
                        <div class="form-group">
                            <label for="merek">MEREK :</label>
                            <input type="text" class="form-control" name="merek" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">TAHUN :</label>
                            <input type="text" class="form-control" name="tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="tipe">TIPE :</label>
                            <input type="text" class="form-control" name="tipe" required>
                        </div>
                        <div class="form-group">
                            <label for="noBpkb">NOMOR BPKB :</label>
                            <input type="text" class="form-control" name="noBpkb" required>
                        </div>
                        <div class="form-group">
                            <label for="noPol">NOMOR POLISI :</label>
                            <input type="text" class="form-control" name="noPol" required>
                        </div>
                        <div class="form-group">
                            <label for="atasNama">ATAS NAMA :</label>
                            <input type="text" class="form-control" name="atasNama" required>
                        </div>
                        <div class="form-group">
                            <label for="pemilik">PEMILIK :</label>
                            <input type="text" class="form-control" name="pemilik" required>
                        </div>
                        <div class="form-group">
                            <label for="noRangka">NOMOR RANGKA :</label>
                            <input type="text" class="form-control" name="noRangka" required>
                        </div>
                        <div class="form-group">
                            <label for="noMesin">NOMOR MESIN :</label>
                            <input type="text" class="form-control" name="noMesin" required>
                        </div>
                        <div class="form-group">
                            <label for="bahanBakar">BAHAN BAKAR :</label>
                            <input type="text" class="form-control" name="bahanBakar" required>
                        </div>
                        <div class="form-group">
                            <label for="nilaiHt">NILAI HT :</label>
                            <input type="text" class="form-control" name="nilaiHt" required>
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