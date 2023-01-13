<?php

include '../koneksi/koneksi.php';
session_start();
$id_user = $_SESSION['id_user'];

if (!isset($_SESSION['id_user'])) {
    header("Location: ../login/halaman_login.php");
}
if ($_SESSION['status'] != "user") {
    header("Location: ../pages-error-404.html");
} else if (isset($_POST['submit'])) {
    $id_user = $_SESSION['id_user'];
    $usn = $_POST['usn'];
    $tanggal = $_POST['tanggal'];
    $kegiatani = $_POST['kegiatani'];
    $kegiatanii = $_POST['kegiatanii'];
    $kegiataniii = $_POST['kegiataniii'];
    $kegiataniv = $_POST['kegiataniv'];
    $kegiatanv = $_POST['kegiatanv'];

    $num = mysqli_query($konek, "SELECT id_kegiatan FROM tb_kegiatan ORDER BY id_kegiatan DESC");
    if (mysqli_num_rows($num) > 0) {
        $num = mysqli_fetch_array($num);
        $idkegiatan = $num['id_kegiatan'] + 1;
    }else {
        $idkegiatan = 1;
    }
    $sql = "INSERT INTO tb_kegiatan (id_kegiatan, usn_kegiatan, tanggal, kegiatan_i, kegiatan_ii, kegiatan_iii, kegiatan_iv, kegiatan_v) VALUES ('$idkegiatan', '$usn', '$tanggal', '$kegiatani', '$kegiatanii', '$kegiataniii', '$kegiataniv', '$kegiatanv')";
    
    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Kegiatan telah berhasil ditambahkan!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=data_kegiatan.php">';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }
}
mysqli_close($konek);


?>