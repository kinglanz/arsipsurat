<?php 
include("../config/koneksi.php");

	if(isset($_POST['submit'])){
		$id_mail=$_POST['id_mail'];
        $id_mail_type=$_POST['id_mail_type'];
        $incoming_at=$_POST['incoming_at'];
        $mail_code=$_POST['mail_code'];
        $mail_date=$_POST['mail_date'];
        $mail_from=$_POST['mail_from'];
        $mail_to=$_POST['mail_to'];
        $mail_subject=$_POST['mail_subject'];
        $description=$_POST['description'];
        $file_baru=$_FILES['file_baru'];
        $file_name = $file_baru['name'];
		if (empty($_POST['file_baru'])) {
			move_uploaded_file($file_baru['tmp_name'], "../pages/files/".$file_name);
		$edit = mysqli_query($conn,"UPDATE mail SET
			id_mail_type = '$id_mail_type', 
			incoming_at = '$incoming_at',
			mail_code = '$mail_code',
			mail_date = 'mail_date',
			mail_from = 'mail_from',
			mail_to = 'mail_to',
			mail_subject = 'mail_subject',
			description = 'description',
			file_upload = 'file_name'
			WHERE id_mail='$id_mail'") or die(mysqli_error());
	}else if (! empty($_POST['file_baru'])) {
		move_uploaded_file($file_baru['tmp_name'], "../pages/files/".$file_name);
		$edit = mysqli_query($conn,"UPDATE mail SET 
			incoming_at = '$incoming_at',
			mail_code = '$mail_code',
			mail_date = 'mail_date',
			mail_from = 'mail_from',
			mail_to = 'mail_to',
			mail_subject = 'mail_subject',
			description = 'description',
			file_upload = 'file_name'
			WHERE id_mail='$id_mail'") or die(mysqli_error());
	}
		if ($edit===true) {
			// echo '
			// <script type="text/javascript">
	  // 			alert("Berhasil diubah!!!");
	  // 			window.location.href="../pages/datasurat.php";
			// </script>';
			
		}else{
			echo '<div class="alert alert-danger">Data gagal disimpan, Silahkan coba lagi. </div>';
		}
		
	}
 ?>

 