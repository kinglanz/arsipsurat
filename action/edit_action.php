<?php 
include("../config/koneksi.php");

	if(isset($_POST['submit'])){
		$id_user = $_POST['id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_baru =md5 ($_POST['password_baru']);
		$fullname = $_POST['fullname'];
		$level = $_POST['level'];
		if (empty($_POST['password_baru'])) {
		$edit = mysqli_query($conn,"UPDATE user SET username='$username', password='$password', fullname='$fullname', level='$level' WHERE id_user='$id_user'") or die(mysqli_error());
	}else if (! empty($_POST['password_baru'])) {
		$edit = mysqli_query($conn,"UPDATE user SET username='$username', password='$password_baru', fullname='$fullname', level='$level' WHERE id_user='$id_user'") or die(mysqli_error());
	}
		if ($edit===true) {
			echo '
			<script type="text/javascript">
	  			alert("Berhasil diubah!!!");
	  			window.location.href="../pages/datapengguna.php";
			</script>';
			
		}else{
			echo '<div class="alert alert-danger">Data gagal disimpan, Silahkan coba lagi. </div>';
		}
		
	}
 ?>