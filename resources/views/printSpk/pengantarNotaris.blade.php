@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h3><strong>BPR NUSAMBA CEPIRING</strong></h3>
                    <p>51497</p>
                    <hr style="margin: auto; border: 1px solid black;">
                    <h4><strong>SURAT PENGANTAR NOTARIS</strong></h4>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p><strong>Kepada</strong></p>
                    <p>Yth. Notaris</p>
                    <p>di kota KENDAL</p>

                    <p>Dengan hormat,</p>
                    <p>Bersama ini kami hadapkan nasabah:</p>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">: {{$namaDebitur}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">: {{$alamatDeb}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Keperluan</strong></td>
                            <td style="padding: 5px;">: {{$pengikatanJaminan}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p>berkenaan dengan Pinjaman di BPR NUSAMBA CEPIRING.</p>
                    <p>Tertanggal hari ini dengan penjelasan sebagai berikut:</p>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"><strong>Pokok</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($plafondKred, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Bunga</strong></td>
                            <td style="padding: 5px;">: {{$bunga}} %</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Administrasi</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($adm, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Provisi</strong></td>
                            <td style="padding: 5px;">: {{$provisi}} %</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jangka Waktu</strong></td>
                            <td style="padding: 5px;">: {{$jangkaWaktu}} bulan</td>
                        </tr>
                        <tr>
                            @php
                                use Illuminate\Support\Str;

                                $outputJenisKredit = $fasilitasKred;

                                if (Str::contains(strtolower($fasilitasKred), 'instalment')) {
                                    $outputJenisKredit = 'KREDIT INSTALMENT ' . trim(Str::after(strtolower($fasilitasKred), 'instalment'));
                                } elseif (Str::contains(strtolower($fasilitasKred), 'reguler')) {
                                    $outputJenisKredit = 'KREDIT REGULER ' . trim(Str::after(strtolower($fasilitasKred), 'reguler'));
                                }
                            @endphp
                            <td style="padding: 5px;"><strong>Jenis Kredit</strong></td>
                            <td style="padding: 5px;">: {{ ucfirst($outputJenisKredit) }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Nilai Hak Tanggungan</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($plafondKred * 1.5, 0, ',', '.') }} </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"> 
                                @if(stripos($fasilitasKred, 'instalment') !== false)
                                 Angsuran pokok dan Bunga dibayar setiap bulan
                                @else
                                Angsuran Bunga dibayar setiap bulan, Pokok dibayar lunas sampai jatuh tempo
                                @endif</td>
                            <td style="padding: 5px;"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Melunasi pokok</strong></td>
                            <td style="padding: 5px;">: {{$jangkaWaktu}} bulan</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">Pinalty Overdue sebesar ketentuan yang berlaku pada BPR NUSAMBA CEPIRING</td>
                            <td style="padding: 5px;"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p><strong>Barang jaminan berupa:</strong></p>
                    <!-- nanti di foreach dari db jamainan sesuai dengan noSpk -->
                    <ul>
                        <li>Sebidang Tanah DAN BANGUNAN, terletak di GONDANG 001/005 CEPIRING KENDAL, luas tanah (m2) 425, SHM / HGB / NIB No.00886, atas nama AGUS SETIAWAN, Jaminan milik SENDIRI, NILAI WAJAR Rp. 300,000,000.</li>
                        <li>Kendaraan roda 2, Merk/Tahun: HONDA / 2024, Type: SPM, BPKB Nomor: J-989898989898, Nomor Polisi: H-1234-GL, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI, NILAI HT Rp. 25,000,000.</li>
                        <li>Kendaraan roda 4, Merk/Tahun: Toyota / Yaris, Type: MPNP, BPKB Nomor: G-99898989, Nomor Polisi: H-5645-HB, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI, TAKSASI Rp. 100,000,000.</li>
                    </ul>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p>Atas kerjasamanya yang baik kami ucapkan terima kasih.</p>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <tr>
                            <td style="text-align: left;"><strong>Mengetahui</strong></td>
                            <td style="text-align: right;">{{$tglDroping}}</td>
                        </tr>
                        <tr><td colspan="2" style="height: 80px;"></td></tr> <!-- spasi tanda tangan -->
                        <tr>
                            <td style="text-align: left; font-weight: bold;">{{$namaKacab}}</td>
                            <td style="text-align: right; font-weight: bold;">FETO</td>
                        </tr>
                        <tr>
                            <td style="text-align: left;">KKPO</td>
                            <td style="text-align: right;">Adm Kredit</td>
                        </tr>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
