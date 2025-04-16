<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pengantar-Notaris-{{ $viewData['namaDebitur'] }}</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        h2, h5 {
            margin: 0;
        }
        table {
            width: 100%;
        }
        ul {
            margin: 0;
        }
    </style>
</head>
<body>
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <tr>
                            <td style="text-align: left;"><h2 class="mb-0"><strong>BPR NUSAMBA CEPIRING</strong></h2></td>
                            <td style="text-align: right;"><h2 class="mb-0"><strong>{{$viewData['noCif']}}</strong></h2></td>
                        </tr>
                    </table>
                    <h3 style="text-align: center; text-decoration: underline;"><strong>SURAT PENGANTAR NOTARIS</strong></h3>
                </div>
            </div>


            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p class="mb-1">Kepada</p>
                    <p class="mb-1">Yth. Notaris</p>
                    <p class="mb-3">di kota KENDAL</p>

                    <p class="mb-2">Dengan hormat,</p>
                    <p class="mb-1">Bersama ini kami hadapkan nasabah:</p>
                </div>
            </div>
            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">: {{$viewData['namaDebitur']}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">: {{$viewData['alamatDeb']}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Keperluan</strong></td>
                            <td style="padding: 5px;">: {{$viewData['pengikatanJaminan']}}</td>
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
                            <td style="padding: 5px;">: Rp. {{ number_format($viewData['plafondKred'], 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Bunga</strong></td>
                            <td style="padding: 5px;">: {{$viewData['bunga']}} %</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Administrasi</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($viewData['adm'], 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Provisi</strong></td>
                            <td style="padding: 5px;">: {{$viewData['provisi']}} %</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jangka Waktu</strong></td>
                            <td style="padding: 5px;">: {{$viewData['jangkaWaktu']}} bulan</td>
                        </tr>
                        <tr>
                            @php
                                use Illuminate\Support\Str;

                                $outputJenisKredit = $viewData['fasilitasKred'];

                                if (Str::contains(strtolower($viewData['fasilitasKred']), 'instalment')) {
                                    $outputJenisKredit = 'KREDIT INSTALMENT ' . trim(Str::after(strtolower($viewData['fasilitasKred']), 'instalment'));
                                } elseif (Str::contains(strtolower($viewData['fasilitasKred']), 'reguler')) {
                                    $outputJenisKredit = 'KREDIT REGULER ' . trim(Str::after(strtolower($viewData['fasilitasKred']), 'reguler'));
                                }
                            @endphp
                            <td style="padding: 5px;"><strong>Jenis Kredit</strong></td>
                            <td style="padding: 5px;">: {{ ucfirst($outputJenisKredit) }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Nilai Hak Tanggungan</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($viewData['plafondKred'] * 1.5, 0, ',', '.') }} </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"> 
                                @if(stripos($viewData['fasilitasKred'], 'instalment') !== false)
                                 Angsuran pokok dan Bunga dibayar setiap bulan
                                @else
                                Angsuran Bunga dibayar setiap bulan, Pokok dibayar lunas sampai jatuh tempo
                                @endif</td>
                            <td style="padding: 5px;"></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Melunasi pokok</strong></td>
                            <td style="padding: 5px;">: {{$viewData['jangkaWaktu']}} bulan</td>
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
                     
                    @php $counter = 0; @endphp
                    @foreach ($viewData['jmnSertifikat'] as $index => $sertifikat)
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
                    @foreach($viewData['jmnbpkb'] as $index => $item)
                    <div class="col-md-12">
                        <p><strong>{{ chr(97 + $counter) }}. BPKB Kendaraan Roda {{$item->kendRoda}}:</strong></p>
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
                    @foreach($viewData['jmnrekening'] as $item)
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
                            <td style="text-align: right;">{{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                        </tr>
                        <tr><td colspan="2" style="height: 80px;"></td></tr> <!-- spasi tanda tangan -->
                        <tr>
                            <td style="text-align: left; font-weight: bold;">{{$viewData['namaKacab']}}</td>
                            <td style="text-align: right; font-weight: bold;">{{$viewData['admKredit']}}</td>
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
</body>
</html>
