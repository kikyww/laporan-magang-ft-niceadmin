<!-- Buat database baru dengan nama "absensi" di PHPMyAdmin.

Buat tabel baru dengan nama "user" di database "absensi". Tabel ini akan menyimpan informasi tentang user, seperti ID user, nama, email, password, dan role.

Buat tabel baru dengan nama "karyawan" di database "absensi". Tabel ini akan menyimpan informasi tentang karyawan, seperti ID karyawan, nama, dan tanggal lahir.

Buat tabel baru dengan nama "absensi" di database "absensi". Tabel ini akan menyimpan informasi tentang kehadiran karyawan, seperti ID karyawan, tanggal, dan status kehadiran (masuk atau pulang).

Buat file PHP baru dengan nama "koneksi.php" untuk menyimpan koneksi ke database. Isi file ini dengan kode berikut: -->
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "absensi";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>


<!-- Buat file PHP baru dengan nama "login.php" untuk menangani proses login user. Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];
// Mencocokkan email dan password di tabel user
$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // Jika email dan password cocok, menyimpan informasi user ke session
    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['role'] = $row['role'];
    // Mengecek role user
    if ($row['role'] == "admin") {
        // Jika role-nya admin, redirect ke halaman admin
        header("Location: halaman_admin.php");
    } else {
        // Jika role-nya karyawan, redirect ke halaman
        // Jika role-nya karyawan, redirect ke halaman karyawan
        header("Location: halaman_karyawan.php");
    }
} else {
    // Jika email atau password tidak cocok, menampilkan pesan error
    echo "Email atau password salah";
}
// Menutup koneksi
mysqli_close($conn);
?>


<!-- Buat file PHP baru dengan nama "halaman_admin.php" untuk menampilkan halaman yang hanya bisa diakses oleh user dengan role "admin". Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengecek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
}
// Mengecek apakah role user adalah "admin"
if ($_SESSION['role'] != "admin") {
    // Jika role bukan "admin", redirect ke halaman karyawan
    header("Location: halaman_karyawan.php");
}
// Menampilkan menu untuk admin
echo "Selamat datang, " . $_SESSION['nama'] . " (admin)";
echo "<br>";
echo "Menu:";
echo "<br>";
echo "<a href='input_absensi.php'>Input Absensi</a>";
echo "<br>";
echo "<a href='lihat_absensi.php'>Lihat Absensi</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";
// Menutup koneksi
mysqli_close($conn);
?>


<!-- Buat file PHP baru dengan nama "halaman_karyawan.php" untuk menampilkan halaman yang hanya bisa diakses oleh user dengan role "karyawan". Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengecek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
}
// Mengecek apakah role user adalah "karyawan"
if ($_SESSION['role'] != "karyawan") {
    // Jika role bukan "karyawan", redirect ke halaman admin
  header("Location: halaman_admin.php");
}
// Menampilkan menu untuk karyawan
echo "Selamat datang, " . $_SESSION['nama'] . " (karyawan)";
echo "<br>";
echo "Menu:";
echo "<br>";
echo "<a href='input_absensi.php'>Input Absensi</a>";
echo "<br>";
echo "<a href='lihat_absensi.php'>Lihat Absensi</a>";
echo "<br>";
echo "<a href='logout.php'>Logout</a>";
// Menutup koneksi
mysqli_close($conn);
?>


<!-- Buat file PHP baru dengan nama "input_absensi.php" untuk menangani input data absensi dari karyawan. Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengecek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
}
// Mengecek apakah role user adalah "karyawan"
if ($_SESSION['role'] != "karyawan") {
    // Jika role bukan "karyawan", redirect ke halaman admin
    header("Location: halaman_admin.php");
}
// Mengambil data dari form
$id_karyawan = $_SESSION['id']; // ID karyawan diambil dari session yang tersimpan saat login
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
// Memasukkan data ke dalam tabel absensi
$sql = "INSERT INTO absensi (id_karyawan, tanggal, status) VALUES ('$id_karyawan', '$tanggal', '$status')";
if (mysqli_query($conn, $sql)) {
    echo "Data absensi berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Menutup koneksi
mysqli_close($conn);
?>


<!-- Buat file PHP baru dengan nama "lihat_absensi.php" untuk menampilkan data absensi karyawan. Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengecek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
}
// Mengecek apakah role user adalah "admin" atau "karyawan"
if ($_SESSION['role'] != "admin" && $_SESSION['role'] != "karyawan") {
    // Jika role bukan "admin" atau "karyawan", redirect ke halaman login
    header("Location: login.php");
}
// Menampilkan data dari tabel absensi
if ($_SESSION['role'] == "admin") {
    // Jika role-nya admin, menampilkan semua data absensi
    $sql = "SELECT * FROM absensi";
} else {
    // Jika role-nya karyawan, menampilkan hanya data absensi yang sesuai dengan ID karyawan yang terlogin
    $id_karyawan = $_SESSION['id'];
    $sql = "SELECT * FROM absensi WHERE id_karyawan='$id_karyawan'";
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // Menampilkan data untuk setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID Karyawan: " . $row["id_karyawan"]. " - Tanggal: " . $row["tanggal"]. " - Status: " . $row["status"]. "<br>";
    }
} else {
  echo "Tidak ada data yang ditemukan";
}
// Menutup koneksi
mysqli_close($conn);
?>


<!-- Buat file PHP baru dengan nama "logout.php" untuk menangani proses logout user. Isi file ini dengan kode berikut: -->
<?php
// Menyertakan file koneksi.php
include 'koneksi.php';
// Mengecek apakah user sudah login atau belum
if (!isset($_SESSION['id'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
}
// Menghapus session
session_destroy();
// Redirect ke halaman login
header("Location: login.php");
// Menutup koneksi
mysqli_close($conn);
?>
