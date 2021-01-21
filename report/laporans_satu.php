<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penerimaan Siswa Smk Negeri 1 Air JOman</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
         //buat sql untuk tampilan data, gunakan kata kunci select
          $sql = "SELECT * FROM pendaftaran";
                           
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-left">
                        <center><h2>Sistem Informasi Penerimaan Siswa Smk Negeri 1 Air JOman </h2>
                      <h4>Jalan Perjuangan No 33, Desa punggulan, Air Joman <br>Kabupaten Asahan, Sumatera Utara, 21211</h4></center>
                        <hr>
                        <center><h3>DATA Seleksi UJian SISWA</h3></center>
                         <hr>
                        <table class="table table-bordered table-striped table-hover" border="1">
                            <tbody>
								<tr>
                                    <td>No Induk</td><td><?= $data['no_induk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Siswa</td> <td><?= $data['nama_siswa'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td> <td><?= $data['jurusan'] ?></td>
                                </tr>
                                <tr>
                                    <td>jenis_kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Bahasa Indonesia</td> <td><?= $data['bi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Bahasa Inggris</td> <td><?= $data['bing'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Matematika</td> <td><?= $data['mm'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jumlah'] ?></td>
                                </tr>
                                <tr>
                                    <td>Putusan Hasil</td> <td><?= $data['putusan_hasil'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                    <BR><td colspan="2" class="text-right">
                                        Air Joman  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ardi Aliansyah S.Pd, M.Kom<strong></u><br>
                                        NIP.102871291416712
                                        <tr>
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
