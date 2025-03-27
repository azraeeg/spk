@extends('layouts.app')

@section('content')
@section('content') 
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Foto Profil</h3>
        </div>
        <form action="{{ route('admin.profil.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="Foto">Foto Profil:</label>
                    <input type="file" class="form-control" name="Foto" accept="image/*">
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>
    </div>
</div>
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Data Diri</h3>
        </div>
        <form action="{{ route('admin.profil.update2') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" class="form-control" name="Alamat" value="{{ auth()->user()->Alamat }}" required>
                </div>
                <div class="form-group">
                    <label for="NoHP">Nomor HP:</label>
                    <input type="text" class="form-control" name="NoHP" value="{{ auth()->user()->NoHP }}" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" class="form-control" name="Email" value="{{ auth()->user()->Email }}" required>
                </div>
                <div class="form-group">
                    <label for="Agama">Agama:</label>
                    <input type="text" class="form-control" name="Agama" value="{{ auth()->user()->Agama }}" required>
                </div>
                <div class="form-group">
                    <label for="StatusPerkawinan">Status Perkawinan:</label>
                    <input type="text" class="form-control" name="StatusPerkawinan" value="{{ auth()->user()->StatusPerkawinan }}" required>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
