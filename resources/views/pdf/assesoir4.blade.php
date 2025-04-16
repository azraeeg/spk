<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat-Kesediaan-SLIK-{{ $viewData['namaDebitur'] }}</title>
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
                    <h2 style="text-decoration: underline;"><strong>SURAT PERNYATAAN</strong></h2>
                    <h3>KESEDIAAN UNTUK DILAKUKAN</h3>
                    <h3>SISTEM INFORMASI LAYANAN KEUANGAN (SLIK)/INFORMASI LAINYA</h3>
                    
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <!-- Orang ke-1 -->
                        <tr>
                            <td style="padding: 5px; width: 5%; vertical-align: top;"><strong>1.</strong></td>
                            <td style="padding: 5px; width: 25%;"><strong>NAMA</strong></td>
                            <td style="padding: 5px; width: 2%;">:</td>
                            <td style="padding: 5px;">{{$viewData['namaDebitur']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['alamatDeb']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['pekerjaanDeb']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['noKtpDeb']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['namaIbuDebitur']}}</td>
                        </tr>

                        <!-- Orang ke-2 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>2.</strong></td>
                            <td style="padding: 5px;"><strong>NAMA</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['namaIstri']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['alamatIstri']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['pekerjaanIstri']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['noKtpIstri']}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$viewData['namaIbuIstri']}}</td>
                        </tr>

                        <!-- Orang ke-3 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>3.</strong></td>
                            <td style="padding: 5px;"><strong>NAMA</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>

                        <!-- Orang ke-4 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>4.</strong></td>
                            <td style="padding: 5px;"><strong>NAMA</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">........................................</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 mt-3">
                    <p>Dengan ini menyatakan dengan sebenar-benarnya, bahwa saya bersedia / sanggup / setuju 
                        untuk dilakukan pengecekan Sistem Informasi Layanan Keuangan (SLIK) / Informasi Lainya.</p>
                    <p>Demikian surat pernyataan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="text-align: left;">{{$viewData['kota']}}, {{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                            <td style="width: 50%; text-align: left; padding: 5px;"></td>
                        </tr>
                    </table>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                    <tr>
                        <td style="text-align: left; padding: 5px; font-weight: bold;">
                            Yang membuat pernyataan,
                        </td>
                    </tr>
                </table>
                <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                    <tr>
                        <td style="text-align: left; padding: 5px; font-weight: bold;">
                           
                        </td>
                    </tr>
                </table>

                <br><br><br><br><br>

                <table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
                    <tr>
                        <td style="width: 25%; text-align: center; font-weight: bold;">{{$viewData['namaDebitur']}}</td>
                        <td style="width: 25%; text-align: center; font-weight: bold;">{{$viewData['namaIstri']}}</td>
                        <td style="width: 25%; text-align: center; font-weight: bold;">...........................</td>
                        <td style="width: 25%; text-align: center; font-weight: bold;">...........................</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Calon Debitur</td>
                        <td style="text-align: center;">Suami/Istri</td>
                        <td style="text-align: center;">Calon Penjamin</td>
                        <td style="text-align: center;">Calon Penjamin</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
