<?php
include '../koneksi/koneksi.php';
// $status = $_SESSION['status'];

// if ($_SESSION['status'] == 'user') {
//    echo"<script>window.location.href = '../pages-error-404.html'</script>";
// } else {

    $id = $_GET['id'];
    $hm = mysqli_query($konek, "DELETE FROM tb_magang WHERE id_magang='$id'");
    $hu = mysqli_query($konek, "DELETE FROM tb_user WHERE id_user = '$id'");
    echo "<script>alert('Data berhasil dihapus');</script>";
    echo '<meta http-equiv="refresh" content="1;url=data_magang.php">';
// }
?>