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
                <h2><strong>{{$noCif}}</strong></h2>
            </div>

            <!-- Data Penerima -->
            <div class="mt-3">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 5px;"><strong>Telah terima dari</strong></td>
                        <td style="padding: 5px;"></td>
                        <td style="padding: 5px;"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>Nama</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;"><strong>{{$namaDebitur}}</strong></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>Alamat</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;">{{$alamatDeb}}</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;"><strong>No Rekening</strong></td>
                        <td style="padding: 5px;">:</td>
                        <td style="padding: 5px;">{{$noRekKred}}</td>
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
            @php $counter = 0; @endphp
                    @foreach ($jmnSertifikat as $index => $sertifikat)
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
                    @foreach($jmnbpkb as $index => $item)
                    <div class="col-md-12">
                        <p><strong>{{ chr(97 + $counter) }}. BPKB Kendaraan Roda Empat:</strong></p>
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
                    @foreach($jmnrekening as $item)
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

            <!-- Informasi Kredit -->
            <div class="mt-3">
                <p>Barang tersebut di atas sebagai jaminan atas kredit sebesar Rp. {{ number_format($plafondKred, 0, ',', '.') }} 
                    dengan jangka waktu {{$jangkaWaktu}} bulan dan suku bunga {{$bunga}}%.</p>
            </div>

            <!-- Tanggal -->
            <div class="mt-3">
                <p>{{$tglDroping}}</p>
            </div>

            <!-- Tanda Tangan -->
            <div class="mt-4">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="text-align: center; font-weight: bold;">Yang Menyerahkan</td>
                        <td style="text-align: center; font-weight: bold;"></td>
                        <td style="text-align: center; font-weight: bold;">Yang Menerima</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 50px;"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-weight: bold;">{{$namaDebitur}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$namaIstri}}</td>
                        <td style="text-align: center; font-weight: bold;">{{$admKredit}}</td>
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
