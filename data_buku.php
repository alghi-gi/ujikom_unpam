<?php 

  require "konek.php";

  $sql_panggil_buku = mysqli_query($konek, "SELECT * FROM buku");

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Buku</title>

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
            <a class="nav-link" href="data_user.php">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="data_buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a href="keluar.php" class="btn btn-outline-danger ml-2">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h4 class="mt-3"><i class="fas fa-table"></i> Data Buku</h4>
    <br>
    <div class="container rounded-lg shadow p-3 mb-3 bg-white rounded">
      <div class="row">
        <div class="col">
          <a href="tambah_buku.php" class="btn btn-primary">+</a>
        </div>
      </div>
      <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped text-dark">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Kategori</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
            <?php foreach ($sql_panggil_buku as $data): ?>
              <tr>
                <td><?php echo $no++; ?>.</td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['pengarang']; ?></td>
                <td><?php echo $data['penerbit']; ?></td>
                <td><?php echo $data['tahun_terbit']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['stok']; ?></td>
                <td>
                  <a onclick="return confirm('apakah data ini ingin dihapus?')" href="hapus_buku.php?id_ang=<?php echo $data['id_buku']; ?>" class="btn btn-danger mb-3">Hapus</a>
                  <a href="ubah_buku.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-warning">Ubah</a>
                </td>
              </tr>
            </tbody>
          <?php endforeach ?>
          </table>
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
