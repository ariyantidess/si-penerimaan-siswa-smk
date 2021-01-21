<style type="text/css">
<!--
body {
	background-color: #00CC00;
	background-image: url(../img/images.jpeg);
}
.style2 {color: #000000}
-->
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-13">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="style2">form Tambah Seleksi Calon Siswa</span></h3>
                </div>
                <div class="panel-body">
                    <span class="style2">
                    <!--membuat form untuk tambah data-->
                    </span>
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group style2">
                            <label for="no_induk" class="col-sm-3 control-label">No Induk</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_induk" class="form-control" id="no_induk" placeholder="Inputkan Nomor induk" required>
                            </div>
                        </div>

                         <div class="form-group style2">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Inputkan Nama siswa" required>
                            </div>
                        </div>
                           

                          <div class="form-group style2">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Inputkan tempat_lahir" required>
                            </div>
                        </div>

                          <div class="form-group style2">
                            <label for="alamat" class="col-sm-3 control-label">alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Inputkan MM" required>
                            </div>
                        </div>

                        <div class="form-group style2">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Inputkan tgl_lahir" required>
                            </div>
                        </div>


                         <div class="form-group">
                            <span class="style2">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Asal Sekolah</label>
                            </span>
                            <div class="col-sm-9">
                                <span class="style2">
                                <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" placeholder="Inputkan asal_sekolah" required>
                                </span>                            </div>
                        </div>


                         <div class="form-group">
                            <label for="tahun_lulus" class="col-sm-3 control-label">Tahun lulus</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_lulus" class="form-control" id="tahun_lulus" placeholder="Inputkan tahun_lulus" required>
                            </div>
                        </div>
                       
                       <div class="form-group">
                            <div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="jurusan" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Rpl">RPL</option>
                                    <option value="Tkj">TKJ</option>
                                    <option value="Tkr">TKR</option>
                                    <option value="Tsm">TSM</option>
                                </select>
                            </div>
                        </div>
                    </div>

                       <div class="form-group">
                            <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="agama" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="BUDHA">BUDHA</option>
                                </select>
                            </div>
                        </div>
                        
                    <div class="form-group">
                            <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="jenis_kelamin" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                    

                         
                      

                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-info">
                                    <span class="fa fa-save"></span> Simpan data Siswa</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Seleksi                    </a>                </div>
            </div>

      </div>
    </div>
</div>

<?php

if($_POST){
    //Ambil data dari formid
  $no_induk=$_POST['no_induk'];
    $nama_siswa=$_POST['nama_siswa'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $alamat=$_POST['alamat'];
     $tgl_lahir=$_POST['tgl_lahir'];
     $asal_sekolah=$_POST['asal_sekolah']; 
  $tahun_lulus=$_POST['tahun_lulus'];
  $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $bi=$_POST['bi'];
  $bing=$_POST['bing'];
    $mm=$_POST['mm'];
  $jumlah=$_POST['jumlah'];
  $putusan_hasil=$_POST['putusan_hasil'];

 
    //buat sql
    $sql="INSERT INTO pendaftaran VALUES ('$no_induk','$nama_siswa','$tempat_lahir','$alamat','$tgl_lahir','$asal_sekolah','$tahun_lulus','$jurusan','$agama','$jenis_kelamin','$bi','$bing','$mm','$jumlah','$putusan_hasil')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pendaftaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
