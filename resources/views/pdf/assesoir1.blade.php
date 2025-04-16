<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat-Kuasa-{{ $viewData['namaDebitur'] }}</title>
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
<div class="card card-info">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div style="text-align: center; margin-bottom: 10px;">
                    <h2><strong>SURAT KUASA</strong></h2>
                    <hr style="border: 1px solid black;">
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
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
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">: {{$viewData['noKtpDeb']}}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p>Pemegang Tabungan Nomor Rekening: <strong>{{$viewData['noRekTab']}}</strong>. Pada PT. Bank Perekonomian Rakyat Nusamba Cepiring, dengan ini memberi kuasa kepada:</p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">: PT. Bank Perekonomian Rakyat Nusamba Cepiring</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">: Jalan Raya Gondang No 30, Cepiring, Kendal</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p>Untuk dan atas nama pemberi kuasa melakukan pendebetan dan penyetoran atas 
                        Tabungan di atas untuk pembayaran angsuran kredit dan/atau kewajiban lainnya yang 
                        berkaitan dengan kredit saya pada PT. Bank Perekonomian Rakyat Nusamba Cepiring dengan 
                        nomor rekening kredit <strong>{{$viewData['noRekKred']}}</strong> atas nama <strong>{{$viewData['namaDebitur']}}</strong> 
                        apabila sampai waktu yang ditentukan saya tidak membayar kewajiban saya tersebut.</p>
                    <p>Kuasa ini tidak akan saya cabut sampai dengan kredit atas nama saya telah dinyatakan lunas.</p>
                    <p>Demikian Surat Kuasa ini dibuat untuk keperluan tersebut di atas dan mulai berlaku 
                        sejak saat ditandatangani oleh pemberi kuasa.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="text-align: right;">{{$viewData['kota']}}, {{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                        </tr>
                    </table>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: left; padding: 10px; font-weight: bold;">Yang diberi Kuasa,</td>
                        <td style="text-align: right; padding: 10px; font-weight: bold;">Yang Memberi Kuasa,</td>
                    </tr>
                    <tr>
                        <td style="height: 80px; text-align: right;"></td>
                        <td style="height: 80px; text-align: center;">{Materai}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; font-weight: bold;">{{$viewData['namaKacab']}}</td>
                        <td style="text-align: right; font-weight: bold;">{{$viewData['namaDebitur']}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Kepala Kantor Pusat Operasional</td>
                        <td style="text-align: right;">Debitur</td>
                    </tr>
                </table>

                <div class="col-md-12 mt-3">
                    <p style="text-align: center;">“Perjanjian ini telah disesuaikan dengan ketentuan peraturan perundang-undangan termasuk ketentuan peraturan Otoritas Jasa Keuangan.”</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
