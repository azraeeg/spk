@extends('layouts.app')  

@section('content') 
<!-- Profile Image -->
<div class="card-body box-profile" style="max-width: 400px; margin: 0 auto;">
    <div class="text-center">
        @if(auth()->user()->Foto)
            <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('storage/foto_profil/' . auth()->user()->Foto) }}"
                alt="User profile picture">
        @else
            <!-- Tampilkan gambar default jika pengguna tidak memiliki foto profil -->
            <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('assets/dist/img/dummypic.png') }}"
                alt="User profile picture">
        @endif
    </div>

    <h3 class="profile-username text-center">{{ auth()->user()->Nama }}</h3> 
    <p class="text-muted text-center">Unit Kerja : {{ auth()->user()->UnitKrj }}</p>

    <a href="{{ route('admin.profil.edit') }}" class="btn btn-info btn-block"><b>Edit Profil</b></a>
    <a href="{{ route('admin.profil.ganti-password.form') }}" class="btn btn-info btn-block"><b>Ganti Password</b></a>
    <a href="{{ route('logout-proses') }}" class="btn btn-info btn-block"><b>Logout</b></a>
</div>

<!-- Data PERAWAT Table -->
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Diri</h3>
        </div>
      <table class="table table-bordered">
          <tr>
              <td class="info-label">KANTOR CABANG:</td>
              <td>{{ auth()->user()->cabang }}</td>
          </tr>
          <tr>
              <td class="info-label">KODE CABANG:</td>
              <td>{{ auth()->user()->kd_cabang }}</td>
          </tr>
      </table>
  </div>
</div>




<!-- <div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">File SPK/RKK</h3>
        </div>
        <table class="table table-bordered">
            <tr>
                <td class="info-label">SPK:</td>
                <td>{{ auth()->user()->spk->FileSPK ?? 'No File' }}</td>
                <td>
                    @if(auth()->user()->spk && auth()->user()->spk->FileSPK)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->spk->FileSPK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
            <tr>
                <td class="info-label">RKK:</td>
                <td>{{ auth()->user()->spk->FileRKK ?? 'No File' }}</td>
                <td>
                    @if(auth()->user()->spk && auth()->user()->spk->FileRKK)
                        <a href="{{ asset('storage/uploads/' . auth()->user()->spk->FileRKK) }}" target="_blank">View File</a>
                    @else
                        No File
                    @endif
                </td>
            </tr>
        </table>
    </div>
</div> -->



@endsection
