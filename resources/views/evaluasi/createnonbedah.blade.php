@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">

            </div>
            <form method="POST" action="{{ route('admin.nonbedah.store') }}">
                @csrf
            <div class="card-body">
                <div class="row p-3 mb-2">

                    <div class="col-md-12">
                        <center>
                        PENILAIAN KINERJA DOKTER RSPM<br>
                        SMF NON BEDAH<br>
                        BULAN : <form>
                            <input type="text" class="form-control" name="Bulan">
                        </form>
                        </center>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama DPJP :</label>
                            <select class="form-control select2" style="width: 100%;" name="Nopeg">
                                @foreach($pegawai as $pegawaiNopeg)
                                    <option value="{{ $pegawaiNopeg->Nopeg }}">{{ $pegawaiNopeg->Nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
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
                                    <td> <input type="text" class="form-control" name="Hasil1"></td>
                                </tr>
                                <tr>
                                    <td>2. Response time Gawat Darurat < 5 menit</td>
                                    <td>100%</td>
                                    <td> <input type="text" class="form-control" name="Hasil2"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >2</td>
                                    <td colspan="3"><strong>Pengetahuan Medis / Klinik (Medical Clinical Knowledge) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Dokter mengikuti diklat minimal 20 jam per tahun</td>
                                    <td>>20 jam</td>
                                    <td> <input type="text" class="form-control" name="Hasil3"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >3</td>
                                    <td colspan="3"><strong>Pembelajaran dan Perbaikan Berbasis Praktik (Practice base learning improvement) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1. Tulisan resep terbaca jelas</td>
                                    <td>97 %</td>
                                    <td> <input type="text" class="form-control" name="Hasil4"></td>
                                </tr>
                                <tr>
                                    <td rowspan="3" style="padding: 8px; text-align:center;" >4</td>
                                    <td colspan="3"><strong>Keterampilan Interpersonal dan Komunikasi (Interpersonal and Skill Communication) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Menerima komplain dari pasien atau keluarga pasien</td>
                                    <td>2 (dua) kali</td>
                                    <td> <input type="text" class="form-control" name="Hasil5"></td>
                                </tr>
                                <tr>
                                    <td>2.	Menerima komplain dari teman sejawat perawat / staf</td>
                                    <td>2 (dua) kali</td>
                                    <td> <input type="text" class="form-control" name="Hasil6"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >5</td>
                                    <td colspan="3"><strong>Praktek berbasis sistem (System Base Practice) :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Resume Medik terbaca, lengkap, dan tepat waktu (Nama, Tanda Tangan, Tanggal dan Jam jelas)</td>
                                    <td>97%</td>
                                    <td> <input type="text" class="form-control" name="Hasil7"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >6</td>
                                    <td colspan="3"><strong>Profesionalisme :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Tidak menghadiri rapat tim medis</td>
                                    <td>2 (dua) kali</td>
                                    <td> <input type="text" class="form-control" name="Hasil8"></td>
                                </tr>
                                <tr>
                                    <td rowspan="2" style="padding: 8px; text-align:center;" >7</td>
                                    <td colspan="3"><strong>Keaktifan :</strong></td>
                                </tr>
                                <tr>
                                    <td>1.	Menghadiri pengajian rutin bulanan</td>
                                    <td>2 (dua) kali</td>
                                    <td> <input type="text" class="form-control" name="Hasil9"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-2">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-right" colspan="2">Semarang, <input type="date" class="form-control" name="Tanggal"></td>
                                </tr>
                                <tr>
                                    <td>Seksi Pelayanan Medis</td>
                                    <td class="text-right">Staff Medis Yang Dinilai</td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td class="text-right"> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control select2" style="width: 100%;" name="Penilai">
                                            @foreach($penilai as $penilai)
                                                <option>{{ $penilai->Nama }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="text-right">
                                        <select class="form-control select2" style="width: 100%;" name="DPJP">
                                            @foreach($ternilai as $ternilai)
                                                <option>{{ $ternilai->Nama }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
          format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })


  </script>
@endsection
