<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';
$username = $_GET['username'];

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    include '../koneksi/koneksi.php';

    $query = mysqli_query($konek, "SELECT * FROM tb_pelanggaran p INNER JOIN tb_magang m ON p.usn_pelanggaran = m.username ORDER BY tanggal DESC");
    
}
?>

<div class="pagetitle">
  <h1>Halaman Catatan Pelanggaran</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Catatan Pelanggaran</li>
    </ol>
  </nav>
</div>

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Catatan Pelanggaran </h5>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="">
                        <th hidden>Username</th>
                        <th>Tanggal</th>
                        <th>Pelanggaran</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
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
        <td>$data[tanggal]</td>
        <td>$data[pelanggaran] </td>
        <td>$data[keterangan]</td>
        <td><div class='btn-row'>
            <div class='btn-group'>
                <a href='edit_pelanggaran.php?id=$data[0]' class='btn btn-warning'><i class='ri ri-draft-fill'></i></a>
                <a href='hapus_pelanggaran.php?id=$data[0]' onclick='return confirm(\" Hapus Pelanggaran ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
                </div>
            </div>
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