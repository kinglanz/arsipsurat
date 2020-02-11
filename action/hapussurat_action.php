<?php
include '../config/koneksi.php';
$id_mail=$_GET['id_mail'];

$hapus=mysqli_query($conn,"SELECT * FROM mail WHERE id_mail='$id_mail'");
$r=mysqli_fetch_array($hapus);

if (is_file("../pages/files/".$r['file_upload'])) 
	unlink("../pages/files/".$r['file_upload']);

if ($delete=mysqli_query($conn,"DELETE FROM mail WHERE id_mail='$id_mail'")) {
	header("Location:../pages/datasurat.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($conn));
?>