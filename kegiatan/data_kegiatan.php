<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';
    $username = $_SESSION['username'];    
    $status = $_SESSION['status'];

    if(!isset($username)){
        echo"window.location.href='../pages-error-404.html'";
    } else {
?>

<div class="pagetitle">
  <h1>Catatan Kegiatan</h1>
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
                <h5 class="card-title">Catatan Kegiatan Harian</h5>
                <div style="display:flex; justify-content:space-between; margin-right: 35
                x; margin-bottom: 20px;">
                    <?php
    date_default_timezone_set('Singapore');
    echo date('l, d-m-Y / H:i');
                    ?>
                    <a class="btn btn-success" href="tambah_kegiatan.php">Tambah</a>
                </div>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="">
                        <th>No</th>
                        <?php if ($status == "admin") {
                            echo "<th>Username</th>";} ?>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
<?php
    if(isset($_GET['user_id'])) {
        $username = $_SESSION['username'];
        $usn_kegiatan = trim($_GET['usn_kegiatan']);
        $tanggal = trim($_GET['tanggal']);
        $kegiatan_i = trim($_GET['kegiatan_i']);
        $kegiatan_i = trim($_GET['kegiatan_ii']);
        $kegiatan_i = trim($_GET['kegiatan_iii']);
        $kegiatan_i = trim($_GET['kegiatan_iv']);
        $kegiatan_i = trim($_GET['kegiatan_v']);
    } else if ($status != 'user' ) {
        $query = mysqli_query($konek, "SELECT * FROM tb_kegiatan ORDER BY tanggal DESC");
    } else {
        $query = mysqli_query($konek, "SELECT * FROM tb_kegiatan WHERE usn_kegiatan = '$username' ORDER BY tanggal DESC");
    }

        $no = 0;
    while ($row = mysqli_fetch_array($query)) {
        $no++;
            echo "<tr>
                <td>$no</td>";
                if ($status == "admin"){
                    echo "<td>$row[usn_kegiatan]</td>";
                }
            echo"<td>$row[tanggal]</td>
                <td>- $row[kegiatan_i]<br>";
                if($row['kegiatan_ii'] == true) {
                    echo "- $row[kegiatan_ii] <br>";
                }
                if($row['kegiatan_iii'] == true) {
                    echo "- $row[kegiatan_iii] <br>";
                }
                if($row['kegiatan_iv'] == true) {
                    echo "- $row[kegiatan_iv] <br>";
                }
                if($row['kegiatan_v'] == true) {
                    echo "- $row[kegiatan_v] <br>";
                }
                echo"</td>
                <td><div class='btn-row'>
                <div class='btn-group'>
                    <a href='edit_kegiatan.php?id=$row[0]' class='btn btn-warning'><i class='ri ri-draft-fill'></i></a>
                    <a href='hapus_kegiatan.php?id=$row[0]' onclick='return confirm(\" Hapus Kegiatan ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
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