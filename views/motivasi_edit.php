<?php
$no=$_GET['no'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_motivasi WHERE no ='$no'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						    <div class="form-group">
                            <label for="nama_buku" class="col-sm-3 control-label">Nama Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_buku" class="form-control" id="inputEmail3" placeholder="Nama Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengarang" class="col-sm-3 control-label">Nama Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengarang" class="form-control" id="inputEmail3" placeholder="Nama Pengarang" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_terbit" class="form-control" id="inputEmail3" placeholder="Tahun Terbit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-3 control-label">Jumlah </label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah" class="form-control" id="inputEmail3" placeholder="Jumlah" >
                            </div>
                        </div>
                        </div>     
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=motivasi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_buku=$_POST['nama_buku'];
    $nama_pengarang=$_POST['nama_pengarang'];
	$tahun_terbit=$_POST['tahun_terbit'];
    $jumlah=$_POST['jumlah'];
    //buat sql
    $sql="UPDATE tbl_motivasi SET nama_buku='$nama_buku',nama_pengarang='$nama_pengarang',tahun_terbit='$tahun_terbit',jumlah='$jumlah' WHERE no ='$no'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=motivasi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



