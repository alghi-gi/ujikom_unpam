<?php 

	require "konek.php";

	if (isset($_GET['id_ang'])) {
		if (hapus_anggota($_GET) > 0) {
			echo "
				<script>
					alert('Data Berhasil dihapus');
					document.location.href = 'data_anggota.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data Gagal dihapus');
					document.location.href = 'data_anggota.php';
				</script>
			";
		}
	}

 ?>