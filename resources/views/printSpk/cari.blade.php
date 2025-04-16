@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Data Nasabah</h3>
        </div>

        <div class="mb-3 mt-3">
            <form action="{{ route('admin.spk.cari') }}" method="GET" class="mx-3">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan NO SPK" value="{{ $search ?? '' }}">
                    <button type="submit" class="btn btn-info">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO. SPK</th>
                    <th>Nama</th>
                    <th>installment</th>
                    <th>Transparansi Produk</th>
                    <th>persetujuan kredit</th>
                    <th>feo</th>
                    <th>serah terima jaminan</th>
                    <th>pengantar notaris</th>
                    <th>assesoir</th>
                    @can('view_admin')
                    <th>Aksi</th>
                    @endcan
                </tr>

                </tr>
            </thead>
            <tbody>
                    @foreach($nasabahData as $data)
                    <tr>
                            <td>{{ $data->noSpk }}</td>
                            <td>{{ $data->namaDebitur }}</td>
                            <td>
                                <a href="{{ route('admin.spk.print', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print3', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print4', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print5', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print6', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print7', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.spk.print8', ['noSpk' => $data->noSpk]) }}" class="btn btn-info">lihat</a>
                            </td> 
                            @can('view_admin')
                            <td>
                                
                                <a href="" class="btn btn-warning">Edit</a>
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
                {{ $nasabahData->appends(['search' => $search])->links('pagination::bootstrap-4') }}
            </div>
    </div>
</div>
@endsection
