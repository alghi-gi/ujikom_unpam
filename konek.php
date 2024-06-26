<?php 

	session_start();

	$konek = mysqli_connect("localhost", "root", "", "db_perpus_irgi");

	if ($konek) {
		//echo "data kesambung";
	} else {
		//echo "data gagal kesambung"
	}

 	
 	function tambah_anggota($data){
 		
 		global $konek;

 		$nim = $data['nim'];
 		$nm_ang = $data['nm_ang'];
 		$jk_ang = $data['jk_ang'];
 		$usia = $data['usia'];
 		$semester_ang = $data['semester_ang'];
 		$kelas_ang = $data['kelas_ang'];
 		$nomer_ang = $data['nomer_ang'];
 		$alamat_ang = $data['alamat_ang'];

 		mysqli_query($konek, "INSERT INTO tb_anggota (nim, nm_ang, jk_ang, usia, semester_ang, kelas_ang, nomer_ang, alamat_ang) VALUES ('$nim', '$nm_ang', '$jk_ang', '$usia', '$semester_ang', '$kelas_ang', '$nomer_ang', '$alamat_ang')");

 		return mysqli_affected_rows($konek);
 	}

 	function hapus_anggota($data){

 		global $konek;

 		$id_ang = $data['id_ang'];

 		mysqli_query($konek, "DELETE FROM tb_anggota WHERE id_ang = '$id_ang'");

 		return mysqli_affected_rows($konek);
 	}


 	function ubah_anggota($data){

 		global $konek;

 		$id_ang = $data['id_ang'];
 		$nim = $data['nim'];
 		$nm_ang = $data['nm_ang'];
 		$jk_ang = $data['jk_ang'];
 		$usia = $data['usia'];
 		$semester_ang = $data['semester_ang'];
 		$kelas_ang = $data['kelas_ang'];
 		$nomer_ang = $data['nomer_ang'];
 		$alamat_ang = $data['alamat_ang'];

 		mysqli_query($konek, "UPDATE tb_anggota SET nim = '$nim', nm_ang = '$nm_ang', jk_ang = '$jk_ang', usia = '$usia', semester_ang = '$semester_ang', kelas_ang = '$kelas_ang', nomer_ang = '$nomer_ang', alamat_ang = '$alamat_ang' WHERE id_ang = '$id_ang'");

 		return mysqli_affected_rows($konek);
 	}


 	function tambah_data_buku($data){

 		global $konek;

 		$judul = $data['judul'];
 		$pengarang = $data['pengarang'];
 		$penerbit = $data['penerbit'];
 		$tahun_terbit = $data['tahun_terbit'];
 		$kategori = $data['kategori'];
 		$stok = $data['stok'];

 		mysqli_query($konek, "INSERT INTO buku (judul, pengarang, penerbit, tahun_terbit, kategori, stok) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun_terbit', '$kategori', '$stok')");

 		return mysqli_affected_rows($konek);
 	}


	function hapus_buku($data){

 		global $konek;

 		$id_buku = $data['id_buku'];

 		mysqli_query($konek, "DELETE FROM buku WHERE id_buku = '$id_buku'");

 		return mysqli_affected_rows($konek);
 	}


 	function ubah_data_buku($data){

 		global $konek;

 		$id_buku = $data['id_buku'];
 		$judul = $data['judul'];
 		$pengarang = $data['pengarang'];
 		$penerbit = $data['penerbit'];
 		$tahun_terbit = $data['tahun_terbit'];
 		$kategori = $data['kategori'];
 		$stok = $data['stok'];

 		mysqli_query($konek, "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', kategori = '$kategori', stok = '$stok' WHERE id_buku = '$id_buku'");

 		return mysqli_affected_rows($konek);
 
 	}

 ?>


