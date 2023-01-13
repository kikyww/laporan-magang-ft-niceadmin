<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';

?>

<section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Pelanggaran</h5>
              <form action="submit_pelanggaran.php" method="POST">

              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama Siswa/Mahasiswa</label>
                  <div class="col-sm-10">
                    <select class="form-select" name='usn' aria-label="Default select example">
                      <option selected>Nama | No. Induk</option>
                      <?php
                        $query = mysqli_query($konek, "SELECT * FROM tb_magang WHERE id_magang ORDER BY id_magang DESC");
                        while($data = mysqli_fetch_array($query)){
                            echo "<option value='$data[username]'>$data[nama] | $data[induk]</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input name="tanggal" type="date" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="pelanggaran" class="col-sm-2 col-form-label">Pelanggaran</label>
                  <div class="col-sm-10">
                    <input name="pelanggaran" type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea name="keterangan" type="text" class="form-control"></textarea>
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