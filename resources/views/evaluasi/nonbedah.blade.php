@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row p-3 mb-2">
                    <div class="col-md-12">
                        <center>
                        PENILAIAN KINERJA DOKTER RSPM<br>
                        SMF NON BEDAH<br>
                        BULAN : (read dari db)
                        </center>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama DPJP : read dari db</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
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
                                    <td>1. Penulisan resep sesuai formularium (read dari db)</td>
                                    <td>100%</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td>2. Response time Gawat Darurat < 5 menit(read dari db)</td>
                                    <td>100%</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >2</td>
                                    <td colspan="3"><strong>Pengetahuan Medis / Klinik (Medical Clinical Knowledge) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Dokter mengikuti diklat minimal 20 jam per tahun (read dari db)</td>
                                    <td>>20 jam</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >3</td>
                                    <td colspan="3"><strong>Pembelajaran dan Perbaikan Berbasis Praktik (Practice base learning improvement) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Tulisan resep terbaca jelas (read dari db)</td>
                                    <td>97 %</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" style="padding: 8px; text-align:center;" >4</td>
                                    <td colspan="3"><strong>Keterampilan Interpersonal dan Komunikasi (Interpersonal and Skill Communication) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Menerima komplain dari pasien atau keluarga pasien (read dari db)</td>
                                    <td>2 (dua) kali</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td>2.	Menerima komplain dari teman sejawat perawat / staf (read dari db)</td>
                                    <td>2 (dua) kali</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >5</td>
                                    <td colspan="3"><strong>Praktek berbasis sistem (System Base Practice) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Resume Medik terbaca, lengkap, dan tepat waktu (Nama, Tanda Tangan, Tanggal dan Jam jelas) (read dari db)</td>
                                    <td>97%</td>
                                    <td> read dari db</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >6</td>
                                    <td colspan="3"><strong>Profesionalisme :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Tidak menghadiri rapat tim medis (read dari db)</td>
                                    <td>2 (dua) kali</td>
                                    <td> read dari db</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-2">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-right" colspan="2">Semarang, 29 Janurai 1990(read tanggal dari db)</td>
                                </tr>
                                <tr>
                                    <td>Seksi Pelayanan Medis</td>
                                    <td class="text-right">Seksi Pelayanan Medis</td>
                                </tr>
                                <tr>
                                    <td> (untuk read ttd/barcode) ttd1</td>
                                    <td class="text-right">(untuk read ttd/barcode) ttd1</td>
                                </tr>
                                <tr>
                                    <td>read nama dari database</td>
                                    <td class="text-right">read nama dari database</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
