<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Transparansi-Kredit-{{ $viewData['namaDebitur'] }}</title>
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
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row p-3 mb-2">
            <div style="text-align: center; margin-bottom: 10px;">
                <h2 style="margin: 0; font-size: 18px;">SURAT TRANSPARANSI PRODUK KREDIT</h2>
                <h2 style="margin: 0; font-size: 18px;">KEPADA DEBITUR / CALON DEBITUR</h2>
                <hr style="width: 80%; margin: 5px auto; border: 1px solid black;">
            </div>
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"><strong>Nomor :{{ $viewData['noSpk'] }}</strong></td>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px; text-align: center;">{{ $viewData['kota'] }},{{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                            <td style="padding: 5px;"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p><strong>Kepada Yth.</strong></p>
                    <p>Bp./ Ibu <strong>{{ $viewData['namaDebitur'] }}</strong></p>
                    <p>Di <strong>{{ $viewData['alamatDeb'] }}</strong></p>
                    <h5><strong>Perihal: Informasi Tentang Produk Kredit</strong></h5>
                </div>
            </div>

            <div class="row p-3 mb-2">
                <div class="col-md-12">
                    <p>Dengan hormat,</p>
                    <p>Sehubungan dengan pengajuan kredit Bp./Ibu di PT. Bank Perekonomian Rakyat Nusamba Cepiring, kami sampaikan informasi tentang produk kredit dengan rincian sebagai berikut:</p>
                </div>

                <div class="col-md-12">
                    <p><strong>1.</strong> Jenis Kredit : {{ $viewData['fasilitasKred'] }}</p>
                </div>

                <div class="col-md-12">
                    <p><strong>2.</strong> Sifat Kredit : {{ $viewData['sifatKred'] }}</p>
                </div>

                <div class="col-md-12">
                    <p><strong>3.</strong> Persyaratan Kredit : Fotokopi KTP Suami/Istri, Fotokopi Kartu Keluarga & Surat Nikah, Fotokopi Jaminan</p>
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
                        <li>Provisi: {{ $viewData['provisi'] }}% dari plafond</li>
                        <li>Administrasi: Rp {{ $viewData['adm'] }}</li>
                        <li>Asuransi:
                            @if(array_key_exists($viewData['jangkaWaktu'], $dataJangkaWaktu))
                                {{ $dataJangkaWaktu[$viewData['jangkaWaktu']] }}% dari plafond
                            @else
                                - % dari plafond
                            @endif
                        </li>
                        <li>Pengikatan Kredit: {{ $viewData['pengikatanKred'] }}</li>
                        <li>Pengikatan Jaminan: {{ $viewData['pengikatanJaminan'] }}</li>
                        <li>Penalty: Total Tunggakan Angsuran x {{ number_format($viewData['bunga'] / 12, 2) }}% per bulan</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <p><strong>5.</strong> Suku Bunga: {{ number_format($viewData['bunga'], 1, ',', '.') }}%</p>
                    <ul style="list-style-type: lower-alpha; padding-left: 50px;">
                        <li>Metode Perhitungan: Fixed Rate</li>
                        <li>Cara Perhitungan:
                            @if(stripos($viewData['fasilitasKred'], 'instalment') !== false)
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
                    <p><strong>6.</strong> Jangka Waktu : {{ $viewData['jangkaWaktu'] }} bulan</p>
                </div>

                <div class="col-md-12">
                    <p><strong>7.</strong> Hal-hal Lain : Pelunasan sebelum jatuh tempo, kewajiban + 2 angsuran bunga</p>
                </div>
            </div>

            <div class="row p-3">
                <div class="col-md-12">
                    <p>Demikian informasi ini kami sampaikan, atas perhatiannya diucapkan terima kasih.</p>
                </div>

                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <tr>
                            <td style="text-align: center; padding: 10px; font-weight: bold;">PT. BPR Nusamba Cepiring</td>
                            <td style="text-align: center; padding: 10px; font-weight: bold;">Telah dibaca dan disetujui oleh debitur</td>
                        </tr>
                        <tr><td colspan="2" style="height: 50px;"></td></tr>
                        <tr>
                            <td style="text-align: center; font-weight: bold;">{{ $viewData['namaKacab'] }}</td>
                            <td style="text-align: center; font-weight: bold;">{{ $viewData['namaDebitur'] }}</td>
                            <td style="text-align: center; font-weight: bold;">{{ $viewData['namaIstri'] }}</td>
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
</div>

</body>
</html>
