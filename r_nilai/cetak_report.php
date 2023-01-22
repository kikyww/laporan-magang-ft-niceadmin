<?php
include '../koneksi/koneksi.php';
session_start();
$username = $_GET['username'];

if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
}

if(isset($username)){
    $query = mysqli_query($konek, "SELECT * FROM tb_nilai n INNER JOIN tb_magang m ON n.usn_nilai = m.username ORDER BY nama DESC");
    
}
?>

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
    color: black;
}

th {
  color: black;
}

th, td {
  height: 10px;
  display: flex;
  align-items: center;
}

th {
  width: 18rem; 
  text-align: left;
}

.bold{
    font-weight: bold;
    background-color: #f2f2f2;
}

td {
  width: 6rem; 
  text-align: right;
}
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
<p style="font-size:22px; text-align: center;">PENILAIAN</p>

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
<table class="table table-header-rotated" id="idcuy">
<th class="bold" style="width: 1rem; text-align: left;">No</th>
    <th style="width: 1rem; text-align: left;">1</th>
    <th style="width: 1rem; text-align: left;">2</th>
    <th style="width: 1rem; text-align: left;">3</th>
    <th style="width: 1rem; text-align: left;">4</th>
    <th style="width: 1rem; text-align: left;">5</th>
    <th style="width: 1rem; text-align: left;">6</th>
    <th style="width: 1rem; text-align: left;">7</th>
    <th style="width: 1rem; text-align: left;">8</th>
    <th style="width: 1rem; text-align: left;">9</th>
    <th style="width: 1rem; text-align: left;">10</th>
    <th class="bold" style="width: 1rem; text-align: left;">11</th>

<thead>
<tr class="">
    <th class="bold">Aktivitas Yang Dinilai</th>
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
    <th class="bold">Rata-Rata Nilai</th>
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
        <td class='bold'>Nilai</td>
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
        <td class='bold'>$row[rata_rata] </td>
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