<?php

include '../koneksi/koneksi.php';
session_start();
$id_user = $_SESSION['id_user'];

if (!isset($_SESSION['id_user'])) {
    header("Location: ../login/halaman_login.php");
}
if ($_SESSION['status'] != "admin") {
    header("Location: ../pages-error-404.html");
} else if (isset($_POST['submit'])) {
    $id_user = $_SESSION['id_user'];
    $usn = $_POST['usn'];
    $tanggal = $_POST['tanggal'];
    $pelanggaran = $_POST['pelanggaran'];
    $keterangan = $_POST['keterangan'];

    $num = mysqli_query($konek, "SELECT id_pelanggaran FROM tb_pelanggaran ORDER BY id_pelanggaran DESC");
    if (mysqli_num_rows($num) > 0) {
        $num = mysqli_fetch_array($num);
        $id = $num['id_pelanggaran'] + 1;
    }else {
        $id = 1;
    }
    $sql = "INSERT INTO tb_pelanggaran (id_pelanggaran, usn_pelanggaran, tanggal, pelanggaran, keterangan) VALUES ('$id', '$usn', '$tanggal', '$pelanggaran', '$keterangan')";
    
    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Pelanggaran telah berhasil ditambahkan!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=admin_pelanggaran.php">';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }
}
mysqli_close($konek);


?>