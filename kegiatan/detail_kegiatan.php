<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';
$username = $_GET['username'];

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    include '../koneksi/koneksi.php';

    $query = mysqli_query($konek, "SELECT * FROM tb_kegiatan k INNER JOIN tb_magang m ON k.usn_kegiatan = m.username ORDER BY tanggal DESC");
    
}
?>

<div class="pagetitle">
  <h1>Halaman Catatan Kegiatan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Catatan Kegiatan</li>
    </ol>
  </nav>
</div>

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Catatan Kegiatan</h5>
                <a href="admin_kegiatan.php" class="btn btn-warning">Kembali</a>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="">
                        <th hidden>Username</th>
                        <th>Nama</th>
                        <th>No Induk</th>
                        <th>Tanggal</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
            <tbody>

<?php
$no = 0;
    while ($data = mysqli_fetch_array($query)) {
if ($_GET['username'] == $data['username']) {
    $no++;
echo"
    <tr>
        <td hidden>$data[username]</td>
        <td>$data[nama]</td>
        <td>$data[induk]</td>
        <td>$data[tanggal]</td>
        <td>- $data[kegiatan_i] <br>";
        if($data['kegiatan_ii'] == true) {
            echo "- $data[kegiatan_ii] <br>";
        }
        if($data['kegiatan_iii'] == true) {
            echo "- $data[kegiatan_iii] <br>";
        }
        if($data['kegiatan_iv'] == true) {
            echo "- $data[kegiatan_iv] <br>";
        }
        if($data['kegiatan_v'] == true) {
            echo "- $data[kegiatan_v]";
        }
        echo"</td>
        </td>
    </tr>";
 }
} 
?>

</tbody>
            </div>
        </div>
    </section>
<script>
    // window.print();
</script>
<?php 
include '../utilities/footer.php';
?>