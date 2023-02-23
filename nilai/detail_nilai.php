<?php
include '../koneksi/koneksi.php';
// $id = $_GET['id'];
$username = $_GET['username'];
session_start();

if (!isset($_SESSION['id_user']) && $_SESSION['id_user'] == false) {
  header('location:../login/halaman_login.php');
  exit;
}

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    include '../koneksi/koneksi.php';

    $query = mysqli_query($konek ,"SELECT tb_magang.nama, tb_magang.username, tb_magang.instansi, tb_nilai.id_nilai, IFNULL(tb_nilai.n_sopan, 0) as n_sopan, IFNULL(tb_nilai.n_disiplin, 0) as n_disiplin, IFNULL(tb_nilai.n_keaktifan, 0) as n_keaktifan, IFNULL(tb_nilai.n_sungguh, 0) as n_sungguh, IFNULL(tb_nilai.n_mandiri, 0) as n_mandiri, IFNULL(tb_nilai.n_bersama, 0) as n_bersama, IFNULL(tb_nilai.n_teliti, 0) as n_teliti, IFNULL(tb_nilai.n_pendapat, 0) as n_pendapat, IFNULL(tb_nilai.n_menyerap, 0) as n_menyerap, IFNULL(tb_nilai.n_kreatif, 0) as n_kreatif, IFNULL(tb_nilai.rata_rata, 0) as rata_rata FROM tb_magang LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laporan Magang Cuy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon3.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- Bootstrap 5.4 -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->

  <!-- jquery -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->

  <style>
table {
    display: flex;
    /* justify-content:center; */
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  vertical-align: top;
  border: 1px solid #252525;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #f2f2f2;
  color: black;
}

th, td {
  height: 50px;
  display: flex;
  align-items: center;
}

th {
  width: 20rem; 
  text-align: left;
}

td {
  width: 10rem; 
  text-align: right;
}


  </style>


</head>

<body>

  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../utilities/dashboard.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo3.png" alt="">
        <span class="d-none d-lg-block">DPPKBPM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/avatar.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'];?></span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <!-- <li>
              <span class=" dropdown-header"><?php echo $_SESSION['username'];?></span>
            </li> -->
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../login/logout.php" onclick="return confirm('Ingin logout?');">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../magang/data_magang.php">
              <i class="bi bi-circle"></i><span>Data Anak Magang</span>
            </a>
          </li>
          <li>
            <a href='../absensi/data_absensi.php'>
              <i class="bi bi-circle"></i><span>Absensi</span>
            </a>
          </li>
          <li>
            <?php 
            if ($_SESSION['status'] != 'admin') {
              echo "<a href='../kegiatan/data_kegiatan.php'>";
            } else {
              echo "<a href='../kegiatan/admin_kegiatan.php'>";
            }
            ?>
              <i class="bi bi-circle"></i><span>Catatan Kegiatan</span>
            </a>
          </li>
          <li>
          <?php 
            if ($_SESSION['status'] != 'admin') {
              echo "<a href='../pelanggaran/data_pelanggaran.php'>";
            } else {
              echo "<a href='../pelanggaran/admin_pelanggaran.php'>";
            }
            ?>
              <i class="bi bi-circle"></i><span>Pelanggaran</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link" href="../nilai/data_nilai.php">
          <i class="bi bi-journal-text"></i><span>Penilaian</span>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../r_absensi/data_report.php">
              <i class="bi bi-circle"></i><span>Laporan Absensi</span>
            </a>
          </li>
          <li>
            <a href="../r_kegiatan/data_report.php">
              <i class="bi bi-circle"></i><span>Laporan Kegiatan</span>
            </a>
          </li>
          <li>
            <a href="../r_pelanggaran/data_report.php">
              <i class="bi bi-circle"></i><span>Laporan Pelanggaran</span>
            </a>
          </li>
          <li>
            <a href="../r_nilai/data_report.php">
              <i class="bi bi-circle"></i><span>Laporan Nilai</span>
            </a>
          </li>
          <li>
            <a href="../r_riwayat/data_report.php">
              <i class="bi bi-circle"></i><span>Riwayat Anak Magang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
    <h1>Halaman Catatan Nilai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Catatan Nilai</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Catatan Nilai</h5>
            <table class="table table-header-rotated" id="idcuy">
                <thead>
                    <tr class="">
                        <th hidden>Username</th>
                        <th>Aktivitas Yang Dinilai</th>
                        <th>Sopan Santun</th>
                        <th>Kedisiplinan</th>
                        <th>Keaktifan</th>
                        <th>Kesungguhan</th>
                        <th>Kemampuan Bekerja Mandiri</th>
                        <th>Kemampuan Bekerja Sama</th>
                        <th>Ketelitian</th>
                        <th>Kemampuan Mengemukakan Pendapat</th>
                        <th>Kemampuan Menyerap Hal Baru</th>
                        <th>Inisiatif dan Kreatifitas</th>
                        <th>Rata-Rata Nilai</th>
                    </tr>
                </thead>
            <tbody>

<?php
$no = 0;
    while ($row = mysqli_fetch_array($query)) {
if ($_GET['username'] == $row['username']) {
    $no++;
echo"
    <tr>
        <td hidden>$row[username]</td>
        <td class='text-bold'><strong>Nilai</strong></td>
        <td>$row[n_sopan]</td>
        <td>$row[n_disiplin]</td>
        <td>$row[n_keaktifan] </td>
        <td>$row[n_sungguh] </td>
        <td>$row[n_mandiri] </td>
        <td>$row[n_bersama] </td>
        <td>$row[n_teliti] </td>
        <td>$row[n_pendapat] </td>
        <td>$row[n_menyerap] </td>
        <td>$row[n_kreatif] </td>
        <td>$row[rata_rata] </td>
        </tr>
        <div class='btn-row'>
            <div class='mb-3'>
                <a href='edit_nilai.php?id=$row[3]' class='btn btn-warning'>Edit Nilai</a>
                <a href='hapus_nilai.php?id=$row[3]' onclick='return confirm(\" Hapus Nilai ini?\");' class='btn btn-danger'>Hapus Nilai</a>
                
            ";
        if ($row['n_sopan'] == false) {
          echo "
              <a class='btn btn-success' href='tambah_nilai.php?username=$row[username]'>Tambah Nilai</a>
             
              ";
        } else {
          echo "
         ";
        }
    }
} 
?>
  </div>
 </div>
</tbody>
    </table>
</div>
        </div>
    </section>

    </main>

<footer id="footer" class="footer">
    <div class="copyright">
    </div>
    <div class="credits">
  </div>
  </footer><!-- End Footer -->

  <!-- Bootstrap 5.4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#idcuy').DataTable()({
        scrollx: true
    });
});
  </script> -->

    <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  </body>

</html>