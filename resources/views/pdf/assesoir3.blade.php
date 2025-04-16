<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Surat-Persetujuan-{{ $viewData['namaDebitur'] }}</title>
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
                    <h2><strong>SURAT PERSETUJUAN</strong></h2>
                    <hr style="border: 1px solid black;">
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <!-- Orang ke-1 -->
                        <tr>
                            <td style="padding: 5px; width: 5%; vertical-align: top;"><strong>1.</strong></td>
                            <td style="padding: 5px; width: 15%;"><strong>Nama</strong></td>
                            <td style="padding: 5px; width: 2%;">:</td>
                            <td style="padding: 5px;">{{ $viewData['namaDebitur'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $viewData['alamatDeb'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $viewData['noKtpDeb'] }}</td>
                        </tr>

                        <!-- Orang ke-2 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>2.</strong></td>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $viewData['namaIstri'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $viewData['alamatIstri'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $viewData['noKtpIstri'] }}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p>Selanjutnya disebut sebagai saya/kami.</p>
                    <p>Berkaitan dengan pembuatan perjanjian kredit antara saya/kami dengan 
                        PT. Bank Perekonomian Rakyat Nusamba Cepiring yang tertuang dalam 
                        Perjanjian Kredit Nomor <strong>{{$viewData['noSpk']}}</strong>, 
                        saya/kami menyatakan hal-hal sebagai berikut:</p>
                    <ul>
                        <li>PT. Bank Perekonomian Rakyat Nusamba Cepiring wajib menjaga kerahasiaan data 
                            pribadi saya/kami sesuai ketentuan perundang-undangan.</li>
                        <li>Untuk kepentingan PT. Bank Perekonomian Rakyat Nusamba Cepiring kepada pihak lain.</li>
                        <li>Atas persetujuan yang saya/kami berikan tersebut, 
                            PT. Bank Perekonomian Rakyat Nusamba Cepiring telah memberikan 
                            penjelasan kepada saya/kami tentang konsekuensi dari persetujuan yang 
                            saya/kami berikan dan saya/kami telah memahami.</li>
                        <li>Apabila di kemudian hari saya/kami akan membatalkan persetujuan ini, 
                            maka saya/kami akan memberitahukan pembatalan dengan surat tertulis atau 
                            dengan media elektronik kepada PT. Bank Perekonomian Rakyat Nusamba Cepiring, 
                            dan mulai berlaku pencabutan tersebut sejak diterimanya surat pencabutan oleh 
                            PT. Bank Perekonomian Rakyat Nusamba Cepiring.</li>
                    </ul>
                    <p>Demikian surat persetujuan ini kami/saya buat dengan penuh kesadaran, tanpa kekhilafan, tanpa paksaan, dan dalam kesadaran sehat walafiat, sebagai bukti persetujuan data pribadi saya/kami diberikan kepada pihak lain untuk kepentingan PT. Bank Perekonomian Rakyat Nusamba Cepiring, dan saya/kami dalam rangka memenuhi ketentuan perundang-undangan.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="text-align: left;">{{$viewData['kota']}}, {{ \Carbon\Carbon::parse($viewData['tglDroping'])->translatedFormat('d F Y') }}</td>
                        </tr>
                    </table>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: left; padding: 10px; font-weight: bold;">Yang Menyatakan Persetujuan,</td>
                    </tr>
                    <tr>
                        <td style="height: 50px; text-align: left;">{Materai}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            {{$viewData['namaDebitur']}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$viewData['namaIstri']}}
                        </td>
                    </tr>
                </table>

                <div class="col-md-12 mt-3">
                    <p style="text-align: center;">“Perjanjian ini telah disesuaikan dengan ketentuan peraturan perundang-undangan termasuk ketentuan peraturan Otoritas Jasa Keuangan.”</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
