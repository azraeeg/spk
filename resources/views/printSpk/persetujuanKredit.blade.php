@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="row p-3 mb-2">
                <div class="col-md-12 text-center">
                    <h2>BPR NUSAMBA CEPIRING</h2>
                    <hr style="border: 1px solid black;">
                </div>
                <div class="col-md-12">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 5px;"></td>
                            <td style="padding: 5px; text-align: right;">Kendal,</td>
                            <td style="padding: 5px;">26 Maret 2025</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12">
                    <p><strong>Kepada Yth.</strong></p>
                    <p>Sdr : <strong>{{$namaDebitur}}</strong></p>
                    <p>Di <strong>{{$alamatDeb}}</strong></p>
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
                            <td style="padding: 5px;">: {{$sifatKred}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jenis Guna </strong></td>
                            <td style="padding: 5px;">: {{$jenisGuna}}</td>
                        </tr>
                        <!-- <tr>
                            <td style="padding: 5px;"><strong></strong></td>
                            <td style="padding: 5px;">: TAMBAH MODAL DAGANG HASIL BUMI</td>
                        </tr> -->
                        <tr>
                            <td style="padding: 5px;"><strong>Plafond</strong></td>
                            <td style="padding: 5px;">: Rp. {{ number_format($plafondKred, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Suku Bunga</strong></td>
                            <td style="padding: 5px;">: {{$bunga}}%</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jangka Waktu</strong></td>
                            <td style="padding: 5px;">: {{$jangkaWaktu}} bulan</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Pengikatan</strong></td>
                            <td style="padding: 5px;">: {{$pengikatanKred}}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;"><strong>Jaminan</strong></td>
                            <td style="padding: 5px;">: {{$pengikatanJaminan}}</td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12 mt-3">
                    <p><strong>Jaminan:</strong></p> 
                    <!-- NANTI DI FOREACH DARI DB JAMINAN SESUAI DENGAN noSpk yang jadi parameter -->
                    <ul>
                        <li>Sebidang Tanah DAN BANGUNAN, terletak di GONDANG 001/005 CEPIRING KENDAL, luas tanah (m²)
                            425, SHM / HGB / NIB No.00886, atas nama AGUS SETIAWAN, Jaminan milik SENDIRI.</li>
                        <li>Kendaraan roda 2, Merk / Tahun: HONDA / 2024, Type: SPM, BPKB Nomor: J-989898989898, Nomor
                            Polisi: H-1234-GL, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI.</li>
                        <li>Kendaraan roda 4, Merk / Tahun: Toyota / Yaris, Type: MPNP, BPKB Nomor: G-99898989, Nomor
                            Polisi: H-5645-HB, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI, TAKSASI Rp.
                            100,000,000 (Seratus Juta Rupiah).</li>
                        <li>Bilyet Nomor: 0, Rekening Nomor: 12344555, Atas Nama: AGUS SETIAWAN.</li>
                        <li>Bilyet Nomor: 9897878787, Rekening Nomor: 7676767676, Atas Nama: AGUS SETIAWAN.</li>
                    </ul>
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
                        <td style="text-align: center; font-weight: bold;">{{$namaKacab}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$namaDebitur}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$namaIstri}}</td>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
