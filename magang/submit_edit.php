<?php
include '../koneksi/koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $induk = $_POST['induk'];
    $lahir = $_POST['lahir'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telepon = $_POST['telepon'];
    $instansi = $_POST['instansi'];
    $jurusan = $_POST['jurusan'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $password = $_POST['password'];

    $sql = "UPDATE tb_magang
        INNER JOIN tb_user ON tb_magang.id_magang = tb_user.id_user
        SET tb_magang.nama='$nama', tb_magang.username='$username', tb_magang.induk='$induk', tb_magang.tgl_lahir='$lahir', tb_magang.alamat='$alamat', tb_magang.telepon='$telepon', tb_magang.instansi='$instansi', tb_magang.jurusan='$jurusan', tb_magang.tgl_masuk='$masuk', tb_magang.tgl_keluar='$keluar', tb_magang.password='$password', tb_user.username='$username', tb_user.password='$password' WHERE id_magang='$id'";

    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Data $nama telah berhasil diperbaharui!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=data_magang.php">';
    } else {
        echo "Error updating record: " . mysqli_error($konek);
    }
}
?>


