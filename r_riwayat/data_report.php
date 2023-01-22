<?php
include '../utilities/sidebar.php';

if ($_SESSION['status'] != 'admin') {
    echo "<script>
    window.location.href='../pages-error-404.html'
    </script>";
} else {

    ?>

<div class="pagetitle">
  <h1>Halaman Laporan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Laporan Riwayat</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Cetak Riwayat</h5>
                <div class="d-flex justify-content-end align-items-center" style="margin-right: 35x;">
                    <a style="margin-right: 20px;" class="btn btn-info" href="cetak_report.php"><i class='ri-printer-fill'></i></a>
                </div>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Jurusan</th>
                        <th>Akumulasi Nilai</th>
                        <th>Konversi Nilai</th>
                        <th>Status Panggilan</th>
                        <th>Status PKL</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi/koneksi.php';
                    // $query = "SELECT * FROM (((tb_magang m LEFT JOIN tb_absen a ON  m.username = a.usn) LEFT JOIN tb_pelanggaran p ON m.username = p.usn_pelanggaran) LEFT JOIN tb_nilai n ON m.username = n.usn_nilai) GROUP BY m.nama ORDER BY nama ASC";
                
                    // $query = "SELECT DISTINCT tb_magang.username AS username, tb_magang.nama AS nama, tb_magang.instansi AS instansi, tb_magang.tgl_keluar AS tgl_keluar, tb_magang.tgl_masuk AS tgl_masuk, tb_magang.jurusan AS jurusan, tb_pelanggaran.usn_pelanggaran AS usn_pelanggaran, tb_pelanggaran.pelanggaran AS pelanggaran, COUNT(pelanggaran) AS pelanggaran, tb_absen.usn AS usn, tb_absen.kehadiran AS kehadiran, COUNT(kehadiran) AS kehadiran, tb_nilai.usn_nilai AS usn_nilai, tb_nilai.rata_rata AS rata_rata, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang INNER JOIN tb_pelanggaran INNER JOIN tb_absen INNER JOIN tb_nilai GROUP BY tb_pelanggaran.id_pelanggaran, tb_absen.id_absen, tb_nilai.id_nilai ORDER BY nama ASC";
                
                    // $query = "SELECT * FROM (((tb_magang m LEFT JOIN tb_absen a ON  m.username = a.usn), COUNT(pelanggaran) AS pelanggaran LEFT JOIN tb_pelanggaran p ON m.username = p.usn_pelanggaran) LEFT JOIN tb_nilai n ON m.username = n.usn_nilai) GROUP BY m.nama ORDER BY nama ASC";
                
                    // $query = "SELECT DISTINCT tb_magang.username AS username, tb_magang.nama AS nama, tb_magang.instansi AS instansi, tb_magang.tgl_keluar AS tgl_keluar, tb_magang.tgl_masuk AS tgl_masuk, tb_magang.jurusan AS jurusan, tb_pelanggaran.usn_pelanggaran AS usn_pelanggaran, COUNT(pelanggaran) AS pelanggaran, tb_absen.usn AS usn, COUNT(kehadiran) AS kehadiran, tb_nilai.usn_nilai AS usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang INNER JOIN tb_pelanggaran INNER JOIN tb_absen INNER JOIN tb_nilai GROUP BY tb_magang.instansi ORDER BY nama ASC";
                
                    // $query = "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_keluar, tb_magang.tgl_masuk, tb_magang.jurusan, tb_pelanggaran.usn_pelanggaran, COUNT(pelanggaran) AS pelanggaran, IFNULL(tb_pelanggaran.pelanggaran, 0) as pelanggaran, tb_absen.usn, COUNT(kehadiran) AS kehadiran, IFNULL(tb_absen.kehadiran, 0) as kehadiran, tb_nilai.usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang LEFT JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran LEFT JOIN tb_absen ON tb_magang.username = tb_absen.usn LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai GROUP BY tb_magang.username ORDER BY tb_magang.nama ASC";
                
                    // $query = "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_keluar, tb_magang.tgl_masuk, tb_magang.jurusan, tb_pelanggaran.usn_pelanggaran, COUNT(pelanggaran) AS pelanggaran, tb_absen.usn,  tb_nilai.usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang LEFT JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran LEFT JOIN tb_absen ON tb_magang.username = tb_absen.usn LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai GROUP BY tb_magang.username, tb_pelanggaran.usn_pelanggaran, tb_absen.usn ORDER BY tb_magang.nama ASC";
                

                    // $query = "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_keluar, tb_magang.tgl_masuk, tb_magang.jurusan, tb_pelanggaran.usn_pelanggaran, IFNULL(SUM(tb_pelanggaran.pelanggaran), 0) AS pelanggaran, tb_absen.usn, IFNULL(SUM(tb_absen.kehadiran), 0) AS kehadiran, tb_nilai.usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang INNER JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran INNER JOIN tb_absen ON tb_magang.username = tb_absen.usn INNER JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai GROUP BY tb_magang.username, tb_pelanggaran.usn_pelanggaran, tb_absen.usn ORDER BY tb_magang.nama ASC ";
                    // $query = "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_masuk, tb_magang.tgl_keluar, tb_magang.jurusan, tb_nilai.rata_rata, tb_pelanggaran.pelanggaran, (IFNULL(tb_nilai.rata_rata, 0) - tb_pelanggaran.pelanggaran) AS total_score FROM tb_magang LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai LEFT JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran GROUP BY tb_magang.username ORDER BY tb_magang.nama ASC"; $data = mysqli_query($konek, $query);
                
                    $query = "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_keluar, tb_magang.tgl_masuk, tb_magang.jurusan, tb_magang.tgl_masuk, tb_magang.tgl_keluar, tb_magang.id_magang, tb_nilai.usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata, COUNT(pelanggaran) AS pelanggaran FROM tb_magang LEFT JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai GROUP BY tb_magang.username ORDER BY tb_magang.nama ASC";
                    $data = mysqli_query($konek, $query);

                    $tanggal_sekarang = date('Y-m-d');
                    $no = 0;
                    $total = 0;
                    while ($row = mysqli_fetch_array($data)) {
                        // $date1 = new DateTime($row['tgl_masuk']);
                        // $date2 = new DateTime($row['tgl_keluar']);
                        // $interval = $date1->diff($date2);
                        // $jumlah_hari = $interval->format('%a');
                
                        // $weekend_holidays = 8;
                        // $weekend = round(($jumlah_hari / 30) * $weekend_holidays);
                        //  $total += $score;
                        $no++;

                        if ($row['rata_rata'] == true) {
                            $poin = 0.3;
                            $score = $row['rata_rata'] - ($row['pelanggaran'] * $poin);
                        } else {
                            $poin = 0;
                            $score = $row['rata_rata'] - ($row['pelanggaran'] * $poin);
                        }
                        if ($row['tgl_keluar'] >= $row['tgl_masuk'] && $tanggal_sekarang < $row['tgl_keluar']) {
                            $status = "<span class='badge rounded-pill bg-success'>Aktif</span>";
                        } else {
                            $status = "<span class='badge rounded-pill bg-danger'>Non Aktif</span>";
                        }
                        if ($score >= 90) {
                            $huruf = "A";
                            $rekomendasi = "<span class='badge rounded-pill bg-success'>Sangat Rekomendasi</span>";
                        } else if ($score >= 85) {
                            $huruf = "B+";
                            $rekomendasi = "<span class='badge rounded-pill bg-info'>Rekomendasi</span>";
                        } else if ($score >= 80) {
                            $huruf = "B";
                            $rekomendasi = "<span class='badge rounded-pill bg-info'>Rekomendasi</span>";
                        } else if ($score >= 75) {
                            $huruf = "C+";
                            $rekomendasi = "<span class='badge rounded-pill bg-warning'>Tidak Rekomendasi</span>";
                        } else if ($score >= 70) {
                            $huruf = "C";
                            $rekomendasi = "<span class='badge rounded-pill bg-warning'>Tidak Rekomendasi</span>";
                        } else if ($score >= 60) {
                            $huruf = "D";
                            $rekomendasi = "<span class='badge rounded-pill bg-danger'>Sangat Tidak Rekomendasi</span>";
                        } else {
                            $huruf = "E";
                            $rekomendasi = "<span >-</span>";
                        }

                        echo "<tr>
                        <td>$no</td>
                        <td>$row[nama]</td>
                        <td>$row[instansi]</td>
                        <td>$row[jurusan]</td>
                        <td>$score</td>
                        <td>$huruf</td>
                        <td>$rekomendasi</td>
                        <td>$status</td>
                        <td>
                        <div class='btn-row'>
                            <div class='btn-group'>
                                <a href='./detail_riwayat.php?id=$row[8]' class='btn btn-warning'><i class='ri ri-contacts-book-2-fill'></i></a>
                                </div>
                            </div>
                        </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </div>
        </div>
    </section>
    


<?php
}
include '../utilities/footer.php';
?>