<?php
session_start();
include '../config/koneksi.php';

$filename=$_GET['filename'];
$id=$_GET['id'];

$q=mysqli_query($conn,"UPDATE disposition SET status='1' WHERE id_disposition='$id'");
if ($q) {
	header('location:../file/'.$filename);
}
?>