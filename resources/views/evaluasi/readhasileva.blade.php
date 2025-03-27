@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Perawat</h3>
        </div>

        <div class="mb-3 mt-3">
            <form action="{{ route('admin.form.hasil') }}" method="GET" class="mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan nama" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>BEDAH</th>
                    <th>NON BEDAH</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($dokterData as $data)
                    <tr>
                            <td>{{ $data->Nopeg }}</td>
                            <td>{{ $data->Nama }}</td>
                            <td>
                                <a href="{{ route('admin.hasil.bedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">BEDAH</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.hasil.nonbedah', ['nopeg' => $data->Nopeg]) }}" class="btn btn-info">NONBEDAH</a>
                            </td>

                    </tr>
                     @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $dokterData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
    </div>
</div>
@endsection
