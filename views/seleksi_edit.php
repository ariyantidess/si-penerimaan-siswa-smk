<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM  pendaftaran WHERE no_induk='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?><style type="text/css">
<!--
body {
	background-color: #990000;
}
-->
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Seleksi Siswa</h3>
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
                            <label for="" class="col-sm-3 control-label">Bahasa Indonesia</label>
                            <div class="col-sm-9">
                                <input type="text" name="bi" value="<?=$data['bi']?>"class="form-control" id="bi" placeholder="bi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"> Bahasa Inggris</label>
                            <div class="col-sm-9">
                                <input type="text" name="bing" value="<?=$data['bing']?>"class="form-control" id="bing" placeholder="bing">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">MM</label>
                            <div class="col-sm-9">
                                <input type="text" name="mm" value="<?=$data['mm']?>"class="form-control" id="mm" placeholder="mm">
                            </div>
                        </div>

                           
                       
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Putusan hasil</label>
                            <div class="col-sm-9">
                                     <select name="putusan_hasil"  value="<?=$data['putusan_hasil']?>" class="form-control">
                                    <option value="">PILIh</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="tolak">tolak</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Seleksi Ujian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Seleksi Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

if($_POST){
    //Ambil data dari form
  $no_induk=$_POST['no_induk'];
    $nama_siswa=$_POST['nama_siswa'];
    $jurusan=$_POST['jurusan'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $bi=$_POST['bi']; 
   $bing=$_POST['bing']; 
   $mm=$_POST['mm']; 
  $jumlah=$_POST['bi']+$_POST['bi']+$_POST['mm']; 
    $putusan_hasil=$_POST['putusan_hasil'];
  
 
    //buat sql
    $sql="UPDATE pendaftaran SET no_induk = '$no_induk', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin',  bi='$bi', bing='$bing', mm='$mm', jumlah='$jumlah', putusan_hasil='$putusan_hasil'
	 WHERE no_induk='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=seleksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



