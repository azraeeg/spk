@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row p-3 mb-2">

                    <div class="col-md-12">
                    <center> <h3> <strong>
                    PENILAIAN KINERJA DOKTER RSPM<br>
                    SMF NON BEDAH<br>
                    BULAN : {{$Bulan}}
                    </strong></h3></center>
                    </div>
                </div>
                <div class="row p-3 ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama DPJP : {{$DPJP}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>INDIKATOR</th>
                                    <th>STANDAR</th>
                                    <th>HASIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3" style="padding: 8px; text-align:center;">1</td>
                                    <td><strong>Perawatan Pasien (Patient Care) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Penulisan resep sesuai formularium</td>
                                    <td>100%</td>
                                    <td> {{$Hasil1}}</td>
                                </tr>
                                <tr>
                                    <td>2. Response time Gawat Darurat < 5 menit</td>
                                    <td>100%</td>
                                    <td> {{$Hasil2}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >2</td>
                                    <td colspan="3"><strong>Pengetahuan Medis / Klinik (Medical Clinical Knowledge) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Dokter mengikuti diklat minimal 20 jam per tahun</td>
                                    <td>>20 jam</td>
                                    <td> {{$Hasil3}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >3</td>
                                    <td colspan="3"><strong>Pembelajaran dan Perbaikan Berbasis Praktik (Practice base learning improvement) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Tulisan resep terbaca jelas</td>
                                    <td>97 %</td>
                                    <td> {{$Hasil4}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" style="padding: 8px; text-align:center;" >4</td>
                                    <td colspan="3"><strong>Keterampilan Interpersonal dan Komunikasi (Interpersonal and Skill Communication) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Menerima komplain dari pasien atau keluarga pasien</td>
                                    <td>2 (dua) kali</td>
                                    <td> {{$Hasil5}}</td>
                                </tr>
                                <tr>
                                    <td>2.	Menerima komplain dari teman sejawat perawat / staf</td>
                                    <td>2 (dua) kali</td>
                                    <td> {{$Hasil6}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >5</td>
                                    <td colspan="3"><strong>Praktek berbasis sistem (System Base Practice) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Resume Medik terbaca, lengkap, dan tepat waktu (Nama, Tanda Tangan, Tanggal dan Jam jelas)</td>
                                    <td>97%</td>
                                    <td> {{$Hasil7}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >6</td>
                                    <td colspan="3"><strong>Profesionalisme :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Tidak menghadiri rapat tim medis</td>
                                    <td>2 (dua) kali</td>
                                    <td>{{$Hasil8}}</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >7</td>
                                    <td colspan="3"><strong>Keaktifan :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Menghadiri pengajian rutin bulanan</td>
                                    <td>2 (dua) kali</td>
                                    <td> {{$Hasil9}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-2">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-right" colspan="2">Semarang,{{$Tanggal}}</td>
                                </tr>
                                <tr>
                                    <td>Seksi Pelayanan Medis</td>
                                    <td class="text-right">Staff Medis Yang Dinilai</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="profile-user-img img-fluid"
                                        src="{{ Storage::url('qrdokter/' . $Qrcode) }}">
                                    </td>

                                    <td class="text-right">
                                        <img class="profile-user-img img-fluid"
                                        src="{{ Storage::url('qrdokter/' . $Qrcode2) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td> {{$Penilai}} </td>
                                    <td class="text-right"> {{$DPJP}} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection
