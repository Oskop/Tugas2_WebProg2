<?php 

	include "koneksi.php";

	$nama = $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

	$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$ttl', '$alamat', '$semester', '$prodi', '$foto')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: index.php");

 ?>