<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">SI Data Perpustakaan Sekolah SMK N 2 KIS </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=struktur&actions=tampil">Struktur</li>
                        <li><a href="?page=buku&actions=tampil">Buku</a></li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Jenis Buku <span class="caret"><width="200"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=pemograman&actions=tampil">Pemograman</a></li>
                        <li><a href="?page=sk&actions=tampil">Sistem Komputer</a></li>
                        <li><a href="?page=motivasi&actions=tampil">Motivasi</a></li>
                        <li><a href="?page=novel&actions=tampil">Novel</a></li>
                        <li><a href="?page=ilmu&actions=tampil">Ilmu Pengetahuan</a></li>
                        <li><a href="?page=sosial&actions=tampil">Sosial</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=pemograman&actions=report">Pemograman</a></li>
                        <li><a href="?page=sk&actions=report">Sistem Komputer</a></li>
                        <li><a href="?page=motivasi&actions=report">Motivasi</a></li>
                        <li><a href="?page=novel&actions=report">Novel</a></li>
                        <li><a href="?page=ilmu&actions=report">Ilmu Pengetahuan</a></li>
                        <li><a href="?page=sosial&actions=report">Sosial</a></li>
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil">User</a></li>
               <?php } 
                
                 elseif (isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
                     <li><a href="?page=buku&actions=tampil">Buku</a></li>
                
                <?php } ?>

                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>


            </ul>

        </div>
    </div>
</nav>
