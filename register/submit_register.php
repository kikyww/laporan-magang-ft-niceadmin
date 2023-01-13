<?php 

include '../koneksi/koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['namaregister'];
    $username = $_POST['usernameregister'];
    $induk = $_POST['indukregister'];
    $lahir = $_POST['lahirregister'];
    $alamat = $_POST['alamatregister'];
    $jk = $_POST['jk'];
    $telepon = $_POST['teleponregister'];
    $instansi = $_POST['instansiregister'];
    $jurusan = $_POST['jurusanregister'];
    $masuk = $_POST['masukregister'];
    $keluar = $_POST['keluarregister'];
    $password = $_POST['passwordregister'];
    $status = $_POST['status'];
    $keaktifan = $_POST['keaktifan'];

    $num = mysqli_query($konek, "SELECT id_user FROM tb_user ORDER BY id_user DESC");
    if (mysqli_num_rows($num) > 0) {
        $num = mysqli_fetch_array($num);
        $idUser = $num['id_user'] + 1;
    }else {
        $idUser = 1;
    }
    $sql = "INSERT INTO tb_user VALUE ('$idUser', '$username', '$password', '$status')";
if (mysqli_query($konek, $sql)) {
    $sql = "INSERT INTO tb_magang VALUE ('$idUser', '$nama', '$username', '$induk', '$lahir', '$alamat', '$jk', '$telepon', '$instansi', '$jurusan', '$masuk', '$keluar', '$password', '$status', '$keaktifan')";
        mysqli_query($konek, $sql);
        echo "<script>alert('Selamat! anda berhasil registrasi');</script>";
        echo '<meta http-equiv="refresh" content="0; url=../login/halaman_login.php">';
    } else {
    echo 'Terjadi kesalahan pada register: ' . mysqli_error($konek);
    }
}

?>