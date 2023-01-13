<?php
include '../utilities/sidebar.php';
$username = $_SESSION['username'];

if ($_SESSION['status'] != 'admin') {
    echo "<script>
    window.location.href='../pages-error-404.html'
    </script>";
} else {
?>

<div class="pagetitle">
  <h1>Halaman Kegiatan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Catatan Kegiatan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Catatan Kegiatan PKL</h5>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th class="text-center">Kegiatan(Hari)</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                include '../koneksi/koneksi.php';
                
                $query = "SELECT tb_magang.username AS username, tb_magang.nama AS nama, tb_kegiatan.usn_kegiatan AS usn, COUNT(tanggal = 'tanggal') AS tanggal FROM tb_magang INNER JOIN tb_kegiatan ON tb_magang.username = usn_kegiatan GROUP BY tb_magang.username ORDER BY tanggal DESC";

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
                            <a href='./detail_kegiatan.php?username=$row[username]' class='btn btn-info'><i class='ri-user-fill'></i></a>
                            </div>
                            </div>
                            </td>";
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