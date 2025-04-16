<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat-Penerimaan-Kredit-{{ $viewData['namaDebitur'] }}</title>
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
                    <h2 style="text-decoration: underline;"><strong>SURAT PERNYATAAN</strong></h2>
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini:</strong></p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px; width: 30%;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">: {{$viewData['namaDebitur']}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Pekerjaan</strong></td>
                            <td style="padding: 5px;">: {{$viewData['pekerjaanDeb']}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Alamat Rumah</strong></td>
                            <td style="padding: 5px;">: {{$viewData['alamatDeb']}}</td>
                        </tr>
                    </table>

                    <br>

                    <p>
                        Dengan ini menyatakan dengan sebenarnya bahwa telah menerima kredit dari PT. 
                        Bank Perekonomian Rakyat Nusamba Cepiring sebesar 
                        <strong>Rp. {{ number_format($viewData['plafondKred'], 0, ',', '.') }} ({{$viewData['plafondTerbilang']}}) selama {{$viewData['jangkaWaktu']}} bulan</strong>.
                    </p>

                    <p>Setelah dilakukan survey dari petugas PT. Bank Perekonomian Rakyat Nusamba Cepiring bahwa kredit tersebut:</p>

                    <ul>
                        <li>Bertujuan untuk <strong>{{$viewData['penggunaanKred']}}</strong>.</li>
                        <li>Benar-benar saya pergunakan sendiri sepenuhnya dan tidak ada pihak lain yang ikut 
                            menikmati kredit saya baik sebagian maupun sepenuhnya.</li>
                        <li>Apabila dikemudian hari terdapat penyimpangan terhadap pernyataan saya ini, 
                            maka saya bersedia mempertanggungjawabkan berdasarkan aturan dan hukum yang berlaku.</li>
                    </ul>

                    <p>
                        Demikian Surat Pernyataan ini saya buat dalam keadaan sadar dan tidak ada paksaan dari manapun.
                    </p>

                    <br>

                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="width: 50%; padding: 5px;">{{$viewData['kota']}}, {{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                            <td style="width: 50%; padding: 5px; text-align: right;"></td>
                        </tr>
                    </table>

                    <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                        <tr>
                            <td style="width: 50%; text-align: left; padding: 10px; font-weight: bold;">
                                Yang Membuat Pernyataan
                            </td>
                            <td style="width: 50%; text-align: right; padding: 10px; font-weight: bold;">
                                Mengetahui dan Menyetujui
                            </td>
                        </tr>
                    </table>

                    <br><br><br><br><br>

                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="width: 50%; text-align: left; padding: 10px; font-weight: bold;">
                                {{$viewData['namaDebitur']}}
                            </td>
                            <td style="width: 50%; text-align: right; padding: 10px; font-weight: bold;">
                                {{$viewData['namaIstri']}}
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%; text-align: left; padding: 0 10px;">
                                Debitur
                            </td>
                            <td style="width: 50%; text-align: right; padding: 0 10px;">
                                Suami/Istri/Pendamping
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
