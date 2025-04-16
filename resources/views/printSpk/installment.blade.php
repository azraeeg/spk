@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
            <a href="{{ route('admin.pdf.installment', ['noSpk' => $noSpk]) }}?export=pdf" class="btn btn-danger">
                Cetak PDF
            </a>
            </div>
            <div class="card-body">
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                            <h3>PT. BANK PEREKONOMIAN RAKYAT NUSAMBA CEPIRING</h3>
                            <hr style=" margin: auto;border: 1px solid black;">
                        </div>

                        <div class="col-md-12 text-center">
                            <h3><strong>PERJANJIAN KREDIT</strong></h3>
                            <hr style="width: 200px; margin: auto;border: 1px solid black;">
                        </div>

                        <div class="col-md-12 text-center">
                            <p><strong>Nomor : {{$noSpk}}</strong></p>
                        </div>
                    </div>
                    <div class="row p-3 mb-2">
                        <div class="col-md-12">
                            <p><strong>Yang bertanda tangan di bawah ini :</strong></p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <strong>1. {{$namaKacab}}</strong> dalam hal ini bertindak dalam jabatannya selaku Kepala {{$kantorCabang}} 
                                PT. Bank Perekonomian Rakyat Nusamba Cepiring, 
                                berdasarkan Surat Kuasa Direksi dibuat dihadapan (nama notaris) Magister Kenotariatan 
                                Notaris di (tempat notaris) tertanggal {{$tglSkKacab}} nomor {{$noSkKacab}}. 
                                Bertindak untuk dan atas nama serta sah mewakili 
                                Direksi Perseroan Terbatas Bank Perekonomian Rakyat Nusamba Cepiring 
                                yang berkantor di Jalan Raya Gondang No 30, Cepiring, Kendal, 
                                selanjutnya dalam PERJANJIAN kredit ini disebut <strong>BANK</strong>.
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                <strong>2. {{$namaDebitur}},</strong> umur {{$umur}} tahun, pekerjaan {{$pekerjaanDeb}}, 
                                bertempat tinggal di {{$alamatDeb}} 
                                pemegang Kartu Tanda Penduduk Nomor {{$noKtpDeb}} 
                                selanjutnya disebut <strong>PEMINJAM</strong>, 
                                yang mana dalam melakukan tindakan hukumnya telah mendapat persetujuan 
                                dari ISTRI DEBITUR yang bernama <strong>{{$namaIstri}}</strong>, 
                                pemegang Kartu Penduduk Nomor {{$noKtpIstri}} 
                                yang turut serta membubuhkan tanda tangan dalam PERJANJIAN kredit ini.
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                Dalam PERJANJIAN kredit ini <strong>BANK</strong>, 
                                <strong>PEMINJAM</strong>, dan/atau <strong>PENJAMIN</strong> 
                                dapat juga disebut sebagai <strong>PARA PIHAK</strong>.
                            </p>
                        </div>

                        <div class="col-md-12">
                            <p>
                                Bahwa <strong>PEMINJAM</strong> telah mengajukan permohonan pinjam uang 
                                secara tertulis kepada <strong>BANK</strong> tanggal {{$tglPermohonan}}, 
                                dan <strong>BANK</strong> telah memberi persetujuan secara tertulis pada tanggal 
                                {{$tglPersetujuan}}, dengan ketentuan pokok yang telah disetujui <strong>PEMINJAM</strong>. 
                                Selanjutnya ketentuan pokok tersebut akan diuraikan lebih lanjut di dalam PERJANJIAN kredit ini 
                                dengan syarat-syarat dan ketentuan sebagai berikut :
                            </p>
                        </div>
                    </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 1</strong></h4>
                        <h5><strong>FASILITAS KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p>
                            BANK setuju untuk memberi fasilitas kredit dalam bentuk uang kepada <strong>PEMINJAM</strong> dan 
                            <strong>PEMINJAM</strong> setuju menerima fasilitas kredit sejumlah
                            Rp. {{ number_format($plafondKred, 0, ',', '.') }}
                            ({{ ucfirst($plafondTerbilang) }} rupiah) tidak termasuk bunga, provisi, dan 
                            biaya-biaya lainnya. Uang hasil pencairan kredit masuk tabungan dengan nomor rekening 
                            {{$noRekTab}} atas nama <strong>{{$namaDebitur}}</strong> 
                            selanjutnya dapat ditarik secara tunai.
                        </p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 2</strong></h4>
                        <h5><strong>JANGKA WAKTU KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Para pihak setuju bahwa Penjanjian Kredit ini berlaku 
                        {{$jangkaWaktu}} {{($jangkaWaktuTerbilang)}} bulan berlaku sejak tanggal {{$tglDroping}} 
                        dan akan berakhir serta harus dibayar lunas selambat-lambatnya pada tanggal 
                        {{$tglJatuhTempo}}.</p>
                        
                        <p><strong>(2)</strong> Jangka waktu kredit tersebut dalam ayat <strong>(1)</strong> 
                        pasal ini dapat diperpanjang jika memenuhi syarat-syarat serta ketentuan-ketentuan yang akan ditetapkan
                        oleh <strong>BANK</strong>, diajukan secara tertulis oleh <strong>PEMINJAM</strong> kepada 
                        <strong>BANK</strong> dan disepakati para pihak.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 3</strong></h4>
                        <h5><strong>BUNGA, PROVISI, dan BIAYA</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>PEMINJAM</strong> setuju penerimaan fasilitas kredit tersebut harus dibayar:</p>
                        
                        <p><strong>(1)</strong> Biaya bunga sebesar {{$bunga}}% ({{$bungaTerbilang}} persen) per tahun hingga fasilitas kredit tersebut lunas.</p>
                        
                        <p><strong>(2)</strong> Biaya provisi sebesar {{$provisi}}% ({{$provisiTerbilang}} persen) dari pokok pinjaman, 
                        yaitu sebesar Rp. {{ number_format($nilaiProvisi, 0, ',', '.') }} ({{$nilaiProvisiTerbilang}} rupiah) yang harus dibayar saat pencairan kredit.</p>
                        
                        <p><strong>(3)</strong> Biaya administrasi kredit sebesar Rp. {{ number_format($adm, 0, ',', '.') }} ({{$admTerbilang}} rupiah) yang harus dibayar saat pencairan kredit.</p>
                        
                        <p><strong>(4)</strong> Segala biaya yang timbul dari akibat perjanjian kredit ini antara lain namun tidak terbatas pada biaya Notaris, biaya Pemasangan Hak Tanggungan, biaya materai, biaya asuransi, biaya perkara di Pengadilan, biaya roya, biaya KPKNL (Kantor Pelayanan Kekayaan Negara dan Lelang), biaya Pengacara, semuanya menjadi tanggungan pihak <strong>PEMINJAM</strong>.</p>
                        
                        <p><strong>(5)</strong> Seluruh biaya dimaksud dalam ayat <strong>(4)</strong> di atas menjadi beban dan harus dibayar oleh <strong>PEMINJAM</strong>. Apabila ada biaya yang terlebih dahulu dibayarkan <strong>BANK</strong>, yang menjadi kewajiban <strong>PEMINJAM</strong>, maka dengan ini <strong>BANK</strong> diberi kuasa oleh <strong>PEMINJAM</strong> untuk mengambil penggantian jumlah-jumlah biaya tersebut dari rekening <strong>PEMINJAM</strong> yang ada pada <strong>BANK</strong> dan/atau ditambahkan dalam tagihan pembayaran/pelunasan.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 4</strong></h4>
                        <h5><strong>PEMBAYARAN ANGSURAN KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>PEMINJAM</strong> menyatakan sanggup membayar secara bulanan Fasilitas Kredit Installment dengan angsuran pokok dan bunga kredit yang besarnya 
                        Rp. {{ number_format($cicilanBulanan, 0, ',', '.') }} ({{$cicilanBulananTerbilang}} rupiah) yang disepakati para pihak hingga lunas.</p>

                        <p><strong>(2)</strong> Dalam hal pembayaran dilakukan melalui rekening <strong>PEMINJAM</strong> di <strong>BANK</strong>, maka dengan ini <strong>PEMINJAM</strong> memberi kuasa kepada <strong>BANK</strong> untuk mendebet rekening <strong>PEMINJAM</strong> dengan nomor rekening {{{$noRekTab}}} guna pembayaran/pelunasan kewajiban <strong>PEMINJAM</strong>.</p>

                        <p><strong>(3)</strong> Dalam hal tanggal jatuh tempo atau saat pembayaran angsuran tidak pada hari kerja <strong>BANK</strong>, maka <strong>PEMINJAM</strong> berjanji dan dengan ini mengikatkan diri untuk menyediakan dana atau melakukan pembayaran kepada <strong>BANK</strong> pada 1 (satu) hari kerja sebelumnya.</p>

                        <p><strong>(4)</strong> Setiap pembayaran kewajiban <strong>PEMINJAM</strong> kepada <strong>BANK</strong> dilakukan di Kantor BANK, atau melalui Rekening milik BANK.</p>

                        <p><strong>(5)</strong> <strong>PEMINJAM</strong> menyetujui bahwa pembukuan BANK selalu menjadi dasar untuk menetapkan jumlah hutang yang wajib dibayar oleh <strong>PEMINJAM</strong> kepada <strong>BANK</strong> berdasarkan Perjanjian Kredit ini, baik jumlah pokok, bunga, denda, provisi dan biaya-biaya lainnya dan <strong>PEMINJAM</strong> akan menerima baik perhitungan yang dibuat dan diberikan oleh <strong>BANK</strong> sebagaimana diuraikan di atas, dengan tanpa mengurangi hak <strong>PEMINJAM</strong> untuk membuktikan sebaliknya, dan apabila ada catatan <strong>BANK</strong> yang tidak benar, <strong>BANK</strong> akan melakukan pembetulan.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 5</strong></h4>
                        <h5><strong>DENDA KETERLAMBATAN PEMBAYARAN</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Apabila <strong>PEMINJAM</strong> terlambat membayar angsuran kredit sesuai kesepakatan di atas, 
                        <strong>PEMINJAM</strong> bersedia membayar denda keterlambatan angsuran kredit sebesar 
                        {{$denda}}% ({{$dendaTerbilang}} persen) setiap bulan dari seluruh kewajiban.</p>
                        
                        <p><strong>(2)</strong> Apabila dalam tenggang waktu berlakunya <strong>PERJANJIAN</strong> kredit, 
                        <strong>PEMINJAM</strong> tidak dapat melaksanakan kewajibannya tepat waktu dan/atau belum melunasi
                         hutang pokok dan bunga pada saat jatuh tempo kredit berdasarkan <strong>PERJANJIAN</strong> ini, 
                         maka <strong>BANK</strong> berhak menghitung dan menetapkan denda (Penalty overdue) 
                         sebesar {{$denda}}% ({{$dendaTerbilang}} persen) setiap bulan dari seluruh kewajiban 
                         <strong>PEMINJAM</strong> yang tertunggak.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 6</strong></h4>
                        <h5><strong>AGUNAN KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <strong>(1)</strong> Untuk menjamin pembayaran kembali seluruh hutang dan kewajiban <strong>PEMINJAM</strong> secara tertib berdasarkan <strong>PERJANJIAN KREDIT</strong> ini, baik hutang pokok, bunga, denda, dan kewajiban lainnya yang terhutang, <strong>PEMINJAM</strong> sepakat untuk memberikan agunan berupa:
                        </p>
                    </div>
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
                    <div class="col-md-12">
                        <p>
                            <strong>(2)</strong> Asli bukti kepemilikan barang-barang agunan sebagaimana disebut pada <strong>Ayat 1</strong> ini harus diserahkan dan akta-akta pengikatan agunan yang berkaitan dengan barang-barang agunan tersebut harus sudah ditandatangani <strong>PEMINJAM</strong>/pemegang hak dan <strong>BANK</strong> serta diterima oleh <strong>BANK</strong> sebelum dilakukan pencairan pinjaman.
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <strong>(3)</strong> Setelah kredit dinyatakan lunas oleh <strong>BANK</strong> atau berdasarkan pertimbangan <strong>BANK</strong> barang-barang agunan pada <strong>Ayat 1</strong> ini sudah tidak diperlukan lagi sebagai agunan kredit, <strong>BANK</strong> wajib mengembalikan bukti-bukti kepemilikan barang agunan tersebut kepada pemilik atau ahli warisnya yang sah, penjamin, atau debitur.
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <strong>(4)</strong> Bilamana barang agunan pada <strong>Ayat 2</strong> di atas hilang, musnah, berkurang nilainya baik sebagian maupun seluruhnya, atau karena suatu hal berakhir penguasaannya atau setelah berlakunya perjanjian ini dinyatakan tidak sah kepemilikannya oleh pihak yang berwenang, maka berdasarkan <strong>Pasal 1131 KUH PERDATA</strong>, <strong>PEMINJAM</strong> berkewajiban dan bersedia mengganti dengan barang agunan apapun lainnya yang nilainya oleh <strong>BANK</strong> dianggap cukup untuk melunasi hutang dan seluruh kewajiban <strong>PEMINJAM</strong> terhadap <strong>BANK</strong>.
                        </p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 7</strong></h4>
                        <h5><strong>PENGALIHAN BARANG AGUNAN</strong></h5>
                    </div>
                    <div class="col-md-12">
                        <p>
                            Selama berlangsungnya <strong>PERJANJIAN KREDIT</strong> ini, <strong>PEMINJAM</strong> dilarang menjual, menyewakan, memindahtangankan, mengalihkan hak dan/atau menjaminkan kepada pihak lain serta merubah bentuk dan/atau kondisi agunan kreditnya tanpa persetujuan tertulis dari <strong>BANK</strong>.
                        </p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 8</strong></h4>
                        <h5><strong>ITIKAD BAIK PARA PIHAK</strong></h5>
                    </div>
                    <div class="col-md-12">
                        <p>
                            <strong>PEMINJAM</strong> dan <strong>BANK</strong> sepakat untuk menjalankan seluruh ketentuan dalam <strong>PERJANJIAN KREDIT</strong> ini dengan itikad baik, di antaranya namun tidak terbatas pada tidak melanggar ketentuan yang diatur dalam <strong>PERJANJIAN KREDIT</strong> ini maupun ketentuan perundangan lainnya serta menjalankan hak dan kewajiban yang timbul dalam <strong>PERJANJIAN KREDIT</strong> ini.
                        </p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 9</strong></h4>
                        <h5><strong>ITIKAD TIDAK BAIK DAN KEADAAN INGKAR JANJI PEMINJAM</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p>
                            <strong>(1)</strong> <strong>PEMINJAM</strong> menyatakan semua data dan informasi yang diberikannya pada <strong>BANK</strong> adalah benar dan <strong>PEMINJAM</strong> berjanji untuk melaksanakan semua kewajibannya pada <strong>PERJANJIAN KREDIT</strong> ini dengan baik. Namun, apabila ternyata:
                        </p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(2)</strong> <strong>PEMINJAM</strong> dalam keadaan ingkar janji apabila:</p>
                        <ul>
                            <li><strong>a.</strong> <strong>PEMINJAM</strong> tidak membayar angsuran baik pokok dan/atau bunga selama 3 (tiga) bulan atau lebih;</li>
                            <li><strong>b.</strong> <strong>PEMINJAM</strong> tidak bisa melunasi seluruh pinjamannya tepat pada waktunya, kecuali dalam keadaan <strong>force majeure</strong> (disebabkan karena bencana alam seperti gempa bumi, kebanjiran, tanah longsor, kebakaran). Apabila terjadi keadaan <strong>force majeure</strong>, maka para pihak akan melakukan kesepakatan untuk menyelesaikan permasalahan yang dihadapi;</li>
                            <li><strong>c.</strong> <strong>PEMINJAM</strong> melanggar dan/atau tidak melaksanakan kewajiban yang disyaratkan dalam <strong>PERJANJIAN KREDIT</strong> ini;</li>
                            <li><strong>d.</strong> Data dan informasi mengenai <strong>PEMINJAM</strong>, usahanya, dan agunan yang diserahkan pada <strong>BANK</strong> ternyata tidak benar, tidak sesuai keadaan sebenarnya, dipalsukan, dan/atau direkayasa secara melawan hukum;</li>
                            <li><strong>e.</strong> <strong>PEMINJAM</strong> mengalihkan barang agunan kredit tanpa persetujuan <strong>BANK</strong> yang merupakan tindakan dengan itikad tidak baik;</li>
                            <li><strong>f.</strong> <strong>PEMINJAM</strong> menyerahkan agunan yang bersumber dari tindakan kejahatan yang diketahui di kemudian hari;</li>
                            <li><strong>g.</strong> Apabila karena sesuatu sebab, sebagian atau seluruh <strong>AKTA JAMINAN</strong> dinyatakan batal atau dibatalkan berdasarkan putusan pengadilan atau badan arbitrase;</li>
                            <li><strong>h.</strong> Apabila <strong>PEMINJAM</strong> tidak beriktikad baik dan/atau dalam keadaan ingkar janji, <strong>BANK</strong> berhak untuk menuntut/menagih pembayaran dari <strong>PEMINJAM</strong> atau siapa pun juga yang memperoleh hak darinya, atas sebagian atau seluruh pembayaran/kewajiban <strong>PEMINJAM</strong> kepada <strong>BANK</strong> berdasarkan <strong>PERJANJIAN</strong> ini, untuk dibayar dengan seketika dan sekaligus, tanpa diperlukan adanya surat pemberitahuan, surat teguran, atau surat lainnya.</li>
                        </ul>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 10</strong></h4>
                        <h5><strong>AKIBAT ITIKAD TIDAK BAIK/ INGKAR JANJI</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Bila <strong>PEMINJAM</strong> tidak beritikad baik dan/ atau dalam 
                        keadaan ingkar janji maka <strong>PEMINJAM</strong> setuju bahwa <strong>BANK</strong> 
                        dilindungi oleh hukum dan berhak untuk melakukan tindakan hukum yang diperlukan sesuai 
                        ketentuan perundangan yang berlaku, baik yang diatur dalam perjanjian ini, 
                        maupun yang diatur oleh undang-undang terkait jaminan/agunan dan/ atau peraturan lainnya.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(2)</strong> Bila <strong>PEMINJAM</strong> tidak beritikad baik dan/ atau dalam 
                        keadaan ingkar janji maka <strong>PEMINJAM</strong> setuju bahwa <strong>BANK</strong> 
                        berhak melakukan pemasangan papan pemberitahuan pada <strong>Agunan</strong>/di depan rumah 
                        dan/atau tanah agunan dengan tulisan: <strong>‘RUMAH DAN/ATAU TANAH INI DI JAMINKAN di PT. Bank Perekonomian Rakyat Nusamba Cepiring.’</strong> 
                        Bila <strong>PEMINJAM</strong> melakukan tindakan melepas papan pemberitahuan tersebut, 
                        <strong>PEMINJAM</strong> dianggap tidak beritikad baik dan <strong>BANK</strong> 
                        berhak melakukan pemasangan ulang.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(3)</strong> Bila <strong>PEMINJAM</strong> tidak beritikad baik dan/ atau dalam 
                        keadaan ingkar janji, dalam hal <strong>BANK</strong> telah melakukan penagihan secara patut 
                        namun <strong>PEMINJAM</strong> tetap tidak beritikad baik, <strong>PEMINJAM</strong> menyetujui 
                        <strong>BANK</strong> berhak memberitahu kondisi pinjaman <strong>PEMINJAM</strong> secara patut 
                        kepada pihak lain semata-mata agar <strong>PEMINJAM</strong> beritikad baik mau bekerja sama dan 
                        menyelesaikan kewajiban kreditnya.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(4)</strong> Dalam hal <strong>PEMINJAM</strong> tidak beriktikad baik dan/atau dalam 
                        keadaan ingkar janji, <strong>BANK</strong> berhak melakukan teguran atau peringatan lisan ataupun 
                        tertulis kepada <strong>PEMINJAM</strong>, dan <strong>BANK</strong> berhak menyerahkan barang 
                        jaminan atau agunan tersebut dalam <strong>PASAL 6 PERJANJIAN</strong> ini, kepada lembaga yang 
                        berwenang untuk dilakukan penjualan dan atau pelelangan.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(5)</strong> Terhadap hasil penjualan jaminan atau agunan tersebut dalam <strong>ayat (4)</strong> 
                        pasal ini, <strong>BANK</strong> mempunyai kedudukan istimewa atau Hak Didahulukan (Privilege)
                        untuk mendapat pelunasan atas hutang pokok, bunga dan segala biaya yang timbul akibat dari adanya 
                        <strong>PERJANJIAN</strong> kredit ini. Adapun jumlahnya akan diperhitungkan dan ditetapkan 
                        bersama-sama antara <strong>BANK</strong> dengan <strong>PEMINJAM</strong>, 
                        apabila tidak tercapai kesepakatan maka <strong>PEMINJAM</strong> setuju ditetapkan sendiri 
                        oleh <strong>BANK</strong>, yang disertai dengan bukti-bukti yang dapat dipertanggungjawabkan. 
                        Adapun biaya-biaya dimaksud akan diambil dari hasil penjualan atau pelelangan jaminan atau agunan.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(6)</strong> Bila <strong>PEMINJAM</strong> tidak beritikad baik dan/ atau dalam 
                        keadaan ingkar janji, dalam hal <strong>BANK</strong> telah melakukan penagihan secara patut namun 
                        <strong>PEMINJAM</strong> tetap tidak beritikad baik, <strong>PEMINJAM</strong> menyetujui 
                        <strong>BANK</strong> dapat melakukan penagihan sewaktu-waktu semata-mata agar <strong>PEMINJAM</strong> 
                        beritikad baik mau bekerja sama dan menyelesaikan kewajiban kreditnya.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 11</strong></h4>
                        <h5><strong>PENGALIHAN PIUTANG</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>PEMINJAM</strong> menyetujui, <strong>BANK</strong> 
                        berhak tanpa persetujuan terlebih dahulu dari <strong>PEMINJAM</strong>, 
                        memindahkan atau mengalihkan dengan cara apapun sebagian atau seluruh hak dan/atau kewajiban
                        <strong>BANK</strong> yang melekat di fasilitas kredit berdasarkan <strong>PERJANJIAN KREDIT</strong> 
                        ini kepada Lembaga Keuangan, Bank atau Kreditor lainnya.</p>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(2)</strong> Untuk keperluan tersebut, <strong>PEMINJAM</strong> 
                        sekarang atau nanti pada waktunya, menyetujui dan memberi kuasa kepada <strong>BANK</strong> 
                        untuk memberikan data dan/atau keterangan yang diperlukan kepada Lembaga Keuangan, 
                        Bank dan/atau Kreditor lainnya.</p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 12</strong></h4>
                        <h5><strong>ASURANSI</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>PEMINJAM</strong> setuju untuk mengikuti 
                        asuransi jiwa kredit dan/atau asuransi kredit dan/atau asuransi kerugian 
                        dan/atau asuransi kebakaran dan/atau asuransi lainnya atas diri 
                        <strong>PEMINJAM</strong>, penjamin dan/atau agunan kredit yang diserahkannya pada <strong>BANK</strong> 
                        kepada perusahaan asuransi yang dapat dipercaya dan dipilih serta ditentukan sendiri oleh 
                        <strong>PEMINJAM</strong>. Biaya premi asuransi menjadi beban dan harus dibayar oleh 
                        <strong>PEMINJAM</strong>.</p>

                        <p><strong>(2)</strong> Apabila <strong>PEMINJAM</strong> mengikuti asuransi dari 
                        perusahaan asuransi yang belum mempunyai perjanjian kerja sama dengan <strong>BANK</strong>, 
                        maka <strong>PEMINJAM</strong> wajib memberikan asli Polis Asuransi kepada 
                        <strong>BANK</strong>, yang sudah diberi klausula bank (“Banker’s Clause”) yang menyatakan 
                        jika terjadi klaim hasil pembayaran klaim akan diberikan kepada <strong>BANK</strong>.</p>

                        <p><strong>(3)</strong> Ketentuan asuransi pada <strong>ayat (1)</strong> dilakukan minimal pada hari yang sama 
                        dengan penandatanganan <strong>PERJANJIAN KREDIT</strong> ini. Polis Asuransi
                        akan disatukan dengan dokumen kredit dan disimpan oleh <strong>BANK</strong>.</p>

                        <p><strong>(4)</strong> <strong>PEMINJAM</strong> mengetahui dan setuju bahwa penutupan asuransi apapun, 
                        pada polisnya akan dipasang syarat Banker’s Clause yaitu apabila ada pembayaran 
                        dari asuransi akan diterima terlebih dahulu oleh <strong>BANK</strong> untuk membayar jumlah seluruh hutang 
                        <strong>PEMINJAM</strong>. Jika terdapat kelebihan, akan dikembalikan kepada <strong>PEMINJAM</strong> 
                        atau ahli warisnya yang sah, dan apabila terjadi kekurangan, maka <strong>BANK</strong> berhak menagih 
                        kekurangannya kepada <strong>PEMINJAM</strong> atau ahli warisnya yang sah.</p>

                        <p><strong>(5)</strong> Apabila terjadi klaim asuransi dan pihak perusahaan asuransi tidak bersedia 
                        menutup klaim yang diajukan, <strong>BANK</strong> akan memfasilitasi dan membantu agar perusahaan 
                        asuransi bersedia membayar. Namun, jika terbukti bahwa klaim tidak dibayar karena kesalahan dari 
                        <strong>PEMINJAM</strong> di luar tanggung jawab <strong>BANK</strong>, maka <strong>PEMINJAM</strong> 
                        atau ahli warisnya yang sah tetap bertanggung jawab atas kewajiban pelunasan kreditnya.</p>

                        <p><strong>(6)</strong> Apabila tidak ada kesalahan dari <strong>PEMINJAM</strong> dan prosedur 
                        pengajuan klaim telah dilakukan sesuai ketentuan, namun pihak perusahaan asuransi tetap tidak 
                        melakukan pembayaran, <strong>PARA PIHAK</strong> sepakat untuk bersama-sama mengurus penyelesaian 
                        klaim asuransi sesuai prosedur dan ketentuan yang berlaku, tanpa menghilangkan kewajiban 
                        <strong>PEMINJAM</strong> atau ahli warisnya yang sah untuk tetap menyelesaikan kewajiban pelunasan kreditnya.</p>

                        <p><strong>(7)</strong> Apabila <strong>PEMINJAM</strong> memilih untuk tidak mengikuti asuransi dan 
                        <strong>BANK</strong> menyetujuinya, maka <strong>PEMINJAM</strong> harus menyatakan tidak mengikuti 
                        asuransi dalam surat tersendiri yang merupakan bagian tidak terpisahkan dari 
                        <strong>PERJANJIAN KREDIT</strong> ini. Segala risiko yang terjadi akan menjadi tanggungan 
                        <strong>PEMINJAM</strong> sendiri atau ahli warisnya yang sah.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 13</strong></h4>
                        <h5><strong>SURAT KUASA PENDEBETAN REKENING</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>PEMINJAM</strong> wajib menandatangani Surat Kuasa Pendebetan Tabungan 
                        atas nama <strong>PEMINJAM</strong> yang akan dibukakan rekeningnya bersamaan dengan penandatanganan 
                        <strong>PERJANJIAN KREDIT</strong> ini. Surat kuasa tersebut merupakan bagian yang tidak terpisahkan 
                        dari <strong>PERJANJIAN KREDIT</strong> ini.</p>

                        <p><strong>(2)</strong> Pendebetan rekening atas nama <strong>PEMINJAM</strong> akan dipergunakan untuk 
                        pembayaran seluruh kewajiban yang timbul dari <strong>PERJANJIAN KREDIT</strong> ini.</p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 14</strong></h4>
                        <h5><strong>PEMBERIAN MASA JEDA</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>BANK</strong> memberikan waktu 2 (dua) hari kerja sejak ditandatanganinya 
                        <strong>PERJANJIAN KREDIT</strong> ini kepada <strong>PEMINJAM</strong> untuk mempelajari kembali 
                        <strong>PERJANJIAN KREDIT</strong> yang telah ditandatangani. Setelah lewatnya waktu 2 (dua) hari kerja, 
                        <strong>PEMINJAM</strong> menyetujui melanjutkan <strong>PERJANJIAN KREDIT</strong> ini.</p>

                        <p><strong>(2)</strong> Apabila dalam masa waktu 2 (dua) hari kerja <strong>PEMINJAM</strong> 
                        memilih mengakhiri <strong>PERJANJIAN KREDIT</strong> ini, maka <strong>PEMINJAM</strong> wajib 
                        mengembalikan seluruh saldo pinjaman yang telah diterima ditambah sejumlah tertentu bunga pinjaman 
                        yang dihitung secara harian kepada <strong>BANK</strong>. Provisi dan administrasi
                        yang telah dibayarkan oleh <strong>PEMINJAM</strong> menjadi hak <strong>BANK</strong>.</p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 15</strong></h4>
                        <h5><strong>PENGGUNAAN DATA PRIBADI</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Seluruh data pribadi <strong>PEMINJAM</strong> yang telah diserahkan kepada 
                        <strong>BANK</strong>, akan ditatausahakan sesuai ketentuan perundangan yang berlaku tentang 
                        perlindungan data pribadi.</p>

                        <p><strong>(2)</strong> <strong>PEMINJAM</strong> menyatakan menyetujui, untuk keperluan 
                        <strong>BANK</strong>, data pribadi <strong>PEMINJAM</strong> dapat diberikan kepada 
                        <strong>pihak ketiga</strong>. Persetujuan ini dinyatakan pula dalam dokumen tersendiri 
                        yang merupakan lampiran dan bagian yang tidak terpisahkan dengan 
                        <strong>PERJANJIAN KREDIT</strong> ini.</p>

                        <p><strong>(3)</strong> Apabila <strong>PEMINJAM</strong> akan mencabut persetujuan penggunaan 
                        data pribadi oleh <strong>BANK</strong>, maka pencabutan tersebut harus 
                        dinyatakan dalam surat tertulis yang ditujukan kepada <strong>BANK</strong>. 
                        Pencabutan persetujuan tersebut berlaku sejak diterimanya surat pencabutan
                        tersebut oleh <strong>BANK</strong>.</p>
                    </div>
                </div>

                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 16</strong></h4>
                        <h5><strong>KUALITAS KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Sesuai ketentuan dalam Peraturan Otoritas Jasa Keuangan tentang 
                        Kualitas Aset Bank Perekonomian Rakyat, <strong>PEMINJAM</strong> wajib menjaga 
                        kualitas kredit selalu dalam keadaan lancar yang diberikan oleh <strong>BANK</strong>, 
                        maupun oleh Bank Perekonomian Rakyat lainnya.</p>

                        <p><strong>(2)</strong> Apabila terdapat keadaan kualitas kredit <strong>PEMINJAM</strong> 
                        di Bank Perekonomian Rakyat lain yang lebih rendah kualitasnya, <strong>PEMINJAM</strong> 
                        menyetujui kualitas kredit <strong>PEMINJAM</strong> disesuaikan dengan kualitas yang terendah.</p>

                        <p><strong>(3)</strong> Jika keadaan dalam <strong>ayat (2)</strong> tersebut terjadi pada 
                        kredit <strong>PEMINJAM</strong> yang mengakibatkan kualitas kredit menjadi Kurang Lancar, Diragukan, 
                        atau Macet, maka <strong>PEMINJAM</strong> memenuhi ketentuan sebagaimana diatur dalam 
                        <strong>PASAL 10 PERJANJIAN KREDIT</strong> ini.</p>

                        <p><strong>(4)</strong> Dengan terpenuhinya unsur wanprestasi oleh <strong>PEMINJAM</strong> 
                        pada salah satu <strong>PERJANJIAN KREDIT</strong>, <strong>PARA PIHAK</strong> sepakat bahwa unsur 
                        wanprestasi juga telah terpenuhi pada <strong>PERJANJIAN KREDIT</strong> lainnya. 
                        Oleh karena itu, <strong>BANK</strong> berhak melakukan upaya penyelesaian sesuai 
                        <strong>PASAL 10</strong> dalam <strong>PERJANJIAN KREDIT</strong> ini.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 17</strong></h4>
                        <h5><strong>PROSEDUR LAYANAN PENGADUAN</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p>Apabila dalam pelaksanaan perjanjian kredit ini di kemudian hari terjadi hal-hal yang merugikan 
                        <strong>PEMINJAM</strong>, maka untuk penyampaian dan penanganan pengaduan dapat diajukan 
                        secara lisan dan/atau tertulis melalui media surat atau elektronik kepada petugas pelayanan 
                        <strong>BANK</strong> di setiap jaringan kantor <strong>BANK</strong>.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 18</strong></h4>
                        <h5><strong>PENGAWASAN DAN PEMERIKSAAN</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>PEMINJAM</strong> berjanji dan dengan ini mengikatkan diri untuk memberikan izin kepada 
                        <strong>BANK</strong>, atau petugas yang ditunjuknya guna melaksanakan pengawasan/pemeriksaan 
                        terhadap barang maupun barang jaminan, serta pembukuan dan catatan-catatan pada setiap saat selama 
                        berlangsungnya <strong>PERJANJIAN</strong> ini. Kepada petugas <strong>BANK</strong> tersebut diberi hak untuk 
                        mengambil gambar (foto), membuat fotokopi, dan/atau catatan-catatan yang dianggap perlu.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 19</strong></h4>
                        <h5><strong>DOMISILI DAN PEMBERITAHUAN</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Alamat <strong>BANK</strong> dan <strong>PEMINJAM</strong> sebagaimana yang tercantum 
                        pada kalimat-kalimat awal <strong>PERJANJIAN</strong> ini merupakan alamat tetap dan tidak 
                        berubah bagi masing-masing pihak yang bersangkutan, dan ke alamat-alamat itu pula secara sah 
                        segala surat menyurat atau komunikasi di antara kedua pihak akan dilakukan;</p>
                        
                        <p><strong>(2)</strong> Apabila dalam pelaksanaan <strong>PERJANJIAN</strong> ini terjadi perubahan alamat, 
                        maka pihak yang berubah alamatnya tersebut wajib memberitahukan kepada pihak lainnya alamat 
                        barunya dengan surat tercatat atau surat tertulis yang disertai tanda bukti penerimaan dari 
                        pihak lainnya;</p>
                        
                        <p><strong>(3)</strong> Selama tidak ada pemberitahuan tentang perubahan alamat sebagaimana dimaksud pada 
                        <strong>ayat (2)</strong> pasal ini, maka surat menyurat atau komunikasi yang dilakukan 
                        ke alamat yang tercantum pada awal <strong>PERJANJIAN</strong> dianggap sah menurut hukum.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 20</strong></h4>
                        <h5><strong>PENYELESAIAN SENGKETA</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Apabila terjadi sengketa antara <strong>PEMINJAM</strong> dengan <strong>BANK</strong> 
                        terhadap pelaksanaan perjanjian kredit ini, para pihak sepakat untuk mengutamakan upaya 
                        penyelesaian sengketa dengan musyawarah dan mufakat untuk mencapai penyelesaian.
                        </p>
                        
                        <p><strong>(2)</strong> Jika upaya penyelesaian sengketa sebagaimana <strong>ayat 1 (satu)</strong> tidak tercapai, 
                            para pihak dapat memilih upaya penyelesaian sengketa melalui Lembaga Alternatif 
                            Penyelesaian Sengketa Sektor Jasa Keuangan (LAPS SJK) sesuai ketentuan yang berlaku, 
                            tanpa mengurangi hak para pihak untuk langsung mengajukan upaya penyelesaian sengketa 
                            termasuk di dalamnya jika terjadi ingkar janji melalui jalur hukum sesuai ketentuan 
                            perundang-undangan yang berlaku.
                        </p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 21</strong></h4>
                        <h5><strong>PERUBAHAN PERJANJIAN KREDIT</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> Dalam hal dilakukan perubahan atas ketentuan-ketentuan dalam perjanjian kredit ini, 
                            maka perubahan dimaksud akan diatur dalam suatu perjanjian tambahan atau surat tersendiri 
                            yang ditandatangani oleh <strong>PARA PIHAK</strong>. Perjanjian tambahan atau surat tersebut merupakan satu 
                            kesatuan dan bagian yang tidak terpisahkan dengan perjanjian kredit ini.
                        </p>
                        
                        <p><strong>(2)</strong> Atas perubahan perjanjian pada <strong>ayat 1 (satu)</strong>, 
                            berlaku juga syarat-syarat dan ketentuan-ketentuan sebagaimana diatur lebih lanjut dalam lampiran-lampiran 
                            yang dari waktu ke waktu akan disesuaikan dengan fasilitas kredit yang diberikan <strong>BANK</strong> 
                            dan diterima <strong>PEMINJAM</strong>, yang merupakan satu kesatuan yang tidak terpisahkan dengan 
                            perjanjian kredit ini.
                        </p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 22</strong></h4>
                        <h5><strong>DOMISILI HUKUM YANG BERLAKU</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p>Mengenai Perjanjian Kredit ini dan segala akibat hukumnya, <strong>PARA PIHAK</strong> memilih 
                        tempat kediaman hukum yang tetap pada Kantor Panitera Pengadilan Negeri Kota/Kab. KENDAL tanpa mengurangi hak 
                        <strong>BANK</strong> untuk menggugat <strong>PEMINJAM</strong> di hadapan Pengadilan lain di dalam 
                        wilayah Republik Indonesia berdasarkan ketentuan hukum yang berlaku.</p>
                    </div>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h4><strong>PASAL 23</strong></h4>
                        <h5><strong>PENUTUP</strong></h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>(1)</strong> <strong>PERJANJIAN</strong> ini telah disesuaikan dengan ketentuan peraturan 
                        perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan tentang perlindungan konsumen & 
                        masyarakat di sektor jasa keuangan.</p>
                        
                        <p><strong>(2)</strong> Surat <strong>PERJANJIAN</strong> ini dibuat dan ditandatangani oleh 
                        <strong>PEMINJAM</strong> dan/atau PENJAMIN dan <strong>BANK</strong> di atas kertas yang bermaterai 
                        cukup dalam 2 (dua) rangkap yang masing-masing disimpan oleh <strong>BANK</strong> dan 
                        <strong>PEMINJAM</strong>, dan masing-masing berlaku sebagai aslinya.</p>

                        <p>Demikian perjanjian kredit ini telah dibacakan dan dijelaskan isi dan maksud dari seluruh 
                            redaksi pasal serta risiko dan manfaat yang melekat pada fasilitas kredit dalam perjanjian 
                            kredit ini, kepada <strong>PARA PIHAK</strong> dan <strong>PARA PIHAK</strong> menyatakan telah memahami secara jelas tanpa ada 
                            kekhilafan dan paksaan dalam bentuk apapun, serta <strong>PARA PIHAK</strong> menyatakan dalam keadaan 
                            sehat walafiat dan menyatakan persetujuan terhadap seluruh syarat dan ketentuan dalam 
                            pasal-pasal perjanjian kredit ini.
                        </p>

                        <p>Demikian <strong>PERJANJIAN</strong> ini dibuat dan ditandatangani di Kabupaten/Kota Kendal 
                        pada hari ini, 24 Maret 2025.</p>
                    </div>
                </div>
                <div class="row text-center">
                <div class="col-md-4">
                    <p><strong>PEMINJAM</strong></p>
                </div>
                <div class="col-md-4">
                    <p><strong>DISETUJUI SUAMI/ISTRI</strong></p>
                </div>
                <div class="col-md-4">
                    <p><strong>PT BPR NUSAMBA CEPIRING</strong></p>
                </div>
            </div>

            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <hr style="width: 80%; border: 1px solid black; margin-bottom: 0;">
                    <p>{{$namaDebitur}}</p>
                </div>
                <div class="col-md-4">
                    <hr style="width: 80%; border: 1px solid black; margin-bottom: 0;">
                    <p>{{$namaIstri}}</p>
                </div>
                <div class="col-md-4">
                    <hr style="width: 80%; border: 1px solid black; margin-bottom: 0;">
                    <p>{{$namaKacab}}</p>
                </div>
            </div>

            <div class="row text-center mt-4">
                <div class="col-md-12">
                    <h5><strong>PENJAMIN</strong></h5>
                </div>
            </div>

            <div class="row text-center mt-3">
                <div class="col-md-4">
                    <p style="border-bottom: 1px dotted black; display: inline-block; width: 80%;">………………………….</p>
                </div>
                <div class="col-md-4">
                    <p style="border-bottom: 1px dotted black; display: inline-block; width: 80%;">………………………….</p>
                </div>
                <div class="col-md-4">
                    <p style="border-bottom: 1px dotted black; display: inline-block; width: 80%;">..........................................</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4">
                    <p>(nama jelas)</p>
                </div>
                <div class="col-md-4">
                    <p>(nama jelas)</p>
                </div>
                <div class="col-md-4">
                    <p>(nama jelas)</p>
                </div>
            </div>
                <div class="col-md-12 text-center">
                    <p><em>“Perjanjian ini telah disesuaikan dengan ketentuan peraturan perundang-undangan termasuk ketentuan Peraturan Otoritas Jasa Keuangan.”</em></p>
                </div>
                <!-- ======batas====== -->

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@endsection
