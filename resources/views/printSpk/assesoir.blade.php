@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <a href="{{ route('admin.pdf.assesoir1', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h2><strong>SURAT KUASA</strong></h2>
                    <hr style="border: 1px solid black;">
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
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
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">: {{$noKtpDeb}}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p>Pemegang Tabungan Nomor Rekening: <strong>{{$noRekTab}}</strong>. Pada PT. Bank Perekonomian Rakyat Nusamba Cepiring, dengan ini memberi kuasa kepada:</p>
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
                        nomor rekening kredit <strong>{{$noRekKred}}</strong> atas nama <strong>{{$namaDebitur}}</strong> 
                        apabila sampai waktu yang ditentukan saya tidak membayar kewajiban saya tersebut.</p>
                    <p>Kuasa ini tidak akan saya cabut sampai dengan kredit atas nama saya telah dinyatakan lunas.</p>
                    <p>Demikian Surat Kuasa ini dibuat untuk keperluan tersebut di atas dan mulai berlaku 
                        sejak saat ditandatangani oleh pemberi kuasa.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px; text-align: right;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
                            
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
                        <td style="text-align: left; font-weight: bold;">{{$namaKacab}}</td>
                        <td style="text-align: right; font-weight: bold;">{{$namaDebitur}}</td>
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
</div>

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <a href="{{ route('admin.pdf.assesoir2', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h2><strong>SURAT PERNYATAAN</strong></h2>
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
                            <td style="padding: 5px;">{{ $namaDebitur }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $alamatDeb }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $noKtpDeb }}</td>
                        </tr>

                        <!-- Orang ke-2 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>2.</strong></td>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $namaIstri }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $alamatIstri }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $noKtpIstri }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 mt-3">
                    <p>Selanjutnya disebut sebagai saya/kami.</p>
                    <p>Berkaitan dengan pembuatan perjanjian kredit antara saya/kami dengan 
                        PT. Bank Perekonomian Rakyat Nusamba Cepiring yang tertuang dalam Perjanjian Kredit 
                        Nomor <strong>{{$noSpk}}</strong> tanggal <strong>{{$tglDroping}}</strong>, 
                        saya/kami menyatakan hal-hal sebagai berikut:</p>
                    <ul>
                        <li>Atas Perjanjian tersebut telah dibacakan dan dijelaskan isi dan maksud 
                            dibuatnya Perjanjian Kredit kepada saya/kami.</li>
                        <li>Saya/kami telah dijelaskan manfaat dan risiko yang dapat terjadi dari dibuatnya Perjanjian Kredit.</li>
                        <li>Saya/kami telah diberikan kesempatan dan waktu yang cukup untuk mempelajari dan memahami 
                            Perjanjian Kredit tersebut.</li>
                        <li>Saya/kami sepenuhnya paham dan mengerti serta tidak ada kekhilafan apa pun atas apa yang 
                            dibacakan dan dijelaskan isi dan maksud dibuatnya Perjanjian Kredit serta manfaat dan 
                            risiko yang mungkin terjadi.</li>
                        <li>Setelah saya/kami memahami dan mengerti maka saya/kami dengan penuh kesadaran tanpa paksaan 
                            serta dalam keadaan sehat walafiat, bersedia menandatangani Perjanjian Kredit tersebut.</li>
                    </ul>
                    <p>Demikian surat pernyataan ini saya/kami buat sebagai bukti bahwa Perjanjian Kredit yang 
                        ditandatangani dengan PT. Bank Perekonomian Rakyat Nusamba Cepiring adalah benar dan sah menurut 
                        ketentuan perundang-undangan.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px; text-align: left;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
                        </tr>
                    </table>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: left; padding: 10px; font-weight: bold;">Yang Menyatakan,</td>
                    </tr>
                    <tr>
                        <td style="height: 80px; text-align: left;">{Materai}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            {{$namaDebitur}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$namaIstri}}
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

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <a href="{{ route('admin.pdf.assesoir3', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
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
                            <td style="padding: 5px;">{{ $namaDebitur }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $alamatDeb }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $noKtpDeb }}</td>
                        </tr>

                        <!-- Orang ke-2 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>2.</strong></td>
                            <td style="padding: 5px;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $namaIstri }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>Alamat</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $alamatIstri }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{ $noKtpIstri }}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p>Selanjutnya disebut sebagai saya/kami.</p>
                    <p>Berkaitan dengan pembuatan perjanjian kredit antara saya/kami dengan 
                        PT. Bank Perekonomian Rakyat Nusamba Cepiring yang tertuang dalam 
                        Perjanjian Kredit Nomor <strong>{{$noSpk}}</strong>, 
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
                            <td style="padding: 5px; text-align: left;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
                        </tr>
                    </table>
                </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: left; padding: 10px; font-weight: bold;">Yang Menyatakan,</td>
                    </tr>
                    <tr>
                        <td style="height: 80px; text-align: left;">{Materai}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            {{$namaDebitur}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$namaIstri}}
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

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <a href="{{ route('admin.pdf.assesoir4', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h2><strong>SURAT PERNYATAAN</strong></h2>
                    <h4>KESEDIAAN UNTUK DILAKUKAN</h4>
                    <h4>SISTEM INFORMASI LAYANAN KEUANGAN (SLIK)/INFORMASI LAINYA</h4>
                    <hr style="border: 1px solid black;">
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <!-- Orang ke-1 -->
                        <tr>
                            <td style="padding: 5px; width: 5%; vertical-align: top;"><strong>1.</strong></td>
                            <td style="padding: 5px; width: 25%;"><strong>NAMA</strong></td>
                            <td style="padding: 5px; width: 2%;">:</td>
                            <td style="padding: 5px;">{{$namaDebitur}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$alamatDeb}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$pekerjaanDeb}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$noKtpDeb}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$namaIbuDebitur}}</td>
                        </tr>

                        <!-- Orang ke-2 -->
                        <tr>
                            <td style="padding: 5px; vertical-align: top;"><strong>2.</strong></td>
                            <td style="padding: 5px;"><strong>NAMA</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$namaIstri}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>ALAMAT</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$alamatIstri}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>PEKERJAAN</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$pekerjaanIstri}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NIK</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$noKtpIstri}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="padding: 5px;"><strong>NAMA IBU KANDUNG</strong></td>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;">{{$namaIbuIstri}}</td>
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
                            <td style="width: 50%; text-align: left; padding: 5px;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
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
                        <td style="width: 25%; text-align: center; font-weight: bold;">{{$namaDebitur}}</td>
                        <td style="width: 25%; text-align: center; font-weight: bold;">{{$namaIstri}}</td>
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

