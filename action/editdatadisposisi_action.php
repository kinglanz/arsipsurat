<?php 
include("../config/koneksi.php");

	if(isset($_POST['submit'])){
		$id_disposition=$_POST['id_disposition'];
		$id_user = $_POST['id_user'];
		$id_mail = $_POST['id_mail'];
		$reply_at = $_POST['reply_at'];
		$disposition_at = $_POST['disposition_at'];
		$description = $_POST['description'];
		$notification = $_POST['notification'];
		$status = $_POST['status'];
		
		$edit = mysqli_query($conn,"UPDATE disposition SET id_user='$id_user',id_mail='$id_mail',reply_at='$reply_at', disposition_at='$disposition_at', description='$description', notification='$notification', status='$status' WHERE id_disposition='$id_disposition'") or die(mysqli_error());
		if ($edit===true) {
			echo '
			<script type="text/javascript">
	  			alert("Berhasil diubah!!!");
	  			window.location.href="../pages/datadisposisi.php";
			</script>';
			
		}else{
			echo '<div class="alert alert-danger">Data gagal disimpan, Silahkan coba lagi. </div>';
		}
		
	}
 ?>