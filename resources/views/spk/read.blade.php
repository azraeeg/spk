@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data SPK</h3>
        </div>
        
        <div class="mb-3 mt-3">
            <form action="{{ route('admin.spk.index') }}" method="GET" class="mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan NO. SPK" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO. REK KREDIT</th>
                    <th>NO. REK TAB</th>
                    <th>NO. SPK</th>
                    <th>NAMA DEBITUR</th>
                    <th>PLAFOND KRED</th>
                    <th>FASILITAS KRED</th>
                    <th>ANG POKOK + BUNGA</th>
                    <th>ANG BUNGA</th>
                    @can('view_all')
                    <th>Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>

            @foreach($spkData as $data)
                <!-- @php
                    $tglBerakhir = \Carbon\Carbon::parse($data->TglBerakhir);
                    $hSebulan = now()->addMonth()->diffInDays($tglBerakhir, false);
                    $bgClass = ($hSebulan <= 0) ? 'bg-danger' : '';
                    $masaKerja = ($data->AwalMskKrj);
                @endphp
                <tr class="{{ $bgClass }}"> -->
                <tr>
                    <td>{{ $data->noRekKred }}</td>
                    <td>{{ $data->noRekTab }}</td>
                    <td>{{ $data->noSpk }}</td>
                    <td>{{ $data->namaDebitur }}</td>
                    <td>{{ $data->plafondKred }}</td>
                    <td>{{ $data->fasilitasKred }}</td>
                    <td>{{ $data->angPokBung }}</td>
                    <td>{{ $data->angBung }}</td>
                    <!-- <td>
                        @if ($data->FileSTR)
                            @if (pathinfo($data->FileSTR, PATHINFO_EXTENSION) == 'pdf')
                                <a href="{{ asset('storage/uploads/' . $data->FileSTR) }}" target="_blank">View PDF</a>
                            @else
                                File Format Not Supported
                            @endif
                        @else
                            File Not Available
                        @endif
                    </td> -->
                    @can('view_all')
                    <td>
                        
                        <a href="{{ route('admin.spk.edit', ['noSpk' => $data->noSpk]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.spk.destroy', ['noSpk' => $data->noSpk]) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $spkData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
        
        
    </div>
</div>
@endsection
