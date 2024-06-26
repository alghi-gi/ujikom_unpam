<?php 

require "konek.php";

  if (isset($_POST['ubah_buku'])) {
    if (ubah_data_buku($_POST) > 0) {
      echo "
        <script>
          alert('Data Berhasil diubah');
          document.location.href = 'data_buku.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('Data gagal diubah');
          document.location.href = 'ubah_buku.php';
        </script>
      ";
    }
  }

  $id_buku = $_GET['id_buku'];

  $sql_ubah_buku = mysqli_query($konek, "SELECT * FROM buku WHERE id_buku = '$id_buku'");

  $panggil_sql_buku = mysqli_fetch_assoc($sql_ubah_buku);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Data Buku | <?php echo $panggil_sql_buku['judul']; ?></title>

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
    <h4 class="mt-3">Ubah Data Buku <?php echo $panggil_sql_buku['judul']; ?></h4>
    <br>
    <div class="row">
      <div class="col-lg-5">
        <div class="container rounded-lg shadow p-3 mb-3 bg-white rounded">
          <div class="row">
            <div class="col">
              <form method="POST">
                <input type="hidden" name="id_buku" value="<?php echo $panggil_sql_buku['id_buku']; ?>">
                <div class="row">
                  <div class="col">
                    <label>Judul Buku</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo $panggil_sql_buku['judul']; ?>" placeholder="Masukan judul buku" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="<?php echo $panggil_sql_buku['pengarang']; ?>" placeholder="Masukan nama pengarang" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" value="<?php echo $panggil_sql_buku['penerbit']; ?>" class="form-control" placeholder="Masukan penerbit" required>
                  </div>
                  <div class="col">
                    <label>Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" placeholder="Masukan Tahun terbit" required value="<?php echo $panggil_sql_buku['tahun_terbit']; ?>">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Masukan Kategori Buku" required value="<?php echo $panggil_sql_buku['tahun_terbit']; ?>">
                  </div>
                  <div class="col">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" placeholder="Masukan Jumlah Stok" required value="<?php echo $panggil_sql_buku['stok']; ?>">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <a href="data_buku.php" class="btn btn-danger btn-lg btn-block">Kembali</a>
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="ubah_buku">Ubah</button>
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
