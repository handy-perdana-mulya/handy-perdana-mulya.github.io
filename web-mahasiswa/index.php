<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Uniska</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="container col-md-6">
<div class="card">
<div class="card-header bg-primary text-white">
           Input Data Mahasiswa 
        </div>
        <div class="card-body">
        <form action="" method="POST" class="form-item">

        <div class="from-group">
        <label for="nama">Id Mahasiswa</label>
        <input type="text" name="idmahasiswa" class="form-control col-md-9" placeholder="Masukkan Id Mahasiswa">
        </div>

        <div class="from-group">
        <label for="npm">NPM</label>
        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
        </div>
        
        <div class="from-group">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
        </div>

        <div class="from-group">
        <label for="tempatlahir">Tempat Lahir</label>
        <input type="text" name="tempatlahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
        </div>

        <div class="from-group">
        <label for="tanggallahir">Tanggal Lahir</label>
        <input type="date" name="tanggallahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
        </div>

        <div class="from-group">
        <label for="jeniskelamin">Jenis Kelamin</label>
        <input type="text" name="jeniskelamin" class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin">

        <div class="from-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
        </div>

        <div class="from-group">
        <label for="kodepos">Kodepos</label>
        <input type="number" name="kodepos" class="form-control col-md-9" placeholder="Masukkan Kodepos">
        </div>

        <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
        <button type="reset" class="btn btn-danger">BATAL</button>

        </form>



        </div>
    </div>
</div>
    
</body> 
</html>


<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm          =$_POST['npm'];
            $nama         =$_POST['nama'];
            $tempatlahir  =$_POST['tempatlahir'];
            $tanggallahir =$_POST['tanggallahir'];
            $jeniskelamin =$_POST['jeniskelamin'];
            $alamat       =$_POST['alamat'];
            $kodepos      =$_POST['kodepos'];


             mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('',
            '$npm','$nama','$tempatlahir','$tanggallahir','$jeniskelamin','$alamat','$kodepos'
            )") or die(mysqli_error($koneksi));
       
       echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan.... </h5></div>";
       echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa/data_mahasiswa.php' >";
    }

?>
