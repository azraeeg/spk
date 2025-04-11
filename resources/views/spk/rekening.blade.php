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
              <form action="{{ route('admin.spk.storeDataRek') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="noBilyet">NOMOR BILYET :</label>
                            <input type="text" class="form-control" name="noBilyet" required>
                        </div>
                        <div class="form-group">
                            <label for="noRek">NOMOR REKENING :</label>
                            <input type="text" class="form-control" name="noRek" required>
                        </div>
                        <div class="form-group">
                            <label for="atasNama">ATAS NAMA :</label>
                            <input type="text" class="form-control" name="atasNama" required>
                        </div>
                        <div class="form-group">
                            <label for="taksasi">TAKSASI :</label>
                            <input type="text" class="form-control" name="taksasi" required>
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