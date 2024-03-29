<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';
    $username = $_SESSION['username'];    
    $status = $_SESSION['status'];

?>

<div class="pagetitle">
  <h1>Absensi</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Tambah Absen</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body"> 
                <h5 class="card-title">Absensi</h5>
                <div style="display:flex; justify-content:space-between; margin-right: 35
                x; margin-bottom: 20px;">
                    <?php
    date_default_timezone_set('Singapore');
    echo date('l, d-m-Y / H:i');
                    ?>
                    <a class="btn btn-success" href="tambah_absensi.php">Absen</a>
                </div>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="">
                        <th>No</th>
                        <?php if ($status == "admin") {
                            echo "<th>Username</th>";} ?>
                        <th>Tanggal dan Waktu</th>
                        <th>Kehadiran</th>
                        <th>Keterangan</th>
                        <?php if ($status == "admin") {
                            echo "<th>Aksi</th>";} ?>
                    </tr>
                </thead>
            <tbody>
<?php
    if(isset($_GET['user_id'])) {
        $username = $_SESSION['username'];
        $usn = trim($_GET['usn']);
        $tanggal = trim($_GET['tanggal']);
        $kehadiran = trim($_GET['kehadiran']);
        $keterangan = trim($_GET['keterangan']);
    } else if ($status != 'user' ) {
        $query = mysqli_query($konek, "SELECT * FROM tb_absen ORDER BY tanggal DESC");
    } else {
        $query = mysqli_query($konek, "SELECT * FROM tb_absen WHERE usn = '$username' ORDER BY tanggal DESC");
    }

        $no = 0;
    while ($row = mysqli_fetch_array($query)) {
        $no++;
            echo "<tr>
                <td>$no</td>";
                if ($status == "admin"){
                    echo "<td>$row[usn]</td>";
                }
            echo"<td>$row[tanggal]</td>
                <td>$row[kehadiran]</td>
                <td>$row[keterangan]</td>";
            if($status == "admin"){
                echo"<td><div class='btn-row'>
                <div class='btn-group'>
                    <a href='edit_absensi.php?id=$row[0]' class='btn btn-warning'><i class='ri ri-draft-fill'></i></a>
                    <a href='hapus_absensi.php?id=$row[0]' onclick='return confirm(\" Hapus Data ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
                    </div>
                </div>";
            }
            echo"</td>
        </tr>";
    }
                    ?>
                </tbody>
            </div>
        </div>
    </section>


<!-- <script>
    setInterval(function(){
        let jam_sekarang = new Date().getHours();
        let jam_absen = 09.00;
        if (jam_sekarang === jam_absen) {
            
            $sql = mysqli_query($konek, "INSERT INTO tb_absen (id_absen, kehadiran, usn, tanggal, keterangan) VALUES ('$idabsen', '$kehadiran', '$usn', '$tanggal', '$keterangan')"); 
            
        }
    }, 3600000);
</script> -->

<?php 
include '../utilities/footer.php';
?>