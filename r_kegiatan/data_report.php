<?php
include '../utilities/sidebar.php';
$username = $_SESSION['username'];

?>

<div class="pagetitle">
  <h1>Halaman Laporan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Laporan Kegiatan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Cetak Kegiatan</h5>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th class="text-center">Kegiatan(Hari)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include '../koneksi/koneksi.php';
                
                $query = "SELECT tb_magang.username AS username, tb_magang.nama AS nama, tb_kegiatan.usn_kegiatan AS usn_kegiatan, COUNT(tanggal) AS tanggal FROM tb_magang INNER JOIN tb_kegiatan ON tb_magang.username = usn_kegiatan GROUP BY tb_magang.username";

                $data = mysqli_query($konek, $query);
                $no = 0;
                while ($row = mysqli_fetch_array($data))     
                {
                    $no++;
                    echo "<tr>
                    <td>$no</td>
                    <td>$row[nama]</td>
                    <td class='text-center'>$row[tanggal]</td>";
                    if ($_SESSION['status'] == 'admin') {
                        echo "<td><div class='btn-row'>
                            <div class='btn-group'>
                            <a href='./cetak_report.php?username=$row[username]' class='btn btn-info'><i class='ri-printer-fill'></i></a>
                            </div>
                            </div>
                            </td>";
                        } else {
                            if ($_SESSION['username'] == $row['username']) {
                                echo "<td><div class='btn-row'>
                                <div class='btn-group'>
                                <a href='./cetak_report.php?username=$row[username]' class='btn btn-info'><i class='ri-printer-fill'></i></a>
                                </div>
                                </div>
                                </td>
                        </tr>";
                            
                        } else {
                            echo "<td><div class='btn-row'>
                            <div class='btn-group'>
                            </div>
                            </div>
                            </td>";
                    }
                }
            }
                    ?>
                </tbody>
            </div>
        </div>
    </section>
    

<?php
include '../utilities/footer.php';
?>