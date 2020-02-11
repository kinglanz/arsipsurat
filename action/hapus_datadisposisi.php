<?php
include '../config/koneksi.php';
$id_disposition=$_GET['id_disposition'];
$hapus=mysqli_query($conn,"SELECT * FROM disposition WHERE id_disposition='$id_disposition'");
$result=mysqli_fetch_array($hapus);
if ($delete=mysqli_query($conn,"DELETE FROM disposition WHERE id_disposition='$id_disposition'")) {
	header("location:../pages/datadisposisi.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($conn));
?>