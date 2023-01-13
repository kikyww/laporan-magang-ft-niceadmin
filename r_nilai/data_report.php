<?php
include '../utilities/sidebar.php';
$username = $_SESSION['username'];
$status = $_SESSION['status'];
if (!isset($status)) {
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
      <li class="breadcrumb-item active">Laporan Nilai</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Cetak Nilai</h5>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>instansi</th>
                        <th class="text-center">Nilai Akhir</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include '../koneksi/koneksi.php';
                
                $query = mysqli_query($konek ,"SELECT tb_magang.nama, tb_magang.username, tb_magang.instansi, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai ORDER BY nama ASC");
                $no = 0;
                while ($row = mysqli_fetch_array($query))     
                {
                    $no++;
                    echo "<tr>
                    <td>$no</td>
                    <td>$row[nama]</td>
                    <td>$row[instansi]</td>
                    <td class='text-center'>$row[rata_rata]</td>";
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
    

<?php } ?>
<?php
include '../utilities/footer.php';
?>