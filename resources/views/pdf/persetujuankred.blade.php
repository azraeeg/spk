<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Persetujuan-Kredit-{{ $viewData['namaDebitur'] }}</title>
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
                <div style="text-align: center; margin-bottom: 10px;">
                    <h2>BPR NUSAMBA CEPIRING</h2>
                    <hr style="border: 1px solid black;">
                </div>
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px; text-align: center;">{{ $viewData['kota'] }},{{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                            <td style="padding: 5px;"></td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12">
                    <p><strong>Kepada Yth.</strong></p>
                    <p>Sdr : <strong>{{ $viewData['namaDebitur'] }}</strong></p>
                    <p>Di <strong>{{ $viewData['alamatDeb'] }}</strong></p>
                    <h5><strong>Perihal: Persetujuan Pemberian Fasilitas Kredit</strong></h5>
                </div>

                <div class="col-md-12">
                    <p>Dengan hormat,</p>
                    <p>Sehubungan dengan pengajuan permohonan kredit Bapak/Ibu kepada PT. Bank Perekonomian Rakyat
                        Nusamba Cepiring, maka dengan ini kami sampaikan bahwa pada prinsipnya kami dapat menyetujui
                        permohonan tersebut dengan ketentuan dan persyaratan sebagai berikut:</p>
                </div>

                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid black;">
                        <tr>
                            <td style="padding: 5px;"><strong>Sifat Kredit </strong></td>
                            <td style="padding: 5px;">: {{ $viewData['sifatKred'] }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jenis Guna </strong></td>
                            <td style="padding: 5px;">: {{ $viewData['jenisGuna'] }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Plafond</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($viewData['plafondKred'], 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Suku Bunga</strong></td>
                            <td style="padding: 5px;">: {{$viewData['bunga']}}%</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jangka Waktu</strong></td>
                            <td style="padding: 5px;">: {{$viewData['jangkaWaktu']}} bulan</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Pengikatan</strong></td>
                            <td style="padding: 5px;">: {{$viewData['pengikatanKred']}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jaminan</strong></td>
                            <td style="padding: 5px;">: {{$viewData['pengikatanJaminan']}}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p><strong>Jaminan:</strong></p> 
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
                            <li><strong>Jaminan Milik:</strong> {{ $sertifikat->pemilik }}</li>
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

                <div class="col-md-12 mt-3">
                    <p><strong>Persyaratan dan ketentuan lain:</strong></p>
                    <ul>
                        <li>Penanda tanganan SPK kredit oleh suami istri.</li>
                        <li>Kredit bisa cair setelah syarat administrasi lengkap.</li>
                        <li>Barang jaminan asli harap dibawa.</li>
                        <li>Keterlambatan pembayaran dikenakan denda.</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <p>Atas kerjasamanya yang baik kami ucapkan terima kasih.</p>
                    <p>Ketentuan dan persyaratan tersebut di atas merupakan satu-kesatuan dan bagian yang tidak
                        terpisahkan dengan perjanjian kredit yang akan ditandatangani.</p>
                    <p>Demikian hal ini kami sampaikan atas perhatian dan kerjasamanya yang baik, diucapkan
                        terima kasih.</p>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: center; padding: 10px; font-weight: bold;">Mengetahui</td>
                        <td style="text-align: center; padding: 10px; font-weight: bold;">Yang Menerima</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 50px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-weight: bold;">{{$viewData['namaKacab']}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$viewData['namaDebitur']}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$viewData['namaIstri']}}</td>
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
</body>
</html>
