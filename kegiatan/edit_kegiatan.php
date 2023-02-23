<?php
include '../utilities/sidebar.php';

$id = $_GET['id'];
if(isset($id)){
    include '../koneksi/koneksi.php';
    $query = mysqli_query($konek, "SELECT * FROM tb_kegiatan WHERE id_kegiatan = '$id'");
    $row = mysqli_fetch_array($query);
}

?>

<section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Catatan</h5>
              <form action="submit_edit.php" method="POST">
            
              <div class="row mb-3">
                  <div class="col-sm-10">
                    <input name="id" type="text" class="form-control" value="<?= $row['id_kegiatan'];?>" hidden readonly>
                  </div>
                </div>

              <div class="row mb-3">
                  <div class="col-sm-10">
                    <input name="usn" type="text" class="form-control" value="<?= $_SESSION['username'];?>" readonly hidden>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input name="tanggal" type="text" class="form-control" value="<?= $row['tanggal'] ?>" readonly>
                  </div>
                </div>

                <div id="kegiatani" class="row mb-3">
                  <label for="kegiatani" class="col-sm-2 col-form-label">Kegiatan 1</label>
                  <div class="col-sm-10">
                    <input name="kegiatani" type="text" class="form-control" value="<?= $row['kegiatan_i'] ?>">
                  </div>
                </div>

                <div id="kegiatanii" class="row mb-3">
                  <label for="kegiatani" class="col-sm-2 col-form-label">Kegiatan 2</label>
                  <div class="col-sm-10">
                    <input name="kegiatanii" type="text" class="form-control" value="<?= $row['kegiatan_ii'] ?>">
                  </div>
                </div>

                <div id="kegiataniii" class="row mb-3">
                  <label for="kegiataniii" class="col-sm-2 col-form-label">Kegiatan 3</label>
                  <div class="col-sm-10">
                    <input name="kegiataniii" type="text" class="form-control"value="<?= $row['kegiatan_iii'] ?>">
                    </div>
                </div>

                <div id="kegiataniv" class="row mb-3">
                  <label for="kegiataniv" class="col-sm-2 col-form-label">Kegiatan 4</label>
                  <div class="col-sm-10">
                    <input name="kegiataniv" type="text" class="form-control" value="<?= $row['kegiatan_iv'] ?>">
                    </div>
                </div>

                <div id="kegiatanv" class="row mb-3">
                  <label for="kegiatanv" class="col-sm-2 col-form-label">Kegiatan 5</label>
                  <div class="col-sm-10">
                    <input name="kegiatanv" type="text" class="form-control" value="<?= $row['kegiatan_v'] ?>">
                  </div>
                </div>
                
                <div class="d-flex justify-content-end">
                  <div class=" mt-3">
                    <a href="data_kegiatan.php" class="btn btn-warning">Kembali</a>
                    <button name="submit" value="submit" type="submit" class="btn btn-success">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
    </section>


<?php
include '../utilities/footer.php';
?>