<?php
include '../koneksi/koneksi.php';
while (true) {
    //ambil jam sekarang
    $jam_sekarang = date("H:i:s");

    //jika jam sekarang sama dengan jam absen yang ditentukan
    if ($jam_sekarang == $jam_absen) {
        //query untuk menambahkan absen tidak hadir untuk semua user yang belum absen
        $query = "INSERT INTO absensi (username, status, tanggal) SELECT username, 'tidak hadir', CURDATE() FROM biodata WHERE username NOT IN (SELECT username FROM absensi WHERE tanggal = CURDATE())";

        $result = mysqli_query($konek, $query);
        if (!$result) {
            die("Error: " . mysqli_error($konek));
        }
    }
    //sleep selama 1 jam
    sleep(3600);
}