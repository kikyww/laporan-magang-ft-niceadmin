<?php
    include '../koneksi/koneksi.php';
    $id = $_GET['id'];
    $h_pelanggaran = mysqli_query($konek, "DELETE FROM tb_pelanggaran WHERE id_pelanggaran='$id'");
    echo "<script>alert('Pelanggaran berhasil dihapus');</script>";
    echo '<meta http-equiv="refresh" content="1;url=admin_pelanggaran.php">';
?>