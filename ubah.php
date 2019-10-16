<?php 

	include "koneksi.php";
    $id=$_POST['id'];
	$nama = $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

	$query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', ttl='$ttl', alamat='$alamat', semester='$semester', prodi='$prodi' WHERE id='$id'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: index.php");

 ?>