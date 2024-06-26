<?php 

require "konek.php"; 

  if (isset($_POST['tambah_user'])) {
    $nm_user = htmlspecialchars($_POST['nm_user']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $verifikasi = htmlspecialchars($_POST['verifikasi']);
    $role = htmlspecialchars($_POST['role']);

    $pengguna_baru = mysql_close($konek, "SELECT username FROM tb_user WHERE username = '$username'");
    if(mysqli_fetch_assoc($pengguna_baru)) {
    echo "
      <script>
        alert('Pengguna berhasil ditambah');
        document.location.href = 'data_user.php';
      </script>
    "; 
  }else{
    echo"
      <script>
        alert('Pengguna gagal ditambah');
        document.location.href = 'data_user.php';
      </script>
    ";
  }
  
  if ($password !== $verifikasi) {
    echo "
      <script>
        alert('kata sandi tidak sesuai');
        document.location.href = 'tambah_user.php';
      </script>
    ";
  }

  $password_hash = password_hash($verifikasi, PASSWORD_DEFAULT);

  $password_baru = mysqli_query($konek, "INSERT INTO tb_user VALUES ('', '$nm_user', '$username', '$password_hash', '$role')");

  if ($password_hash) {
    echo "
      <script>
        alert('pengguna berhasil ditambah');
        document.location.href = 'data_user.php';
      </script>
    ";
  }else{
    echo "
      <script>
        alert('pengguna gagal ditambah');
        document.location.href = 'tambah_user.php';
      </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah User</title>

  <!-- Custom fonts for this template-->
  <link href="bs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bs/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="bs/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="bs/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Perpush Irgi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Dasboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Buku</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h4 class="mt-3">Tambah Data User</h4>
    <br>
    <div class="row">
      <div class="col-lg-5">
        <div class="container rounded-lg shadow p-3 mb-3 bg-white rounded">
          <div class="row">
            <div class="col">
              <form method="POST">
                <div class="row mt-3">
                  <div class="col">
                    <label>Nama User</label>
                    <input type="text" name="nm_user" class="form-control" required placeholder="Masukan nama">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required placeholder="Masukan username"> 
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required placeholder="Masukan Password">
                  </div>
                  <div class="col">
                    <label>Verifikasi Password</label>
                    <input type="password" name="verifikasi" class="form-control" required placeholder="Masukan ulang Password">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Jabatan</label>
                    <select class="form-control" name="role">
                      <option value="admin">Admin</option>
                      <option value="staff">Staff</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <a href="data_user.php" class="btn btn-danger btn-lg btn-block">Kembali</a>
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="tambah_user">Tambah</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
  




  <!-- Bootstrap core JavaScript-->
  <script src="bs/vendor/jquery/jquery.min.js"></script>
  <script src="bs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bs/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bs/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="bs/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="bs/js/demo/chart-area-demo.js"></script>
  <script src="bs/js/demo/chart-pie-demo.js"></script>
  <script src="bs/js/sweetalert2.min.js"></script>
  <script type="text/javascript"></script>


</body>

</html>
