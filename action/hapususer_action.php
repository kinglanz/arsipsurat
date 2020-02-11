<?php
include '../config/koneksi.php';
$id_user=$_GET['id_user'];
$hapus=mysqli_query($conn,"SELECT * FROM user WHERE id_user='$id_user'");
$result=mysqli_fetch_array($hapus);
if ($delete=mysqli_query($conn,"DELETE FROM user WHERE id_user='$id_user'")) {
	header("location:../pages/datapengguna.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($conn));
?>