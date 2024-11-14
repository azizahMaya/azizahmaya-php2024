<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login'); 
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin'); 
    window.location.assign('../index2.php');
    </script>";
}
?>

<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale-1">
        <title>Admin - Aplikasi Pembayaran SPP.</title>
        <link href="../css/boostraf.min.css"rel="stylesheet">
</head>
<body>
   <div class="container mt-5">

   <h3>Aplikasi Pembayaran SPP.</h3>
   <div class="alert alert-info">
     Anda Login Sebagai <b>ADMINISTATOR</b> Aplikasi Pembayaran SPP.
</div>
<button><a href="admin.php" class="btn btn-primary"> Administator</a></button>
<button><a href="admin.php?url-spp" class="btn btn-primary"> SPP</a></button>
<button><a href="admin.php?url-kelas" class="btn btn-primary"> Kelas</a></button>
<button><a href="admin.php?url-siswa" class="btn btn-primary">siswa</a></button>
<button><a href="admin.php?url-petugas" class="btn btn-primary"> Petugas</a></button>
<button><a href="admin.php?url-pembayaran" class="btn btn-primary"> Pembayaran</a></button>
<button><a href="admin.php?url-laporan" class="btn btn-primary"> Laporan</a></button>
<button><a href="admin.php?url-logout" class="btn btn-primary"> Logout</a></button>

<div class="card mt-2">
    <div class="card-body">
        <!-- ini isi web kita -->
        <?php
        $file = @$_GET["url"];
        if(empty($file)){
            echo"<h4>Selamat Datang Di Halaman Administator.</h4>";
            echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran
                siswa / siswi disekolah.";
        }else{
            include $file.'.php';
        }
        ?>
</div>
    </div>


<script src="../js/boostrap.bundle.min.js"></script>
</div>

</body>
</html>
