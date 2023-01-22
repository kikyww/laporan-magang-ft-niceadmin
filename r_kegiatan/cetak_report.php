<?php
include '../koneksi/koneksi.php';
session_start();
$username = $_GET['username'];

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    $query = mysqli_query($konek, "SELECT * FROM tb_kegiatan k INNER JOIN tb_magang m ON k.usn_kegiatan = m.username ORDER BY tanggal ASC");
    
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
	hr{border-bottom: 5px double #000;clear:both}
#cop {
	float:left;width:550px;text-align:center;
}
.style1 {font-size: 16
}
.style2 {	font-size: 24px;
}
h2,h1,h3{ padding:0;margin:0;}
h1 {font-size:22px;font-weight:bold}
h2 {font-size:22px;font-weight:normal}
#logo {
	width:95px;
	float:left;	
	margin-bottom:8px;
}

</style>

<div style="display:flex;">
<div style="
justify-content: center; align-items: center; margin:auto;">
<div id="logo"><img src="../assets/img/pemko.png" width="100" height="130"> </div>
<div id="cop">
  <h2 class="style1">PEMERINTAH PROVINSI KALIMANTAN SELATAN</h2>
  <h1 class="style2">DINAS PENGENDALIAN PENDUDUK KELUARGA BERENCANA DAN PEMERDAYAAN MASYARAKAT</h1>
  Jalan Brig Jend. Hasan Basri No. 16 <br />
  Telp./Fax. (0511) 3301346 Banjarmasin 70124
</div>
<hr>
<div style="display:flex;">
<div style="
justify-content: center; align-items: center; margin:auto;">
<p style="font-size:22px; text-align: center;">LAPORAN KEGIATAN</p>

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
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>kegiatan</th>        
        <th rowspan=3 style='text-align:center; vertical-align: middle;'>Paraf</th>        
    </tr>
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
<tr>
<td style='text-align:center;' class='td1'>$no</td>
<td style='text-align:center;' class='td1'>$data[tanggal]</td>
<td style='text-align:start;' class='td1'>- $data[kegiatan_i] <br>";
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
<td style='text-align:center;' class='td1'></td>
</tr>";

 }
} 
?>

</tbody>

</table>
</div>
</div>

<div style="width:300px;float:right;">
<div style="text-align:center"><p>Banjarmasin, <?php echo date('d M Y'); ?> <br /></div>

<div style="font-weight:bold;text-align:center"><p>KEPALA BAGIAN<br />
</p>
  <p>&nbsp;</p>
  <p><u>tes</u><br />
  tes <br /></p>
</div>
</div>

</div>
</div>
<script>
    window.print();
</script>