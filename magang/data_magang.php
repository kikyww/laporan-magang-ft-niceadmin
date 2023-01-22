<?php
include '../utilities/sidebar.php';

?>

<div class="pagetitle">
  <h1>Master Data</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item active">Data Anak Magang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
<div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Anak Magang</h5>
                <div class="d-flex justify-content-end align-items-center" style="margin-right: 35x;">
                    <a class="btn btn-success" href="tambah_magang.php">Tambah</a>
                </div>
                <table class="table table-striped" id="idcuy">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Jurusan</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi/koneksi.php';
                    $query = "SELECT * FROM tb_magang WHERE id_magang ORDER BY nama ASC";
                    $data = mysqli_query($konek, $query);
                    $tanggal_sekarang = date('Y-m-d');
                    $no = 0;
                        while ($row = mysqli_fetch_array($data)) {
                            if ($row['tgl_keluar'] >= $row['tgl_masuk'] && $tanggal_sekarang < $row['tgl_keluar']) {
                            $status = "<span class='badge rounded-pill bg-success'>Aktif</span>";
                        } else {
                            $status = "<span class='badge rounded-pill bg-danger'>Non Aktif</span>";
                        }
                        $no++;
                        echo "<tr>
                        <td>$no</td>
                        <td>$row[nama]</td>
                        <td>$row[instansi]</td>
                        <td>$row[jurusan]</td>
                        <td>$row[tgl_masuk]</td>
                        <td>$row[tgl_keluar]</td>
                        <td>$status</td>";
                        if ($_SESSION['status'] == 'admin') {
                            echo "<td><div class='btn-row'>
                            <div class='btn-group'>
                                <a href='./detail_magang.php?id=$row[0]' class='btn btn-info'><i class='ri ri-contacts-book-2-fill'></i></a>
                                <a href='./hapus_magang.php?id=$row[0]' onclick='return confirm(\" Hapus Data ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
                                </div>
                            </div>
                                </td>";
                            } else {
                                if ($_SESSION['username'] == $row['username']) {
                                    echo "<td><div class='btn-row'>
                                    <div class='btn-group'>
                                    <a href='./detail_magang.php?id=$row[0]' class='btn btn-info'><i class='ri ri-contacts-book-2-fill'></i></a>
                                    </div>
                                    </div>
                                    </td>
                            </tr>";
                                
                            } else {
                                echo "<td><div class='btn-row'>
                                <div class='btn-group'>
                                </div>
                                <div class='btn-group'>
                                </div>
                                </div>
                                </td>";
                        }
                    }
                    }
                    ?>
                </tbody>
            </div>
        </div>
    </section>
    

    <!-- <div class='btn-row'>
                            <div class='btn-group'>
                                <a href='./detail_magang.php?id=$row[0]' class='btn btn-info'><i class='ri ri-contacts-book-2-fill'></i></a>
                                <a href='./hapus_magang.php?id=$row[0]' onclick='return confirm(\" Hapus Data ini?\");' class='btn btn-danger'><i class='ri ri-delete-bin-2-fill'></i></a>
                                </div>
                            </div>
                        </td>
                        </tr>"; -->

<?php
include '../utilities/footer.php';
?>