<?php
include '../koneksi/koneksi.php';
session_start();
$username = $_GET['username'];

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    $query = mysqli_query($konek, "SELECT * FROM tb_absen a INNER JOIN tb_magang m ON a.usn = m.username ORDER BY tanggal ASC");
    
}
?>

<style>
	.demo {
		border:1px solid;
		border-collapse:collapse;
		padding:5px;
	}
	.demo th {
		border:1px solid;
		padding:5px;
		font-weight: normal;
	}
	.demo td {
		border:1px solid;
		padding:5px;
	}
</style>

<div style="display:flex; 
">
<div style="
justify-content: center; align-items: center; margin:auto; background-color:red">
<p style="font-size:22px; text-align: center;">LAPORAN KEGIATAN <?= $username ?></p>

<?php
$sql = mysqli_query($konek, "SELECT * FROM tb_magang");
        while($r = mysqli_fetch_array($sql)){
    if($_GET['username'] == $r['username']) {
        ?>
<p style='font-size:15px; text-align: start;'>Nama   : <?= $r['nama'] ?></p>
<p style='font-size:15px; text-align: start;'>No. Induk   : <?= $r['induk'] ?></p>
<p style='font-size:15px; text-align: start;'>Tanggal PKL   :  <?= $r['tgl_masuk']?> s/d <?= $r['tgl_keluar']?></p>
<p style='font-size:15px; text-align: start;'>Instansi/Sekolah   : <?= $r['instansi']?></p>
<?php
}}
?>
<table class='table table-stripped table-bordered mt-3 table-responsive demo'>

<thead>
    <tr>
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>No</th>
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>Tanggal</th>
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>Kehadiran</th>
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>Keterangan</th>        
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>Paraf</th>        
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
        <td style='text-align:center;' class='td1'>$no</td>
        <td style='text-align:center;' class='td1'>$data[tanggal]</td>
        <td style='text-align:center;'' class='td1'>$data[kehadiran] </td>
        <td style='text-align:center;' class='td1'>$data[keterangan]</td>
        <td style='text-align:center;' class='td1'></td>
    </tr>";

 }
} 
?>

</tbody>

</table>
</div>
</div>
<script>
    window.print();
</script>