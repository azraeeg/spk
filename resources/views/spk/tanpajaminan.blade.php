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
              <form action="{{ route('admin.spk.tanpajaminan.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanpaJaminan">JAMINAN :</label>
                            <select class="form-control" name="tanpaJaminan" required>
                                <option value=""></option>
                                <option value="Tanpa Jaminan">Tanpa Jaminan</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Input</button>
                    </div>
                </form>
            </div>
</div>
@endsection