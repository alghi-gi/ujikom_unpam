<?php 

require "konek.php";


  if (isset($_SESSION['status_login'])) {
    if ($_SESSION['status_login'] == 1) {
      header('location: index.php');
      exit;
    }
  }

  // echo password_hash('admin', PASSWORD_DEFAULT);

  if (isset($_POST['login_masuk'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql_login = mysqli_query($konek, "SELECT * FROM tb_user WHERE username = '$username'");
    $panggil_sql_login = mysqli_fetch_assoc($sql_login);

    if ($panggil_sql_login) {
      if (password_verify($password, $panggil_sql_login['password'])) {
        $_SESSION['id_user'] = $panggil_sql_login['id_user'];
        $_SESSION['nm_user'] = $panggil_sql_login['nm_user'];
        $_SESSION['role'] = $panggil_sql_login['role'];
        $_SESSION['status_login'] = 1;
        echo "
          <script>
            alert('user berhasil login');
            document.location.href = 'index.php';
          </script>
        ";
      }else{
        echo "
          <script>
            alert('user gagal login, password
            salah');
            document.location.href = 'login.php';
          </script>
        ";
      }
    }else{
        echo "
          <script>
            alert('user gagal login, username salah');
            document.location.href = 'login.php';
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

  <title>Perpush Irgi</title>

  <!-- Custom fonts for this template-->
  <link href="bs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="bs/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="bs/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="bs/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <div class="container mt-5">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-5">
        <div class="container rounded-lg shadow p-3 mb-3 bg-white rounded">
          <h2 class="text-center mt-3">Login</h2>
          <p class="text-center">Selamat Datang di Perpustakaan</p>
          <div class="row">
            <div class="col">
              <form method="POST">
                <div class="row mt-3">
                  <div class="col">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda" required>
                  </div>
                </div> 
                <div class="row mt-3">
                  <div class="col">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda" required>
                  </div>
                </div>
                <hr>
                <div class="row mt-3">
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login_masuk">Login</button>
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
