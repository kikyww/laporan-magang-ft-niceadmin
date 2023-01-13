<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon3.ico" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Isi semua kolom sesuai dengan data diri anda</p>
                  </div>
                  <form class="row g-3 needs-validation" action="submit_register.php" method="POST">
                    <div class="col-12">
                      <label for="namaregister" class="form-label">Nama</label>
                      <input type="text" name="namaregister" class="form-control" id="namaregister" required>
                      <div class="invalid-feedback">Isi Nama Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="usernameregister" class="form-label">Username</label>
                      <input type="text" name="usernameregister" class="form-control" id="usernameregister" required>
                      <div class="invalid-feedback">Isi Username Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="indukregister" class="form-label">No. Induk Siswa/Mahasiswa</label>
                      <input type="text" name="indukregister" class="form-control" id="indukregister" required>
                      <div class="invalid-feedback">Isi No.Induk Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="lahirregister" class="form-label">Tempat Tanggal Lahir</label>
                      <input type="text" name="lahirregister" class="form-control" id="lahirregister" required>
                      <div class="invalid-feedback">Isi Tanggal lahir Anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="alamatregister" class="form-label">Alamat Lengkap</label>
                      <input type="text" name="alamatregister" class="form-control" id="alamatregister" required>
                      <div class="invalid-feedback">Isi Alamat Anda!</div>
                    </div>


                <fieldset class="col-12">
                  <legend class="col-form-label">Jenis Kelamin</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P">
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </fieldset>
                    <div class="col-12">
                      <label for="teleponregister" class="form-label">No. WhatsApp</label>
                      <div class="input-group has-validation">
                        <input type="number" name="teleponregister" class="form-control" id="teleponregister" required>
                        <div class="invalid-feedback">Isi Nomor Telepon Anda!</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="instansiregister" class="form-label">Sekolah/Instansi</label>
                      <input type="text" name="instansiregister" class="form-control" id="instansiregister" required>
                      <div class="invalid-feedback">Isi Instansi Terkait!</div>
                    </div>
                    <div class="col-12">
                      <label for="jurusanregister" class="form-label">Jurusan</label>
                      <input type="text" name="jurusanregister" class="form-control" id="jurusanregister" required>
                      <div class="invalid-feedback">Isi Jurusan Anda!</div>
                    </div>
                    <div class="col-12">
                      <label for="masukregister" class="form-label">Tanggal Mulai</label>
                      <input type="date" name="masukregister" class="form-control" id="masukregister" required>
                      <div class="invalid-feedback">Isi Tanggal Mulai!</div>
                    </div>
                    <div class="col-12">
                      <label for="keluarregister" class="form-label">Tanggal Selesai</label>
                      <input type="date" name="keluarregister" class="form-control" id="keluarregister" required>
                      <div class="invalid-feedback">Isi Tanggal Keluar!</div>
                    </div>
                    <div class="col-12">
                      <label for="passwordregister" class="form-label">Password</label>
                      <input type="password" name="passwordregister" class="form-control" id="passwordregister" required>
                      <div class="invalid-feedback">Isi Password Anda!</div>
                    </div>
                    <div class="col-12" hidden>
                      <input type="text" name="status" class="form-control" value="user" id="status" readonly>
                    </div>
                    <div class="col-12" hidden>
                      <input type="text" name="keaktifan" class="form-control" value="aktif" id="keaktifan" readonly>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" value="submit" type="submit">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="../login/halaman_login.php">Login disini</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>