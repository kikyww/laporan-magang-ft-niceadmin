<?php
include '../utilities/sidebar.php';


$id = $_GET['id'];
if(isset($id)){
    include '../koneksi/koneksi.php';
    $query = mysqli_query($konek, "SELECT * FROM tb_magang WHERE id_magang = '$id'");
    $row = mysqli_fetch_array($query);
}

$status = $_SESSION['status'];

if ($_SESSION['status'] == 'user') {
   echo"<script>window.location.href = '../pages-error-404.html'</script>";
} else {
?>



<div class="pagetitle">
  <h1>Master Data</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../utilities/dashboard.php">Home</a></li>
      <li class="breadcrumb-item"><a href="./data_magang.php">Data Anak Magang</a></li>
      <li class="breadcrumb-item active">Edit Data Anak Magang</li>
    </ol>
  </nav>
</div>

<section class="section">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Anak Magang</h5>
              <!-- General Form Elements -->
              <form action="submit_edit.php" method="POST">
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input name="id" type="text" class="form-control" value="<?= $row['id_magang'];?>" hidden>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" value="<?= $row['nama'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input name="username" type="text" class="form-control" value="<?= $row['username'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="induk" class="col-sm-2 col-form-label">No. Induk Siswa/Mahasiswa</label>
                  <div class="col-sm-10">
                    <input name="induk" type="text" class="form-control" value="<?= $row['induk'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="lahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input name="lahir" type="text" class="form-control" value="<?= $row['tgl_lahir'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input name="alamat" type="text" class="form-control" value="<?= $row['alamat'];?>">
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input name="jk" value="L" class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" checked>
                      <label class="form-check-label" for="gridRadios1">
                        L
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="jk" value="P" class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P">
                      <label class="form-check-label" for="gridRadios2">
                        P
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="row mb-3">
                  <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                  <div class="col-sm-10">
                    <input name="telepon" type="number" class="form-control" value="<?= $row['telepon'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="instansi" class="col-sm-2 col-form-label">Sekolah/Instansi</label>
                  <div class="col-sm-10">
                    <input name="instansi" type="text" class="form-control" value="<?= $row['instansi'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                  <div class="col-sm-10">
                    <input name="jurusan" type="text" class="form-control" value="<?= $row['jurusan'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="masuk" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                  <div class="col-sm-10">
                    <input name="masuk" type="date" class="form-control" value="<?= $row['tgl_masuk'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="keluar" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                  <div class="col-sm-10">
                    <input name="keluar" type="date" class="form-control" value="<?= $row['tgl_keluar'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input name="password" type="text" class="form-control" value="<?= $row['password'];?>">
                  </div>
                </div>

                <div class="row mb-3">
                    <input name="status" type="text" class="form-control" value="<?= $row['status'];?>" hidden>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button name="submit" value="submit" type="submit" class="btn btn-success">Edit</button>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
    </section>
<?php } ?>

<?php
include '../utilities/footer.php';
?>