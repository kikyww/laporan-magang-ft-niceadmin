<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';

$query = mysqli_query($konek, "SELECT * FROM tb_magang");
$q = mysqli_query($konek, "SELECT COUNT(username) as username FROM tb_magang");
$r = mysqli_fetch_assoc($q);

$data = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

$today = date('Y-m-d');
$jumlah_aktif = 0;

foreach ($data as $pkl) {
    if ($pkl['tgl_masuk'] <= $today && $today <= $pkl['tgl_keluar']) {
        $jumlah_aktif++;
    }
}

?>
<div class="bg-dppkbpm">
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title">Jumlah Anak PKL <span>| Aktif</span></h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-person"></i>
          </div>
          <div class="ps-3">
          <h6><?= $jumlah_aktif ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section dashboard">
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title">Jumlah Anak PKL <span>| Total</span></h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-light">
            <i class="bi bi-person"></i>
          </div>
          <div class="ps-3">
          <h6><?= $r['username'] ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<?php 
include ('../utilities/footer.php');
?>