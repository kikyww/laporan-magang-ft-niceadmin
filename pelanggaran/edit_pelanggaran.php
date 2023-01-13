<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';

$id = $_GET['id'];
if(isset($id)){
    $query = mysqli_query($konek, "SELECT * FROM tb_pelanggaran WHERE id_pelanggaran = '$id'");
    $row = mysqli_fetch_array($query);
}

?>

<section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Pelanggaran</h5>
              <form action="submit_edit.php" method="POST">

              <div class="row mb-3">
                  <div class="col-sm-10">
                    <input name="id" type="text" class="form-control" value="<?= $row['id_pelanggaran'];?>" hidden>
                  </div>
                </div>

              <div class="row mb-3">
                  <div class="col-sm-10">
                        <input type="text" name="nama" value="<?= $row['usn_pelanggaran'] ?>" hidden readonly>
                    </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input name="tanggal" type="date" class="form-control" value="<?= $row['tanggal'] ?>" readonly>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="pelanggaran" class="col-sm-2 col-form-label">Pelanggaran</label>
                  <div class="col-sm-10">
                    <input name="pelanggaran" type="text" class="form-control" value="<?= $row['pelanggaran'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input name="keterangan" type="text" class="form-control" value="<?= $row['keterangan'] ?>">
                  </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                  <button name="submit" value="submit" type="submit" class="btn btn-success">Kirim</button>
                </div>
              </form>
            </div>
          </div>
    </section>

<?php
include '../utilities/footer.php';
?>