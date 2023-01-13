<?php
    include '../koneksi/koneksi.php';

    if (isset($_POST['login'])) {
    // $id_user = $_POST["id_user"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $result = $konek->query($query);

    if ($result->num_rows > 0) {
        $status = $result->fetch_assoc();
        session_start();
        $_SESSION["id_user"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["status"] = $status["status"];

        if ($status["status"] == "user") {
            header("location:../utilities/dashboard.php");
        } else if ($status["status"] == "admin") {
            header("location:../utilities/dashboard.php");
        }   exit;
    } else {
        echo "<script>alert('Username atau Password yang anda masukkan salah!')</script>";
        echo '<meta http-equiv="refresh" content="0; url=../login/halaman_login.php">';
    }
}

// if (isset($_POST['login'])) {
//     // ambil data dari form
//     $username = $_POST['username'];
//     $password = $_POST['password'];
  
//     // query
//     $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
  
//     // eksekusi query
//     $result = mysqli_query($konek, $sql);
  
//     // cek hasil query
//     if (mysqli_num_rows($result) > 0) {
//       // ambil data user
//       $user = mysqli_fetch_assoc($result);
  
//       // simpan data user ke session
//       $_SESSION['id_user'] = $user['id_user'];
//       $_SESSION['username'] = $user['username'];
//       $_SESSION['status'] = $user['status'];
  
//       if ($user["status"]) {
//             header("location:../utilities/dashboard.php");
//         }
//       // redirect ke halaman home
//     //   header("Location: ../utilities/dashboard.php");
//     } else {
//       // tampilkan pesan error
//     echo "<script>alert('Username atau Password yang anda masukkan salah!')</script>";
//     echo '<meta http-equiv="refresh" content="0; url=../login/halaman_login.php">';
//     }
//   }

?>
