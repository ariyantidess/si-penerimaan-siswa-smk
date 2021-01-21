<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Pendaftaran </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>No induk</th><th>Nama siswa</th><th>Tempat lahir</th><th>Alamat</th><th>Jurusan</th><th>Agama</th><th>Jenis Kelamin</th><th>ACTIONS</th><th>Agama</th><th>Jenis Kelamin</th><th>ACTIONS</th><th>Agama</th><th>Jenis Kelamin</th><th>ACTIONS</th><th>Agama</th><th>Jenis Kelamin</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM calon_siswa";
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
                                    <td><?= $data['no_pendaftaran'] ?></td>
									<td><?= $data['Nama_lengkap'] ?></td>
									<td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
									<td><?= $data['alamat'] ?></td>
                                    <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td>
                                        <a href="?page=pendaftaran&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
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
                                    <a href="?page=pendaftaran&actions=tambah" class="btn btn-success">
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

