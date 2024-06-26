<?php 

	require "konek.php";

	if (isset($_GET['id_buku'])) {
		if (hapus_buku($_GET) > 0) {
			echo "
				<script>
					alert('Data Berhasil dihapus');
					document.location.href = 'data_buku.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data Gagal dihapus');
					document.location.href = 'data_buku.php';
				</script>
			";
		}
	}

 ?>