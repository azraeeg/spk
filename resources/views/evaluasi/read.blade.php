@extends('layouts.app')
@section('content')

<div class="row">
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>NON BEDAH</h3>
              <h4>Form Penilaian</h4>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="{{route('admin.form.nonbedah')}}" target="_blank" class="small-box-footer"> Penilaian <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
<!-- </div>
<div class="row"> -->
        <div class="col-lg-3 col-6 px-2">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>BEDAH</h3>
              <h4>Form Penilaian</h4>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="{{route('admin.form.bedah')}}" target="_blank" class="small-box-footer"> Penilaian <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
</div>

@endsection
