<style>
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
#table2 {
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 10pt;
}
#table2 tr {padding:0px}
#table2 td {padding:0px}
.table {border:none;
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 10pt;
}
.table tr {border:none;text-align:left;padding:0px;}
.table td {border:none;text-align:left;padding:0px;}  


</style>
<body onLoad="window.print(0)">
<div id="wrapper">
<div id="logo"><img src="../img/logo-pemprov-kalimantan-selatan.png" width="120" height="90"> </div>
<div id="cop">
  <h2 class="style1">PEMERINTAH PROVINSI KALIMANTAN SELATAN</h2>
  <h1 class="style2">DINAS PENGENDALIAN PENDUDUK KELUARGA BERENCANA DAN PEMERDAYAAN MASYARAKAT</h1>
  Jalan Brig Jend. Hasan Basri No. 16 <br />
  Telp./Fax. (0511) 3301346 Banjarmasin 70124</div>
<hr>

<br />
<div id="center"></div>

<div align="center">
<?php
include "../koneksi.php";
      $tampil = mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE id_surat");
  echo   "<h3><u>LAPORAN DATA SURAT MASUK</u></h3><br>
    		<table id=\"datatables\" class=\"cell-border\" cellspacing=\"0\">
          <thead><tr><th>No</th><th>Nomor Surat</th><th>Klasifikasi</th><th>Perihal</th><th>Asal Surat</th><th>Tanggal Surat</th></tr></thead>";
    $i=1;
	echo "<tbody>";
    while ($d=mysqli_fetch_array($tampil)){
       echo "<tr>
                <td>$i</td>
                <td>$d[no_surat]</td>
                <td>$d[klasifikasi]</td>
                <td>$d[perihal]</td>
                <td>$d[asal_surat]</td>
                <td>$d[tgl_surat]</td>
			</tr>";
      $i++;
    }
    echo "</tbody></table>";
?>
</div>
</br> </br>
