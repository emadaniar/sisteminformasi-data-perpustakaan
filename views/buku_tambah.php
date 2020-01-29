<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengarang" class="col-sm-3 control-label">Nama Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengarang" class="form-control" id="inputEmail3" placeholder="Nama Pengarang" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_buku" class="col-sm-3 control-label">Jenis Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_buku" class="form-control" id="inputEmail3" placeholder="Jenis Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_halaman" class="col-sm-3 control-label">Jumlah Halaman</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_halaman" class="form-control" id="inputEmail3" placeholder="Jumlah Halaman" >
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_terbit" class="form-control" id="inputEmail3" placeholder="Tahun Terbit" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Tambah Data Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
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
	$judul_buku=$_POST['judul_buku'];
	$nama_pengarang=$_POST['nama_pengarang'];
	$jenis_buku=$_POST['jenis_buku'];
	$jumlah_halaman=$_POST['jumlah_halaman'];
    $tahun_terbit=$_POST['tahun_terbit'];
	
    //buat sql
    $sql="INSERT INTO tbl_buku VALUES ('','$judul_buku','$nama_pengarang','$jenis_buku','$jumlah_halaman','$tahun_terbit')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }
?>
