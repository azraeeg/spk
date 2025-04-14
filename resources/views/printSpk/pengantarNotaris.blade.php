@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h3><strong>BPR NUSAMBA CEPIRING</strong></h3>
                    <p>{{$noCif}}</p>
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
                     
                    @php $counter = 0; @endphp
                    @foreach ($jmnSertifikat as $index => $sertifikat)
                    <div class="col-md-12">
                        <p>
                            <strong>{{ chr(97 + $counter) }}. Sebidang tanah beserta segala turutannya yang berdiri di atasnya sebagaimana dengan tanda bukti hak sebagai berikut :</strong>
                        </p>
                        <ul>
                            <li><strong>No. SHM/SHGB/NIB:</strong> {{ $sertifikat->shmShgbNib }} - 
                                <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($sertifikat->tglShmShgbNib)->translatedFormat('d F Y') }}</li>
                            <li><strong>Surat Ukur/Gambar Situasi:</strong> {{ $sertifikat->suratUkur }} - 
                                <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($sertifikat->tglSuratUkur)->translatedFormat('d F Y') }}</li>
                            <li><strong>Luas Tanah:</strong> {{ number_format($sertifikat->luasTanah, 0, ',', '.') }} m²</li>
                            <li><strong>Jenis Bangunan:</strong> {{ $sertifikat->jenisBangunan }}</li>
                            <li><strong>Lokasi:</strong> {{ $sertifikat->terletakDi }}</li>
                            <li><strong>Atas Nama Pemegang Hak:</strong> {{ $sertifikat->atasNama }}</li>
                        </ul>
                    </div>
                    @php $counter++; @endphp
                    @endforeach
                    @foreach($jmnbpkb as $index => $item)
                    <div class="col-md-12">
                        <p><strong>{{ chr(97 + $counter) }}. BPKB Kendaraan Roda Empat:</strong></p>
                        <ul>
                            <li><strong>Bukti Kepemilikan Nomor:</strong> {{ $item->noBpkb }}</li>
                            <li><strong>Type:</strong> {{ $item->tipe }}</li>
                            <li><strong>Nomor Rangka:</strong> {{ $item->noRangka }}</li>
                            <li><strong>Nomor Mesin:</strong> {{ $item->noMesin }}</li>
                            <li><strong>Bahan Bakar:</strong> {{ $item->bahanBakar }}</li>
                            <li><strong>Nomor Polisi:</strong> {{ $item->noPol }}</li>
                            <li><strong>Merk / Tahun:</strong> {{ $item->merek }} / {{ $item->tahun }}</li>
                            <li><strong>Atas Nama:</strong> {{ $item->atasNama }}</li>
                        </ul>
                    </div>
                    @php $counter++; @endphp
                    @endforeach
                    {{-- Jaminan Rekening --}}
                    @foreach($jmnrekening as $item)
                    <div class="col-md-12">
                        <p><strong>{{ chr(97 + $counter) }}. Rekening / Deposito / Tabungan:</strong></p>
                        <ul>
                            <li><strong>No. Bilyet:</strong> {{ $item->noBilyet }}</li>
                            <li><strong>No. Rekening:</strong> {{ $item->noRek }}</li>
                            <li><strong>Atas Nama:</strong> {{ $item->atasNama }}</li>
                            <li><strong>Nilai Taksasi:</strong> Rp {{ number_format($item->taksasi, 0, ',', '.') }}</li>
                        </ul>
                    </div>
                    @php $counter++; @endphp
                    @endforeach
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
                            <td style="text-align: right; font-weight: bold;">{{$admKredit}}</td>
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
