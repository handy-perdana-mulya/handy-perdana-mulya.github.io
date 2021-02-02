<?php
    include "koneksi.php";
    $id = $_GET['idmahasiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE idmahasiswa='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa/data_mahasiswa.php'>";
?>