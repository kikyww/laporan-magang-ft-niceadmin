<?php
include '../utilities/sidebar.php';
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
      <li class="breadcrumb-item active">Tambah Data Anak Magang</li>
    </ol>
  </nav>
</div>

<section class="section">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data User/Admin</h5>
              <!-- General Form Elements -->
              <form action="submit_tambah.php" method="POST">
                <div class="row mb-3">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input name="username" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="induk" class="col-sm-2 col-form-label">No. Induk Siswa/Mahasiswa</label>
                  <div class="col-sm-10">
                    <input name="induk" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="lahir" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input name="lahir" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input name="alamat" type="text" class="form-control">
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
                    <input name="telepon" type="number" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="instansi" class="col-sm-2 col-form-label">Sekolah/Instansi</label>
                  <div class="col-sm-10">
                    <input name="instansi" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                  <div class="col-sm-10">
                    <input name="jurusan" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="masuk" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                  <div class="col-sm-10">
                    <input name="masuk" type="date" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="keluar" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                  <div class="col-sm-10">
                    <input name="keluar" type="date" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input name="password" type="text" class="form-control">
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input name="status" value="user" class="form-check-input" type="radio" name="status" id="gridRadios3" value="user" checked>
                      <label class="form-check-label" for="gridRadios3">
                        Magang/PKL
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="status" value="admin" class="form-check-input" type="radio" name="status" id="gridRadios4" value="admin">
                      <label class="form-check-label" for="gridRadios4">
                        Admin
                      </label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mt-3">
                      <button name="submit" value="submit" type="submit" class="btn btn-success">Tambah</button>
                  </div>  
                </div>
              </fieldset>

              </form><!-- End General Form Elements -->
            </div>
          </div>
    </section>
<?php } ?>

<?php
include '../utilities/footer.php';
?>