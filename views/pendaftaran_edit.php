<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE no_induk='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?><style type="text/css">
<!--
body {
	background-color: #990099;
}
-->
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_induk" class="col-sm-3 control-label">Nomor Induk</label>
                             <div class="col-sm-9">
								<input type="text" name="no_induk" value="<?=$data['no_induk']?>"class="form-control" id="no_induk" placeholder="Nomor Induk" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                             <div class="col-sm-9">
                                <input type="text" name="nama_siswa" value="<?=$data['nama_siswa']?>"class="form-control" id="nama_siswa" placeholder="Nama Siswa " readonly="true">
                            </div>  

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="tempat_lahir" placeholder="tempat_lahir">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="alamat" placeholder="alamat">
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                     <select name="jurusan"  value="<?=$data['jurusan']?>" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Rpl">RPL</option>
                                    <option value="Tkj">TKJ</option>
                                    <option value="Tkr">TKR</option>
                                    <option value="Tsm">TSM</option>
                                </select>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Jenis kelamin</label>
                            <div class="col-sm-9">
                                     <select name="jenis_kelamin"  value="<?=$data['jenis_kelamin']?>" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Laki-laki">L</option>
                                    <option value="Perempuam">P</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="agama"  value="<?=$data['agama']?>" 
                                    class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="BUDHA">BUDHA</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Pendaftaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Pendaftaran
                    </a>
                </div>
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
  $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
  $jenis_kelamin=$_POST['jenis_kelamin'];

    //buat sql
    $sql="UPDATE pendaftaran SET no_induk = '$no_induk', nama_siswa='$nama_siswa', tempat_lahir='$tempat_lahir', alamat='$alamat', jurusan='$jurusan', agama='$agama', jenis_kelamin='$jenis_kelamin'
	 WHERE no_induk='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



