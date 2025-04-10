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
              <form action="{{ route('admin.spk.jaminan') }}" method="get">
                    @csrf
                    <div class="card-body">
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
                    </div>
                        
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
</div>
@endsection