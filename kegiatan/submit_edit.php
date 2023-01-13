<?php
include '../koneksi/koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // $usn = $_POST['usn'];
    $tanggal = $_POST['tanggal'];
    $kegiatani = $_POST['kegiatani'];
    $kegiatanii = $_POST['kegiatanii'];
    $kegiataniii = $_POST['kegiataniii'];
    $kegiataniv = $_POST['kegiataniv'];
    $kegiatanv = $_POST['kegiatanv'];
    $sql = "UPDATE tb_kegiatan SET tanggal = '$tanggal', kegiatan_i = '$kegiatani', kegiatan_ii = '$kegiatanii', kegiatan_iii = '$kegiataniii', kegiatan_iv = '$kegiataniv', kegiatan_v = '$kegiatanv' WHERE id_kegiatan = '$id'";

    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Kegiatan telah berhasil diperbaharui!');</script>";
        echo '<meta http-equiv="refresh" content="0; url=data_kegiatan.php">';
    } else {
        echo "Gagal Diperbaharui " . mysqli_error($konek);
    }
}
?>
