<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa Uniska</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <form name="cari"action=""method="POST">
            <input type="search" name="query" placeholder="Cari Mahasiswa" size="35" autofocus="" autocomplte="off">
            <input type="submit" value="CARI" name="cari">
            </form>
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
  
                    <tr>
                        <th>ID MAHASISWA</th>
                        <th>NPM</th>
                        <th>NAMA MAHASISWA</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>  
                        <th>JENIS KELAMIN</th>  
                        <th>ALAMAT</th>  
                        <th>KODEPOS</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                        error_reporting(0);
                        $no = 1;
                        
                        $query = $_POST['query'];
                        if($query !=''){
                            $tampil = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE idmahasiswa LIKE '%".$query."%' OR npm LIKE '%".$query."%' OR
                            nama LIKE '%".$query."%' OR tempat_lahir LIKE '%".$query."%' 
                         ");
                        }
                        else{$tampil = mysqli_query($koneksi,"SELECT * FROM mahasiswa");}
                        $query = $_POST['query'];
                     
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['npm']; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['tempat_lahir']; ?> </td>
                        <td> <?php echo $data['tanggal_lahir']; ?> </td>
                        <td> <?php echo $data['jenis_kelamin']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['kode_pos']; ?> </td>
                        <td>
                            <a href="edit_mahasiswa.php?idmahasiswa=<?php echo $data['idmahasiswa']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?idmahasiswa=<?php echo $data['idmahasiswa']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>