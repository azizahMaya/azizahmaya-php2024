<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale-1">
        <title>Login Siswa - Aplikasi Pembayaran SPP</title>
        <link href="css/boostraf.min.css"rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <center><h4>LOGIN SISWA</h4></center>
                <div class="card">
                    <div class="card-header">
                            <!--logo-->
                            <center><img src="img/logo.jpg" width="20%"></center>
                    </div>
                    <div class="card-body">
                        <from acation="proses-login-siswa.php" methode="post">
                            <div class="from-group mb-2">
                            <center><label>NISN</label>
                                <input type="number" name="nisn" class="from-control"placeholder="Masukan NISN anda.." required>
                                </center>
                            </div>
                        <div class="card-body">
                        <from acation="proses-login-siswa.php" methode="post">
                            <div class="from-group mb-2">
                            <center><label>NIS</label>
                                <input type="number" name="nis" class="from-control"placeholder="Masukan NIS anda.." required>
                                </center>
                            </div>
                        <div class="from group mb-2">
                                <center><button type="submit" class"btn btn-primary"> LOGIN </button></center>
                            </div>
                          <center><a href="index2.php">Login sebagai administrator/petugas </a></center>
                            
                </from>
</div>
</div>
</div>
</div>

</div>

<script src="js/boostrap.bundle.min.js"></script>

</body>
</html>
