@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Ganti Password</h3>
        </div>
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="post" action="{{ route('admin.profil.ganti-password') }}">
                @csrf

                <div class="form-group">
                    <label for="password_lama">Password Lama</label>
                    <input type="password" name="password_lama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password_baru_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" name="password_baru_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-info">Ganti Password</button>
            </form>
        </div>
    </div>
    </div>
@endsection
