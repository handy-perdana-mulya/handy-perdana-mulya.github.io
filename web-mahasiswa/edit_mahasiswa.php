<?php
    include "koneksi.php";
    $id = $_GET['idmahasiswa'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE idmahasiswa='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

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
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Customer
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" value="<?php echo $data['npm'] ?>" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" name="tempatlahir" value="<?php echo $data['tempat_lahir'] ?>" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="date" name="tanggallahir" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <input type="text" name="jeniskelamin" value="<?php echo $data['jenis_kelamin'] ?>" class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kodepos">Kodepos</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kode_pos'] ?>" class="form-control col-md-9" placeholder="Masukkan Kodepos">
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
        if(isset($_POST['simpan']))
        {
            $npm           = $_POST['npm'];
            $nama          = $_POST['nama'];
            $tempatlahir   = $_POST['tempatlahir'];
            $tanggallahir  = $_POST['tanggallahir'];
            $jeniskelamin  = $_POST['jeniskelamin'];
            $alamat        = $_POST['alamat'];
            $kodepos       = $_POST['kodepos'];

            mysqli_query($koneksi, "UPDATE mahasiswa 
            SET npm='$npm', nama='$nama', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', jenis_kelamin='$jeniskelamin', alamat='$alamat', kode_pos='$kodepos'
            WHERE idmahasiswa='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa/data_mahasiswa.php'>";
        }
?>