<?php
session_start();
if(!isset($_SESSION['username'])){
    echo"<script>window.location.href = '../pages-error-404.html'</script>";
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
 
h2,h1,h3{ padding:0;margin:0;}
h1 {font-size:22px;font-weight:bold}
h2 {font-size:22px;font-weight:normal}
#wrapper {
	width:700px;
	margin:0 auto;
	font-size:15px;
}
#ol {margin:0}
#logo {
	width:95px;
	float:left;	
	margin-bottom:8px;
}
hr{border-bottom: 5px double #000;clear:both}
#cop {
	float:left;width:550px;text-align:center;
}

#kanan{clear:both;width:auto;float:right;margin-bottom:10px;}
#header {clear:both;text-align:center;}

#garis1{border-top:solid 1px #fff;border-right:1px solid #fff}
#garis2 {border-bottom:1px solid #000}
#garis3{border-bottom:3px solid #000}
#g4{border-right:1px solid #000}
#table {
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 10pt;
	border-width: 1px;
	border-style: solid;
	border-color: #fff;
	border-collapse: collapse;
	margin: 10px 0px;
}
#table td{
	padding: 0.5em;
}


.style1 {font-size: 16
}
.style2 {	font-size: 24px;
}
th{
	text-transform: uppercase;
	text-align: center;
	padding: 0.5em;
	border-width: 1px;
	border-style: solid;
	border-color: #000;
	border-collapse: collapse;
}
td{
	padding: 0.5em;
	vertical-align: top;
	border-width: 1px;
	border-style: solid;
	border-color: #000;
	border-collapse: collapse;
	text-align:center;
}  


</style>

<body>
<div id="wrapper">
<div id="logo"><img src="../assets/img/pemko.png" width="100" height="130"> </div>
<div id="cop">
  <h2 class="style1">PEMERINTAH PROVINSI KALIMANTAN SELATAN</h2>
  <h1 class="style2">DINAS PENGENDALIAN PENDUDUK KELUARGA BERENCANA DAN PEMERDAYAAN MASYARAKAT</h1>
  Jalan Brig Jend. Hasan Basri No. 16 <br />
  Telp./Fax. (0511) 3301346 Banjarmasin 70124</div>
<hr>

<br />
<div id="center"></div>

<div align="center">
<h3>REKAP SISWA/MAHASISWA PRAKTEK KERJA LAPANGAN</h3><br>
    <table class='table table-stripped table-bordered mt-3 table-responsive demo'>
        <thead>
            <tr>
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>No.</th>
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Nama</th>
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Instansi</th>
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Jurusan</th>
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Akumulasi Nilai</th>        
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Konversi Nilai</th>        
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Status Panggilan</th>        
                <th rowspan=3 style='text-align:center; vertical-align: middle;'>Status PKL</th>       
            </tr>
        </thead>
    <tbody>

<?php
include "../koneksi/koneksi.php";
      $query = mysqli_query($konek, "SELECT tb_magang.username, tb_magang.nama, tb_magang.instansi, tb_magang.tgl_keluar, tb_magang.tgl_masuk, tb_magang.jurusan, tb_magang.tgl_masuk, tb_magang.tgl_keluar, tb_nilai.usn_nilai, IFNULL(tb_nilai.rata_rata, 0) as rata_rata, COUNT(pelanggaran) AS pelanggaran FROM tb_magang LEFT JOIN tb_pelanggaran ON tb_magang.username = tb_pelanggaran.usn_pelanggaran LEFT JOIN tb_nilai ON tb_magang.username = tb_nilai.usn_nilai GROUP BY tb_magang.username ORDER BY tb_nilai.rata_rata DESC");

        $tanggal_sekarang = date('Y-m-d');
        $no = 0;
        $total = 0;
            while ($row = mysqli_fetch_array($query)) {
            $no++;
            if($row['rata_rata'] == true){
                $poin = 0.3;
                $score = $row['rata_rata'] - ($row['pelanggaran'] * $poin);
            } else {
                $poin = 0;
                $score = $row['rata_rata'] - ($row['pelanggaran'] * $poin);
            }
            if ($row['tgl_keluar'] >= $row['tgl_masuk'] && $tanggal_sekarang < $row['tgl_keluar']) {
                $status = "<span class='badge rounded-pill bg-success'>Aktif</span>";
            } else {
                $status = "<span class='badge rounded-pill bg-danger'>Non Aktif</span>";
            }
            if($score >= 90){
                $huruf = "A";
                $rekomendasi = "<span class='badge rounded-pill bg-success'>Sangat Rekomendasi</span>";
            }else if($score >= 85){
                $huruf = "B+";
                $rekomendasi = "<span class='badge rounded-pill bg-info'>Rekomendasi</span>";
            }else if($score >= 80){
                $huruf = "B";
                $rekomendasi = "<span class='badge rounded-pill bg-info'>Rekomendasi</span>";
            }else if($score >= 75){
                $huruf = "C+";
                $rekomendasi = "<span class='badge rounded-pill bg-warning'>Tidak Rekomendasi</span>";
            }else if($score >= 70){
                $huruf = "C";
                $rekomendasi = "<span class='badge rounded-pill bg-warning'>Tidak Rekomendasi</span>";
            }else if($score >= 60){
                $huruf = "D";
                $rekomendasi = "<span class='badge rounded-pill bg-danger'>Sangat Tidak Rekomendasi</span>";
            }else{
                $huruf = "E";
                $rekomendasi = "<span class='badge rounded-pill bg-danger'>Sangat Tidak Rekomendasi</span>";
            }
        
        echo"
        
            <tr>
                <td style='text-align:center;' class='td1'>$no</td>
                <td style='text-align:center;' class='td1'>$row[nama]</td>
                <td style='text-align:center;'' class='td1'>$row[instansi] </td>
                <td style='text-align:center;' class='td1'>$row[jurusan]</td>
                <td style='text-align:center;' class='td1'>$score</td>
                <td style='text-align:center;' class='td1'>$huruf</td>
                <td style='text-align:center;' class='td1'>$rekomendasi</td>
                <td style='text-align:center;' class='td1'>$status</td>
            </tr>";
        } 
        ?>
        </tbody>
    </table>
</div>
</div>

<div style="width:300px;float:right;">
<div style="text-align:center"><p>Banjarmasin, <?php echo date('d M Y'); ?> <br /></div>

	<div style="font-weight:bold;text-align:center"><p>Pimpinan<br /></p>
		<p>&nbsp;</p>
		<p><u>Drs. M. Helfiannoor, M.Si</u><br />
			NIP : 19730719 199302 1 022 <br /></p>
	</div>
	</div>

</body>
<script>
    window.print()
</script>
