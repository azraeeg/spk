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

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner">
                <h3>BPKB</h3>

                <p>Kendaraan bermotor</p>
            </div>
            <div class="icon">
                <i class="fas fa-car">

                </i>
            </div>
            <a href="{{route ('admin.spk.jaminanbpkb')}}" class="small-box-footer">Isi data jaminan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>SERTIFIKAT</h3>

                <p>Sebidang tanah dan bangunan</p>
              </div>
              <div class="icon">
                <i class="fas fa-map-marked-alt">

                </i>
              </div>
              <a href="#" class="small-box-footer">Isi data jaminan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>REKENING</h3>

                <p>Tabungan / Deposito</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-money-bill-wave">

                </i>
              </div>
              <a href="#" class="small-box-footer">Isi data jaminan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
</div>
@endsection