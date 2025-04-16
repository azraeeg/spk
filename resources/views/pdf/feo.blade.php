<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FEO-{{ $viewData['namaDebitur'] }}</title>
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
                        <h3>BPR NUSAMBA CEPIRING</h3>
                        <hr style=" margin: auto;border: 1px solid black;">
                        <h5>
                            PERJANJIAN DAN PENYERAHAN HAK DAN MILIK DALAM KEPERCAYAAN <br>
                            ATAS BARANG-BARANG (FIDUCIAIRE EIGENDOMS OVERDRACHT)
                        </h5>
                    </div>
                    
                    <p>Yang bertanda tangan di bawah ini :</p>

                    <table class="table table-borderless">
                        <tr>
                            <td><strong>I</strong></td>
                            <td><strong>{{$viewData['namaKacab']}}</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Dari dan karenanya bertindak untuk dan atas nama PT. Bank Perekonomian Rakyat Nusamba Cepiring 
                                berkedudukan di {{$viewData['kota']}}. <br>
                                Untuk selanjutnya disebut <strong>PIHAK KESATU / KREDITUR</strong>.
                            </td>
                        </tr>
                        <tr>
                            <td><strong>II</strong></td>
                            <td><strong>{{$viewData['namaDebitur']}}</strong></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Bertindak untuk dan atas nama diri sendiri / perorangan. <br>
                                Bertempat tinggal di <strong>{{$viewData['alamatDeb']}}</strong>. <br>
                                Untuk selanjutnya disebut <strong>PIHAK KEDUA / DEBITUR</strong>.
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="row p-3 mb-2">
                    <p>
                        Menerangkan bahwa untuk lebih menjamin ketertiban pembayaran lunas seluruh kewajiban kepada 
                        PIHAK KESATU / KREDITUR berdasarkan surat akte Perjanjian Kredit, KREDITUR nomor: 
                        <strong>{{$viewData['noSpk']}}</strong> tanggal <strong>{{$viewData['tglDroping']}}</strong>, 
                        berikut segala perubahan / penambahannya di kemudian hari, maka PIHAK KEDUA / DEBITUR secara 
                        fiduciaire kepada PIHAK KESATU / KREDITUR atas barang-barang yang diuraikan dalam daftar terlampir.
                    </p>
                </div>
                <div class="row p-3 mb-2">
                    <div class="col-md-12 text-center">
                        <h5>PASAL-PASAL PERJANJIAN</h5>
                    </div>

                    <div class="col-md-12">
                        <p><strong>PASAL 1:</strong> Penyerahan BARANG-BARANG yang telah ada berlaku terhitung sejak saat 
                        surat perjanjian ditanda tangani sedangkan mengenai BARANG-BARANG yang di kemudian hari akan 
                        dimiliki oleh PIHAK KEDUA / DEBITUR, penyerahan secara fiduciaire ini berlaku terhitung 
                        sejak saat PIHAK KEDUA / DEBITUR menjadi pemilik dari BARANG-BARANG tersebut.</p>

                        <p><strong>PASAL 2:</strong> Sejak berlakunya penyerahan hak milik secara fiduciaire seperti tersebut 
                        pada pasal 1 di atas PIHAK KESATU / KREDITUR meminjamkan BARANG-BARANG tersebut kepada 
                        PIHAK KEDUA / DEBITUR dengan ketentuan bahwa peminjaman itu akan berakhir dengan sendirinya dalam hal :
                            <ul style="list-style-type: lower-alpha;">
                                <li>Hutang (Atas dasar mana BARANG-BARANG tersebut diserahkan sebagai jaminannya) telah dapat ditagih 
                                    kembali, atau</li>
                                <li>Jika BARANG-BARANG tersebut diserahkan kembali oleh PIHAK KESATU / KREDITUR pada PIHAK KEDUA / 
                                    DEBITUR karena hutang berikut kewajiban lainnya telah dilunasi.
                                </li>
                            </ul>
                        Terhitung sejak tanggal perjanjian ini ditanda tangani, PIHAK KEDUA / DEBITUR bukan lagi pemilik 
                        dari BARANG-BARANG tersebut melainkan sebagai peminjam saja, PIHAK KESATU / KREDITUR berhak 
                        sewaktu-waktu meminta kembali BARANG-BARANG tersebut.  Dalam hal mana PIHAK KEDUA / DEBITUR 
                        diwajibkan atas biayanya sendiri menyerahkan BARANG-BARANG tersebut kepada PIHAK KESATU / KREDITUR 
                        dalam waktu 3 (tiga) hari setelah permintaan pertama PIHAK KESATU / KREDITUR.</p>

                        <p><strong>PASAL 3:</strong>PIHAK KEDUA / DEBITUR menyatakan telah menerima BARANG-BARANG tersebut sebagai 
                        titipan baik BARANG-BARANG yang telah ada maupun yang akan dimiliki di kemudian hari.  Untuk disimpan dan 
                        dipergunakan dengan sebaik-baiknya sesuai dengan tujuannya.</p>
                        
                        <p><strong>PASAL 4:</strong> PIHAK KEDUA / DEBITUR menyatakan telah menerima BARANG-BARANG tersebut 
                        di atas dengan sebaik-baiknya dan melakukan perbaikan yang telah dianggap perlu. Semua biaya pemeliharaan, 
                        perbaikan, dan resiko kehilangan, kerusakan, penyusutan, dan kerugian-kerugian lain menjadi beban dan 
                        dibayar oleh PIHAK KEDUA / DEBITUR. </p>
                        
                        <p><strong>PASAL 5:</strong>PIHAK KEDUA / DEBITUR berkewajiban untuk setiap bulan dalam waktu 15 (lima belas) 
                        hari pada bulan berikutnya menyampaikan kepada PIHAK KESATU / KREDITUR laporan tertulis menurut cara yang 
                        ditentukan PIHAK KESATU / KREDITUR mengenai keadaan BARANG-BARANG tersebut dengan menyebutkan tempat 
                        penyimpanannya dan nilai / harga pembelian / pembuatannya serta jumlahnya.</p>

                        <p><strong>PASAL 6:</strong> PIHAK KESATU / KREDITUR atau kuasanya berhak untuk pada setiap waktu memasuki 
                        tempat dimana BARANG-BARANG itu berada memeriksa keadaannya dan juga berhak untuk melakukan atau menyuruh 
                        melakukan semua perbuatan yang seyogyanya harus dilakukan oleh PIHAK KEDUA / DEBITUR untuk mempertahankan 
                        BARANG-BARANG itu dalam keadaan yang sebaik-baiknya jika PIHAK KEDUA / DEBITUR lalai untuk melakukannya maka 
                        segala kerugian yang diderita PIHAK KESATU / KREDITUR menjadi beban tanggungan dan dibayar oleh 
                        PIHAK KEDUA / DEBITUR. </p>

                        <p><strong>PASAL 7:</strong> PIHAK KEDUA / DEBITUR dengan ini menjamin PIHAK KESATU / KREDITUR bahwa 
                        BARANG-BARANG itu adalah benar-benar hak milik PIHAK KEDUA / DEBITUR sendiri, tidak ada orang 
                        atau pihak lain yang ikut berhak dan / atau ikut memilikinya, bebas dari segala sitaan, ikatan, 
                        atau tuntutan hukum (Vrij van alle lasten), dan juga belum dijual atau dioperkan atau dijanjikan 
                        untuk dijual / dioperkan dengan cara bagaimanapun kepada orang atau pihak lain. </p>

                        <p><strong>PASAL 8:</strong> BARANG-BARANG dan atau bagian-bagiannya yang tidak dapat dipakai lagi selama 
                        berlakunya perjanjian ini wajib diganti dengan BARANG-BARANG  dan / atau bagian-bagiannya yang baru oleh 
                        PIHAK KEDUA / DEBITUR. Penggantian ini termasuk dalam penyerahan hak milik secara fiduciaire menurut 
                        perjanjian ini, karenanya segala ketentuan-ketentuan falam perjanjian ini berlaku juga terhadap penggantian 
                        tersebut. </p>

                        <p><strong>PASAL 9:</strong> PIHAK KEDUA / DEBITUR dilarang untuk menyewakan, meminjamkan menjaminkan 
                        dengan cara bagaimanapun juga atau memindah tangankan dengan cara apapun juga BARANG-BARANG itu kepada 
                        orang atau pihak lain. </p>

                        <p><strong>PASAL 10:</strong> Khusus untuk BARANG-BARANG perdagangan, PIHAK KESATU / KREDITUR dengan ini 
                        memberi kuasa kepada PIHAK KEDUA / DEBITUR untuk menjual BARANG-BARANG tersebut (BARANG-BARANG perdagangan) 
                        dengan ketentuan bahwa setiap waktu nilai / harga dari BARANG-BARANG tersebut (BARANG-BARANG perdagangan) 
                        sebagaimana ditetapkan oleh PIHAK KESATU / KREDITUR sedikitnya harus mempunyai nilai harga  Rp.  
                        {{ number_format($viewData['totalJaminan'], 0, ',', '.') }} (dari mana blum ketemu)  
                        PIHAK KESATU / KREDITUR berhak sewaktu-waktu menarik kembali kuasa tersebut.</p>

                        <p><strong>PASAL 11:</strong> PIHAK KEDUA / DEBITUR wajib mengasuransikan BARANG-BARANG itu terhadap kebakaran, 
                        kehilangan, dan lain-lain bahaya yang dianggap perlu oleh PIHAK KESATU / KREDITUR, kepada Perusahaan Asuransi 
                        yang ditunjuk disetujui oleh PIHAK KESATU / KREDITUR, hingga jumlah yang ditentukan oleh 
                        PIHAK KESATU / KREDITUR dengan menunjuk PIHAK KESATU / KREDITUR sebagai pihak yang berhak menerima 
                        pembayaran ganti rugi asuransinya (KREDITURer's Clause) PIHAK KEDUA / DEBITUR berkewajiban untuk 
                        menyerahkan kepada PIHAK KESATU / KREDITUR asli polis asuransi yang bersangkutan. </p>

                        <p><strong>PASAL 12:</strong> Jika hutang atau sisa hutang itu berikut bunga dan biaya-biaya lainnya atas 
                        dasar nama BARANG-BARANG tersebut diserahkan sebagai jaminan tidak dibayar kembali dan / atau BARANG-BARANG 
                        atau sebagian BARANG-BARANG itu disita oleh orang atau pihak lain atau jika terjadi salah satu keadaan yang 
                        menyebabkan hutang tersebut dapat ditarik segera dan sekaligus oleh PIHAK KESATU / KREDITUR sesuai dengan 
                        ketentuan yang dimaksud dalam Surat / Akte Perjanjian Kredit.  KREDITUR Garansi LC tidak memenuhi salah 
                        satu syarat dari perjanjian ini atau perjanjian lain yang telah atau akan diadakan dengan 
                        PIHAK KESATU / KREDITUR.  PIHAK KESATU / KREDITUR tanpa diperlukan teguran atau pernyataan lalai 
                        terlebih dahulu berhak untuk meminta kembali BARANG-BARANG tersebut dan karenanya PIHAK KEDUA / DEBITUR 
                        wajib menyerahkan kembali kepada PIHAK KESATU / KREDITUR BARANG-BARANG tersebut dalam waktu 
                        paling lambat 3 (tiga) hari terhitung sejak tanggal permintaan pertama dari PIHAK KESATU / KREDITUR. </p>

                        <p><strong>PASAL 13:</strong> Bilamana PIHAK KEDUA / DEBITUR tidak menyerahkan BARANG-BARANG tersebut 
                        dalam waktu yang telah ditetapkan dalam pasal 2 dan 12 di atas maka PIHAK KESATU / KREDITUR berhak untuk 
                        mengambil BARANG-BARANG tersebut dari PIHAK KEDUA / DEBITUR dan atau pihak lain yang memegang / menguasai 
                        BARANG-BARANG tersebut secara paksa jika perlu dengan bantuan alat negara. Semuanya atas biaya yang 
                        ditanggung dan dibayar oleh PIHAK KEDUA / DEBITUR. </p>
                        <p>PIHAK KEDUA / DEBITUR dengan ini berjanji dan mengikat diri kepada PIHAK KESATU / KREDITUR untuk 
                            tidak melakukan tindakan apapun yang merintangi usaha PIHAK KESATU / KREDITUR untuk melaksanakan 
                            hal-hal tersebut di atas dan atas tindakan mana PIHAK KEDUA / DEBITUR membebaskan PIHAK KESATU / KREDITUR 
                            dari segala tuntutan dalam bentuk apapun baik yang datangnya dari PIHAK KEDUA / DEBITUR maupun dari pihak lain. 
                        </p>
                        <p><strong>PASAL 14:</strong> PIHAK KESATU / KREDITUR berhak akan tetapi tidak diwajibkan untuk menjual, 
                        memindahkan, menyerahkan BARANG-BARANG tersebut baik di hadapan umum maupun di bawah tangan, dengan cara, 
                        harga dan syarat-syarat yang dianggap baik oleh PIHAK KESATU / KREDITUR sendiri, pada setiap waktu yang 
                        dianggap baik oleh PIHAK KESATU / KREDITUR, setelah dikembalikannya BARANG-BARANG itu atau setelah diambil 
                        kembali oleh PIHAK KESATU / KREDITUR tanpa PIHAK KESATU / KREDITUR perlu mendapat persetujuan terlebih dahulu 
                        dari PIHAK KEDUA / DEBITUR, PIHAK KESATU / KREDITUR berhak untuk mempergunakan hasil bersih dari penjualan 
                        BARANG-BARANG itu setelah dipotong ongkos-ongkos akan tetapi tidak terbatas pada ongkos-ongkos penjualan, 
                        untuk membayar bunga, biaya-biaya lain dan hutang pokok yang timbul berdasarkan Surat / Perjanjian Kredit, 
                        KREDITUR tersebut di atas berikut segala perubahan / penambahannya di kemudian hari.  Jika ada sisanya maka 
                        PIHAK KESATU / KREDITUR harus mengembalikan sisanya itu kepada PIHAK KEDUA / DEBITUR tanpa diharuskan membayar 
                        bunga atau ganti rugi berupa apapun juga. </p>

                        <p><strong>PASAL 15:</strong> Penyerahan hak milik secara fiduciaire menurut perjanjian ini atas 
                        BARANG-BARANG tersebut di atas, dilakukan dengan ketentuan bahwa bilamana hutang (atas dasar nama 
                        BARANG-BARANG tersebut di diserahkan sebagai jaminan) telah dibayar lunas dengan segera dan secara 
                        sebagaimana mestinya berikut bunga dan biaya-biaya lainnya kepada PIHAK KESATU / KREDITUR  maka 
                        PIHAK KESATU / KREDITUR wajib menyerahkan kembali hak milik PIHAK KEDUA / DEBITUR atas BARANG-BARANG 
                        itu dengan suatu penyerahan yang sederhana. </p>

                        <p><strong>PASAL 16:</strong>  Mengenai perjanjian ini dan segala akibat hukumnya kedua belah pihak memiliki 
                        domisili umum dan tetapi di kantor Panitera Pengadilan Negeri di {{$viewData['kotaPengadilanDeb']}}. </p>
                    </div>
                </div>


            <table class="table table-borderless text-center" style="text-align: center;">
                <tr>
                    <td><strong>PIHAK KESATU</strong> <br> BPR NUSAMBA CEPIRING</td>
                    <td><strong>PIHAK KEDUA</strong> <br> DEBITUR</td>
                </tr>
                <tr>
                    <td><br><br><br><strong>{{$viewData['namaKacab']}}</strong></td>
                    <td><br><br><br><strong>{{ $viewData['namaDebitur'] }}</strong></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
