<?php
include '../koneksi/koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // $usn = $_POST['usn'];
    $tanggal = $_POST['tanggal'];
    $pelanggaran = $_POST['pelanggaran'];
    $keterangan = $_POST['keterangan'];
    $sql = "UPDATE tb_pelanggaran SET tanggal = '$tanggal', pelanggaran = '$pelanggaran', keterangan = '$keterangan' WHERE id_pelanggaran = '$id'";

    if (mysqli_query($konek, $sql)) {
        echo "<script>alert('Pelanggaran telah berhasil diperbaharui!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=admin_pelanggaran.php'>";
    } else {
        echo "Gagal Diperbaharui " . mysqli_error($konek);
    }
}
?>
