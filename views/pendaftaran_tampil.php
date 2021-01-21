<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?><style type="text/css">
<!--
body {
	background-image: url(../img/images.jpeg);
}
-->
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Pendaftaran </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                  <thead>
                            <tr>
                                <th bgcolor="#FFFF00">No</th>
                              <th bgcolor="#FFFF00">No induk</th>
                              <th bgcolor="#FFFF00">Nama siswa</th>
                              <th bgcolor="#FFFF00">Tempat lahir</th>
                              <th bgcolor="#FFFF00">Alamat</th>
                              <th bgcolor="#FFFF00">Tanggal lahir</th>
                             <th bgcolor="#FFFF00">Asal sekolah</th>
                              <th bgcolor="#FFFF00">Tahun lulus</th>
                              <th bgcolor="#FFFF00">Jurusan</th>
                              <th bgcolor="#FFFF00">Agama</th>
                              <th bgcolor="#FFFF00">Jenis Kelamin</th>
                              <th bgcolor="#FFFF00">ACTIONS</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pendaftaran";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_induk'] ?></td>
									<td><?= $data['nama_siswa'] ?></td>
									<td><?= $data['tempat_lahir'] ?></td>
									<td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
                                    <td><?= $data['tahun_lulus'] ?></td>
                                     <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?> &nbsp <a href="?page=seleksi&actions=edit&id=<?= $data['no_induk'] ?>" class="btn btn-info btn-xs">

                                            <span class="fa fa-forward"></span></a>
                                    </td>
                                      <td>  
                                        <a href="?page=pendaftaran&actions=edit&id=<?= $data['no_induk'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=pendaftaran&actions=tambah&nope=<?= $data['no_induk'] ?>" class="btn btn-info btn-xs">
											<span class="fa fa-plus"></span>
										</a>
                                        <a href="?page=pendaftaran&actions=delete&id=<?= $data['no_induk'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=pendaftaran&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Pendaftaran

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
              </div>
            </div>

        </div>
    </div>
</div>

