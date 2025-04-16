@extends('layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
            <a href="{{ route('admin.pdf.transProd', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
            </div>
            <div class="card-body">
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h2>SURAT TRANSPARANSI PRODUK KREDIT</h2>
                        <h2>KEPADA DEBITUR / CALON DEBITUR</h2>
                        <hr style=" margin: auto; border: 1px solid black;">
                    </div>
                    <div class="col-md-12">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="padding: 5px;"><strong>Nomor : {{$noSpk}}</strong></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px; text-align: center;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
                                <td style="padding: 5px;"></td>
                            </tr>
                        </table>
                    </div>
   
                    <div class="row p-3 mb-2">
                        <div class="col-md-12">
                            <p><strong>Kepada Yth.</strong></p>
                            <p>Bp./ Ibu <strong>{{$namaDebitur}}</strong></p>
                            <p>Di <strong>{{$alamatDeb}}</strong></p>
                            <h5><strong>Perihal: Informasi Tentang Produk Kredit</strong></h5>
                        </div>
                    </div>
                        
                    <div class="row p-3 mb-2">
                        <div class="col-md-12">
                            <p>Dengan hormat,</p>
                            <p>Sehubungan dengan pengajuan kredit Bp./Ibu di PT. Bank Perekonomian Rakyat Nusamba Cepiring,
                                kami sampaikan informasi tentang produk kredit dengan rincian sebagai berikut:</p>
                        </div>
                    

                    
                        <div class="col-md-12">
                        <p><strong>1.</strong> Jenis Kredit : {{$fasilitasKred}}</p>
                        </div>
                    
                    
                        <div class="col-md-12">
                            <p><strong>2.</strong> Sifat Kredit : {{$sifatKred}}</p>
                        </div>
                    
                        <div class="col-md-12">
                        <p><strong>3.</strong> Persyaratan Kredit : Fotokopi KTP Suami/Istri, 
                        Fotokopi Kartu Keluarga & Surat Nikah, Fotokopi Jaminan</p>
                        </div>
                   
                        @php
                            $dataJangkaWaktu = [
                                1 => 0.0458,
                                3 => 0.1375,
                                6 => 0.275,
                                12 => 0.55,
                                18 => 0.825,
                                24 => 1.1,
                                30 => 1.375,
                                36 => 1.65,
                                48 => 2.2,
                                60 => 2.75
                            ];
                        @endphp

                        <div class="col-md-12">
                            <p><strong>4.</strong> Biaya-biaya:</p>
                            <ul style="list-style-type: lower-alpha; padding-left: 50px;">
                                <li>Provisi: {{$provisi}}% dari plafond</li>
                                <li>Administrasi: Rp {{$adm}}</li>
                                <li>Asuransi: 
                                    @if(array_key_exists($jangkaWaktu, $dataJangkaWaktu))
                                        {{$dataJangkaWaktu[$jangkaWaktu]}}% dari plafond
                                    @else
                                        - % dari plafond
                                    @endif
                                </li>
                                <li>Pengikatan Kredit: {{$pengikatanKred}}</li>
                                <li>Pengikatan Jaminan: {{$pengikatanJaminan}}</li>
                                <li>Penalty: Total Tunggakan Angsuran x {{ number_format($bunga / 12, 2) }}% per bulan</li>
                            </ul>
                        </div>

                        <div class="col-md-12">
                        <p><strong>5.</strong> Suku Bunga: {{ number_format($bunga, 1, ',', '.') }}%</p>
                            <ul style="list-style-type: lower-alpha; padding-left: 50px;">
                                <li>Metode Perhitungan: Fixed Rate</li>
                                <li>Cara Perhitungan: 
                                @if(stripos($fasilitasKred, 'instalment') !== false)
                                    Flat
                                @else
                                    Sliding
                                @endif
                                </li>
                                <li>Pembebanan: Setiap tanggal {{ date('j') }}</li>

                                <li>Penyesuaian Suku Bunga Pasar: Tetap</li>
                            </ul>
                        </div>
                   
                        <div class="col-md-12">
                        <p><strong>6.</strong>Jangka Waktu : {{$jangkaWaktu}} bulan</p>
                        </div>
                    
                        <div class="col-md-12">
                        <p><strong>7.</strong>Hal-hal Lain : Pelunasan sebelum jatuh tempo, kewajiban + 2 angsuran bunga</p>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-md-12">
                        <p>Demikian informasi ini kami sampaikan, atas perhatiannya diucapkan terima kasih.</p>
                    </div>

                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <tr>
                            <td style="text-align: center; padding: 10px; font-weight: bold;">PT. BPR Nusamba Cepiring</td>
                            <td style="text-align: center; padding: 10px; font-weight: bold;">Telah dibaca dan disetujui oleh debitur</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height: 50px;"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; font-weight: bold;">{{$namaKacab}}</td>
                            <td style="text-align: center; font-weight: bold;">{{$namaDebitur}}</td>
                            <td style="text-align: center; font-weight: bold;">{{$namaIstri}}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">KKPO</td>
                            <td style="text-align: center;">Debitur</td>
                            <td style="text-align: center;">Suami/Istri</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
