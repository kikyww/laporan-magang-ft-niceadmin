<?php
include '../utilities/sidebar.php';

$id = $_GET['id'];
if(isset($id)){
    include '../koneksi/koneksi.php';
    $query = mysqli_query($konek, "SELECT * FROM tb_magang WHERE id_magang = '$id'");
    $row = mysqli_fetch_array($query);
}

$tanggal_sekarang = date('Y-m-d');
if ($row['tgl_keluar'] >= $row['tgl_masuk'] && $tanggal_sekarang < $row['tgl_keluar']) {
    $status = "<span class='badge rounded-pill bg-success'>Aktif</span>";
} else {
    $status = "<span class='badge rounded-pill bg-danger'>Non Aktif</span>";
}

?>

<div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Master Data</li>
          <li class="breadcrumb-item active">Detail Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detail Profil</h5>

                  <div class="row" hidden>
                    <div class="col-lg-9 col-md-8"><?= $row['id_magang'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8"><?= $row['nama'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?= $row['username'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Induk Siswa/Mahasiswa</div>
                    <div class="col-lg-9 col-md-8"><?= $row['induk'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?= $row['tgl_lahir'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?= $row['alamat'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?= $row['jk'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telepon</div>
                    <div class="col-lg-9 col-md-8"><?= $row['telepon'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Instansi</div>
                    <div class="col-lg-9 col-md-8"><?= $row['instansi'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jurusan</div>
                    <div class="col-lg-9 col-md-8"><?= $row['jurusan'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Mulai</div>
                    <div class="col-lg-9 col-md-8"><?= $row['tgl_masuk'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Selesai</div>
                    <div class="col-lg-9 col-md-8"><?= $row['tgl_keluar'] ?></div>
                  </div>
                </div>
              
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  <form action="submit_edit.php" method="POST">

                    <div class="row mb-3" readonly hidden>
                      <div class="col-md-8 col-lg-9">
                        <input name="id" type="text" class="form-control" id="id" value="<?= $row['id_magang'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="nama" value="<?= $row['nama'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="username" type="text" class="form-control" id="username" value="<?= $row['username'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="induk" class="col-md-4 col-lg-3 col-form-label">No. Induk Siswa/Mahasiswa</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="induk" type="text" class="form-control" id="induk" value="<?= $row['induk'];?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3" readonly hidden>
                      <div class="col-md-8 col-lg-9">
                        <input name="jk" type="text" class="form-control" id="jk" value="<?= $row['jk'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Tanggal Lahir</label>
                      <div class="col-md-8 col-lg-9">
                    <input name="lahir" type="text" class="form-control" value="<?= $row['tgl_lahir'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="alamat" type="text" class="form-control" value="<?= $row['alamat'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="telepon" class="col-md-4 col-lg-3 col-form-label">Telepon</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="telepon" type="number" class="form-control" value="<?= $row['telepon'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="instansi" class="col-md-4 col-lg-3 col-form-label">Sekolah/Instansi</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="instansi" type="text" class="form-control" value="<?= $row['instansi'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Jurusan</label>
                      <div class="col-md-8 col-lg-9">
                    <input name="jurusan" type="text" class="form-control" value="<?= $row['jurusan'];?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Tanggal Mulai</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="masuk" type="date" class="form-control" value="<?= $row['tgl_masuk'];?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Tanggal Selesai</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="keluar" type="date" class="form-control" value="<?= $row['tgl_keluar'];?>">
                      </div>
                    </div>
  
                    <div class="row mb-3">
                      <label for="" class="col-md-4 col-lg-3 col-form-label">Password</label>
                      <div class="col-md-8 col-lg-9">
                      <input name="password" type="text" class="form-control" value="<?= $row['password'];?>">
                      </div>
                    </div>
                    
                    <div class="text-center">
                      <button  name="submit" value="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
              </div><!-- End Bordered Tabs -->
            </div>
          </div>

        </div>
      </div>
    </section>

<?php
include '../utilities/footer.php';
?>