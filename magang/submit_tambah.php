<?php 

include '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
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
    $status = $_POST['status'];

    $num = mysqli_query($konek, "SELECT id_user FROM tb_user ORDER BY id_user DESC");
    if (mysqli_num_rows($num) > 0) {
        $num = mysqli_fetch_array($num);
        $idUser = $num['id_user'] + 1;
    }else {
        $idUser = 1;
    }
    $sql = "INSERT INTO tb_user VALUE ('$idUser', '$username', '$password', '$status')";
    if (mysqli_query($konek, $sql)) {
    $sql = "INSERT INTO tb_magang VALUE ('$idUser', '$nama', '$username', '$induk', '$lahir', '$alamat', '$jk', '$telepon', '$instansi', '$jurusan', '$masuk', '$keluar', '$password', '$status')";
        mysqli_query($konek, $sql);
        echo "<script>alert(`1 $status telah anda tambahkan`);</script>";
        echo '<meta http-equiv="refresh" content="0; url=data_magang.php">';
    } else {
        echo "<script>alert(`Username Telah Digunakan!`);</script>";
    }
}

?>