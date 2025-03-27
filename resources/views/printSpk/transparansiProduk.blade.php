@extends('layouts.app')

@section('content')
<div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">

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
                                <td style="padding: 5px;"><strong>Nomor :</strong></td>
                                <td style="padding: 5px;">{{$noSpk}}</td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px;"></td>
                                <td style="padding: 5px; text-align: right;">Kendal,</td>
                                <td style="padding: 5px;">{{$tglDroping}}</td>
                            </tr>
                        </table>
                    </div>
   
                    <div class="row p-3 mb-2">
                        <div class="col-md-12">
                            <p><strong>Kepada Yth.</strong></p>
                            <p>Bp./ Ibu <strong>{{$namaDebitur}}</strong></p>
                            <p>Di <strong>SEMBUNG 13/02, CEPIRING, KENDAL</strong></p>
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
                        <p><strong>1.</strong> Jenis Kredit : Instalment Modal Kerja</p>
                        </div>
                    
                    
                        <div class="col-md-12">
                        <p><strong>2.</strong> Sifat Kredit : Instalment</p>
                        </div>
                    
                        <div class="col-md-12">
                        <p><strong>3.</strong> Persyaratan Kredit : Fotokopi KTP Suami/Istri, 
                        Fotokopi Kartu Keluarga & Surat Nikah, Fotokopi Jaminan</p>
                        </div>
                   
                        <div class="col-md-12">
                            <p><strong>4.</strong> Biaya-biaya:</p>
                            <ul style="list-style-type: lower-alpha; padding-left: 50px;">
                                <li>Provisi: 2.00% dari plafond</li>
                                <li>Administrasi: Rp 300,000</li>
                                <li>Asuransi: 2.75% dari plafond</li>
                                <li>Pengikatan Kredit: SKMHT</li>
                                <li>Pengikatan Jaminan: APHT</li>
                                <li>Penalty: Total Tunggakan Angsuran x 0.95% per bulan</li>
                            </ul>
                        </div>
                    
                        <div class="col-md-12">
                        <p><strong>5.</strong>Suku Bunga: 11.4%</p>
                            <ul style="list-style-type: lower-alpha; padding-left: 50px;">
                                <li>Metode Perhitungan: Fixed Rate</li>
                                <li>Cara Perhitungan: Flat</li>
                                <li>Pembebanan: Setiap tanggal 26</li>
                                <li>Penyesuaian Suku Bunga Pasar: Tetap</li>
                            </ul>
                        </div>
                   
                        <div class="col-md-12">
                        <p><strong>6.</strong>Jangka Waktu : </p>
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
                            <td style="text-align: center; font-weight: bold;">ANDIN SYAMSUL RIZAL, ST</td>
                            <td style="text-align: center; font-weight: bold;">AGUS SETIAWAN</td>
                            <td style="text-align: center; font-weight: bold;">LINDA SETYANTI</td>
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
