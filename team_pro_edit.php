<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$nama_kelompok = $_POST['nama_team'];
	
$result = mysqli_query($mysqli, "UPDATE tab_team SET nama_kelompok='$nama_kelompok' WHERE id='$id' ");   
echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kelompok.php';
			</script>";
