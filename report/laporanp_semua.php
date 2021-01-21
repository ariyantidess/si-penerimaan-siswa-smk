<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pengumuman Siswa Smk Negeri 1 Air Joman Tahun 2021</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Pendaftaran Siswa Smk Negeri 1 Air Joman Tahun 2021 </h2>
                        <h4>Jalan Perjuangan pasar XII, Desa punggulan, Air Joman <br>  Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>Data Pengumuman Siswa Smk Negeri 1 Air Joman Tahun 2021  </h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                                <tr>
                                 <th>No</th><th>No induk</th><th>Nama Lengkap</th>jenis Kelamin<th></th><th>Jurusan</th><th>Asal Sekolah</th><th>Tahun lulus</th><th>Jumlah</th><th>Putusan hasil</th>
                            </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                             <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $tampil = mysqli_query($koneksi,"SELECT * FROM  pendaftaran, seleksi where pendaftaran.no_induk=seleksi.no_induk order by nama desc");
                             while ($data  = mysqli_fetch_array($tampil)) { 
                                $nomor++; 
                                ?>
                                   <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_induk'] ?></td>
                                    <td><?= $data['nama_siswa'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                     <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
                                     <td><?= $data['tahun_lulus'] ?></td>
                                    <td><?= $data['jumlah'] ?></td>
                                    <td><?= $data['putusan_hasil'] ?></td>
                                    <td>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>

                            <tfoot>
                                <br>
                                <br>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Air Joman,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br><br>
                                        <b><u>ARDI ALIANSYAH, S.Pd, M.Kom <strong></u><br>
                                         <p> NIP.102871291416712
                                                 </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