<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">  
            <a href="{{ route('admin.pdf.assesoir5', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
        </div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h2><strong>SURAT PERNYATAAN</strong></h2>
                    <hr style="border: 1px solid black;">
                </div>

                <div class="col-md-12">
                    <p><strong>Yang bertanda tangan di bawah ini:</strong></p>
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px; width: 30%;"><strong>Nama</strong></td>
                            <td style="padding: 5px;">: {{$namaDebitur}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Pekerjaan</strong></td>
                            <td style="padding: 5px;">: {{$pekerjaanDeb}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Alamat Rumah</strong></td>
                            <td style="padding: 5px;">: {{$alamatDeb}}</td>
                        </tr>
                    </table>

                    <br>

                    <p>
                        Dengan ini menyatakan dengan sebenarnya bahwa telah menerima kredit dari PT. 
                        Bank Perekonomian Rakyat Nusamba Cepiring sebesar 
                        <strong>Rp. {{ number_format($plafondKred, 0, ',', '.') }} ({{$plafondTerbilang}}) selama {{$jangkaWaktu}} bulan</strong>.
                    </p>

                    <p>Setelah dilakukan survey dari petugas PT. Bank Perekonomian Rakyat Nusamba Cepiring bahwa kredit tersebut:</p>

                    <ul>
                        <li>Bertujuan untuk <strong>{{$penggunaanKred}}</strong>.</li>
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
                            <td style="width: 50%; padding: 5px;">{{$kota}},{{ \Carbon\Carbon::parse($tglDroping)->translatedFormat('d F Y') }}</td>
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
                                {{$namaDebitur}}
                            </td>
                            <td style="width: 50%; text-align: right; padding: 10px; font-weight: bold;">
                                {{$namaIstri}}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
