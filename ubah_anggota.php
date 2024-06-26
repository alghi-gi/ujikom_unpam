<?php 

  require "konek.php";

  if (isset($_POST['ubah_data_anggota'])) {
    if (ubah_anggota($_POST) > 0) {
      echo "
        <script>
          alert('data berhasil diubah');
          document.location.href = 'data_anggota.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('data gagal diubah');
          document.location.href = 'ubah_anggota.php';
        </script>
      ";
    }
  }

  $id_ang = $_GET['id_ang'];
  $sql_ubah = mysqli_query($konek, "SELECT * FROM tb_anggota WHERE id_ang = '$id_ang'");
  $sql_panggil_anggota = mysqli_fetch_assoc($sql_ubah);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Anggota | <?php echo $sql_panggil_anggota['nm_ang']; ?></title>

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
            <a class="nav-link active" href="data_anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Buku</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h4 class="mt-3">Ubah Data Anggota</h4>
    <br>
    <div class="row">
      <div class="col-lg-5">
        <div class="container rounded-lg shadow p-3 mb-3 bg-white rounded">
          <div class="row">
            <div class="col">
              <form method="POST">
                <input type="hidden" name="id_ang" value="<?php echo $sql_panggil_anggota['id_ang']; ?>">
                <div class="row">
                  <div class="col">
                    <label>NIM</label>
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" value="<?php echo $sql_panggil_anggota['nim']; ?>" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label>Nama Anggota</label>
                    <input type="text" name="nm_ang" class="form-control" placeholder="Masukan Nama Lengkap" value="<?php echo $sql_panggil_anggota['nm_ang']; ?>" required>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-7">
                    <label>Jenis Kelamin</label>
                    <select name="jk_ang" class="form-control">
                      <?php if ($sql_panggil_anggota['jk_ang'] == 'laki-laki'): ?>
                        <option value="laki-laki">Laki - laki</option>
                        <option value="perempuan">Perempuan</option>
                      <?php elseif ($sql_panggil_anggota['jk_ang'] == 'perempuan'): ?>
                        <option value="perempuan">Perempuan</option>
                        <option value="laki-laki">Laki - laki</option>
                      <?php endif ?>
                      </select>
                    </div>
                    <div class="col">
                      <label>Usia</label>
                      <input type="number" name="usia" class="form-control" placeholder="Masukan Usia" value="<?php echo $sql_panggil_anggota['usia']; ?>" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-7">
                      <label>Semester</label>
                      <input type="text" name="semester_ang" class="form-control" placeholder="Semester" value="<?php echo $sql_panggil_anggota['semester_ang']; ?>" required>
                    </div>
                    <div class="col">
                      <label>Kelas</label>
                      <input type="text" name="kelas_ang" class="form-control" placeholder="Kelas" value="<?php echo $sql_panggil_anggota['kelas_ang']; ?>" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <label>Nomer Telepon</label>
                      <input type="number" name="nomer_ang" class="form-control" placeholder="Masukan Nomer Anda" value="<?php echo $sql_panggil_anggota['nomer_ang']; ?>" required>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <label>Alamat</label>
                      <div class="form-floating">
                        <textarea class="form-control" name="alamat_ang" value="<?php echo $sql_panggil_anggota['alamat_ang']; ?>" required placeholder="Masukan Alamat Anda" id="floatingTextarea2" style="height: 100px"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-6">
                      <a href="data_anggota.php" class="btn btn-danger btn-lg btn-block">Kembali</a>
                    </div>
                    <div class="col-lg-6">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" name="ubah_data_anggota">Ubah</button>
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
