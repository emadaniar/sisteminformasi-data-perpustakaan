<?php
$no=$_GET['no'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_struktur WHERE no ='$no'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Struktur</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK/NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="NIK/NIP">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2019;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           
                        <!--Jabatan-->
                        
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="jabatan" class="form-control">
										<option value="-">-</option>
									 <option value="Ka. Perpustakaan">Ka. Perpustakaan</option>
									<option value="Wakil Ketua Perpustakaan">Wakil Ketua Perpustakaan<option>
                                    <option value="Seketaris Perpustakaan">Seketaris Perpustakaan<option>
                                    <option value="Bendahara Perpustakaan">Bendahara Perpustakaan</option>
									<option value="Anggota">Anggota<option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Struktur</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=struktur&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Struktur
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
	$tanggal_masuk=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $jabatan=$_POST['jabatan'];
    //buat sql
    $sql="UPDATE tbl_struktur SET nik='$nik',nama='$nama',tanggal_masuk='$tanggal_masuk',jabatan='$jabatan' WHERE no ='$no'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=struktur&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



