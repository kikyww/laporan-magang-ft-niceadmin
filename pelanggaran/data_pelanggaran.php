<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';
    $username = $_SESSION['username'];    
    $status = $_SESSION['status'];
if ($status == 'admin') {
    echo "<script>
    window.location.href = 'admin_pelanggaran.php';</script>";
} else {

    ?>

<div class="pagetitle">
  <h1>Halaman Pelanggaran</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Halaman Pelanggaran</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body"> 
                <h5 class="card-title">Pelanggaran</h5>
                <div style="display:flex; justify-content:space-between; margin-right: 35
                x; margin-bottom: 20px;">
                    <?php
                    date_default_timezone_set('Singapore');
                    echo date('l, d-m-Y / H:i');
                    ?>
                </div>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="">
                        <th>No</th>
                        <?php if ($status == "admin") {
                        echo "<th>Nama</th>";
                    } ?>
                        <th>Tanggal</th>
                        <th>Pelanggaran</th>
                        <th>Keterangan</th>
                        <?php if ($status == "admin") {
                        echo "<th>Aksi</th>";
                    } ?>
                    </tr>
                </thead>
            <tbody>
<?php
        if (isset($_GET['user_id'])) {
            $username = $_SESSION['username'];
            $usn = trim($_GET['usn_pelanggaran']);
            $tanggal = trim($_GET['tanggal']);
            $keterangan = trim($_GET['keterangan']);
        } else if ($status != 'user') {
            $query = mysqli_query($konek, "SELECT tb_pelanggaran.*, tb_magang.username, tb_magang.nama FROM tb_pelanggaran INNER JOIN tb_magang ON tb_pelanggaran.usn_pelanggaran = tb_magang.username ORDER BY tanggal DESC");
        } else {
            $query = mysqli_query($konek, "SELECT tb_pelanggaran.*, tb_magang.username, tb_magang.nama FROM tb_pelanggaran INNER JOIN tb_magang ON tb_pelanggaran.usn_pelanggaran = tb_magang.username WHERE usn_pelanggaran = '$username' ORDER BY tanggal DESC");
        }

        $no = 0;
        while ($row = mysqli_fetch_array($query)) {
            $no++;
            echo "<tr>
                <td>$no</td>";
            if ($status == "admin") {
                echo "<td>$row[nama]</td>";
            }
            echo "<td>$row[tanggal]</td>
                <td>$row[pelanggaran]</td>
                <td>$row[keterangan]</td>";
            if ($status == "admin") {
                echo "<td><div class='btn-row'>
                <div class='btn-group'>
                    <a href='edit_absensi.php?id=$row[0]' class='btn btn-warning'><i class='ri ri-draft-fill'></i></a>
                    <a href='hapus_absensi.php?id=$row[0]' onclick='return confirm(\" Hapus Data ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
                    </div>
                </div>";
            }
            echo "</td>
        </tr>";
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