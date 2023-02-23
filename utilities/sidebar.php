<?php
session_start();

if (!isset($_SESSION['id_user']) && $_SESSION['id_user'] == false) {
  header('location:../login/halaman_login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APLIKASI PKL DPPKBPM</title>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->

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
        <a class="nav-link" href="../index.php">
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
      <?php if ($_SESSION['status'] == 'admin'){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="../nilai/data_nilai.php">
          <i class="bi bi-journal-text"></i><span>Penilaian</span>
        </a>
      </li><!-- End Forms Nav -->
      <?php } ?>
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="../surat/data_balasan.php">
          <i class="ri-draft-line"></i><span>Surat Balasan</span>
        </a>
      </li> -->

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
          <?php if ($_SESSION['status'] == 'admin'){ ?>
          <li>
            <a href="../r_riwayat/data_report.php">
              <i class="bi bi-circle"></i><span>Riwayat Anak Magang</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </li><!-- End Tables Nav -->
  </aside><!-- End Sidebar-->

  <main id="main" class="main">


