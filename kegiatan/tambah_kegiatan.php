<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';

?>

<section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Catatan</h5>
              <form action="submit_kegiatan.php" method="POST">
              
              <div class="row mb-3">
                  <div class="col-sm-10">
                    <input name="usn" type="text" class="form-control" value="<?php echo $_SESSION['username'];?>" readonly hidden>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input name="tanggal" type="date" class="form-control" required>
                  </div>
                </div>

                <div id="kegiatani" class="row mb-3">
                  <label for="kegiatani" class="col-sm-2 col-form-label">Kegiatan 1</label>
                  <div class="col-sm-10">
                    <textarea name="kegiatani" type="text" class="form-control"></textarea>
                    <div class="mt-3">
                      <div id="tombolii" class="btn btn-primary">Tambah Kegiatan</div>
                  </div>
                  </div>
                </div>

                <div id="kegiatanii" class="row mb-3">
                  <label for="kegiatani" class="col-sm-2 col-form-label">Kegiatan 2</label>
                  <div class="col-sm-10">
                    <textarea name="kegiatanii" type="text" class="form-control"></textarea>
                  <div class=" mt-3">
                    <div id="tomboliii" class="btn btn-primary">Tambah Kegiatan</div>
                  </div>
                  </div>
                </div>

                <div id="kegiataniii" class="row mb-3">
                  <label for="kegiataniii" class="col-sm-2 col-form-label">Kegiatan 3</label>
                  <div class="col-sm-10">
                    <textarea name="kegiataniii" type="text" class="form-control"></textarea>
                    <div id="tomboliv" class="btn btn-primary mt-3">Tambah Kegiatan</div>
                  </div>
                </div>

                <div id="kegiataniv" class="row mb-3">
                  <label for="kegiataniv" class="col-sm-2 col-form-label">Kegiatan 4</label>
                  <div class="col-sm-10">
                    <textarea name="kegiataniv" type="text" class="form-control"></textarea>
                    <div id="tombolv" class="btn btn-primary mt-3">Tambah Kegiatan</div>
                  </div>
                </div>

                <div id="kegiatanv" class="row mb-3">
                  <label for="kegiatanv" class="col-sm-2 col-form-label">Kegiatan 5</label>
                  <div class="col-sm-10">
                    <textarea name="kegiatanv" type="text" class="form-control"></textarea>
                  </div>
                </div>
                
                <div class="d-flex justify-content-end">
                  <div class=" mt-3">
                    <button name="submit" value="submit" type="submit" class="btn btn-success">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
    </section>

    <script>
  // menyembunyikan form input
  document.querySelector('#kegiatanii').style.display = 'none';
  document.querySelector('#kegiataniii').style.display = 'none';
  document.querySelector('#kegiataniv').style.display = 'none';
  document.querySelector('#kegiatanv').style.display = 'none';
  document.querySelector('#tomboliii').style.display = 'none';
  document.querySelector('#tomboliv').style.display = 'none';
  document.querySelector('#tombolv').style.display = 'none';

  document.querySelector('#tombolii').addEventListener('click', function() {
    document.querySelector('#kegiatanii').style.display = 'block';
    document.querySelector('#tomboliii').style.display = 'block';
    document.querySelector('#tombolii').style.display = 'none';
  });

  document.querySelector('#tomboliii').addEventListener('click', function() {
    document.querySelector('#kegiataniii').style.display = 'block';
    document.querySelector('#tomboliv').style.display = 'block';
    document.querySelector('#tomboliii').style.display = 'none';
  });

  document.querySelector('#tomboliv').addEventListener('click', function() {
    document.querySelector('#kegiataniv').style.display = 'block';
    document.querySelector('#tombolv').style.display = 'block';
    document.querySelector('#tomboliv').style.display = 'none';
  });

  document.querySelector('#tombolv').addEventListener('click', function() {
    document.querySelector('#kegiatanv').style.display = 'block';
    document.querySelector('#tombolv').style.display = 'none';
  });

</script>

<?php
include '../utilities/footer.php';
?>