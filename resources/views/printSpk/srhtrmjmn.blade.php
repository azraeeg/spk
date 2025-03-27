@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header"></div>
        <div class="card-body">
            
            <!-- Header -->
            <div class="text-center">
                <h3>BPR NUSAMBA CEPIRING</h3>
                <hr style="border: 1px solid black;">
                <h4>Surat Tanda Terima Jaminan</h4>
            </div>

            <!-- Nomor Surat -->
            <div class="text-right mt-3">
                <h2><strong>51497</strong></h2>
            </div>

            <!-- Data Penerima -->
            <div class="mt-3">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px;"><strong>Telah terima dari</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>Nama</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;"><strong>AGUS SETIAWAN</strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>Alamat</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;">SEMBUNG 13/02, CEPIRING, KENDAL</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>No Rekening</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;">10.51497.1</td>
                    </tr>
                </table>
            </div>

            <!-- Keterangan Jaminan -->
            <div class="mt-3">
                <p>Untuk keperluan, menerangkan bahwa sehubungan dengan akad kredit pada BPR NUSAMBA CEPIRING, 
                    orang tersebut di atas menyerahkan jaminan berupa :</p>
            </div>

            <!-- Daftar Jaminan -->
            <div>
                <ul>
                    <li>Sebidang Tanah DAN BANGUNAN, terletak di GONDANG 001/005 CEPIRING KENDAL, luas tanah (m²)
                        425, SHM / HGB / NIB No.00886, atas nama AGUS SETIAWAN, Jaminan milik SENDIRI.</li>
                    <li>Kendaraan roda 2, Merk / Tahun: HONDA / 2024, Type: SPM, BPKB Nomor: J-989898989898, 
                        Nomor Polisi: H-1234-GL, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI.</li>
                    <li>Kendaraan roda 4, Merk / Tahun: Toyota / Yaris, Type: MPNP, BPKB Nomor: G-99898989, 
                        Nomor Polisi: H-5645-HB, Atas Nama: AGUS SETIAWAN, Jaminan Milik: SENDIRI.</li>
                    <li>Bilyet Nomor: 0, Rekening Nomor: 12344555, Atas Nama: AGUS SETIAWAN.</li>
                    <li>Bilyet Nomor: 9897878787, Rekening Nomor: 7676767676, Atas Nama: AGUS SETIAWAN.</li>
                </ul>
            </div>

            <!-- Informasi Kredit -->
            <div class="mt-3">
                <p>Barang tersebut di atas sebagai jaminan atas kredit sebesar Rp. 100,000,000, 
                    dengan jangka waktu 60 bulan dan suku bunga 11.4%.</p>
            </div>

            <!-- Tanggal -->
            <div class="mt-3">
                <p>26 Maret 2025</p>
            </div>

            <!-- Tanda Tangan -->
            <div class="mt-4">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="text-align: center; font-weight: bold;">Yang Menyerahkan</td>
                        <td style="text-align: center; font-weight: bold;">Yang Menerima</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 50px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-weight: bold;">AGUS SETIAWAN</td>
                        <td style="text-align: center; font-weight: bold;">LINDA SETYANTI</td>
                        <td style="text-align: center; font-weight: bold;">ROSA WIDYA</td>
                    </tr>
                </table>
            </div>

            <!-- Arsip, Mengetahui, Memeriksa -->
            <div class="mt-4">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="text-align: center; font-weight: bold;">Yang Mengarsip</td>
                        <td style="text-align: center; font-weight: bold;">Mengetahui</td>
                        <td style="text-align: center; font-weight: bold;">Memeriksa</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="height: 50px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">------------------------</td>
                        <td style="text-align: center;">------------------------</td>
                        <td style="text-align: center;">--------------------------------</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
