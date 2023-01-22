<?php
include '../utilities/sidebar.php';
include '../koneksi/koneksi.php';

$id = $_GET['id'];
if(isset($id)){
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
      <h1>Detail Profil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Laporan Riwayat</li>
          <li class="breadcrumb-item active">Detail Profil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
                </li>
                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Detail</button>
                </li> -->
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
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"><?= $status ?></div>
                  </div>
                </div>

                <!-- <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <a'col-lg-3 col-md-4 label' href='../absensi/data_absensi.php?id=$absen[id]'>Absensi</a>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kegiatan</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pelanggaran</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nilai</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>
                </div> -->

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php
include '../utilities/footer.php';
?>