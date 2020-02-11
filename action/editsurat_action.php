<?php 
  include "../config/koneksi.php";
  $id_mail=$_POST['id_mail'];
  $edit = mysqli_query($conn, "SELECT * FROM mail where id_mail='$id_mail'");
  $r = mysqli_fetch_array($edit);
  if (isset($_POST['submit'])){
    $id_mail_type=$_POST['id_mail_type'];
    $incoming_at=$_POST['incoming_at'];
    $mail_code=$_POST['mail_code'];
    $mail_date=$_POST['mail_date'];
    $mail_from=$_POST['mail_from'];
    $mail_to=$_POST['mail_to'];
    $mail_subject=$_POST['mail_subject'];
    $description=$_POST['description'];
    if (empty($_FILES['file_upload']['name'])) {
      $file_upload= $r['file_upload'];
    }else{
      $file_upload = date('d-m-Y-his-').$_FILES['file_upload']['name'];
      move_uploaded_file($_FILES['file_upload']['tmp_name'], "../pages/files/".$file_upload);
      unlink("../pages/files/".$r['file_upload']);
    }
    $edit=mysqli_query($conn,"UPDATE mail SET incoming_at='$incoming_at', mail_code='$mail_code', mail_date='$mail_date', mail_from='$mail_from', mail_to='$mail_to', mail_subject='$mail_subject', description='$description', file_upload='$file_upload' WHERE id_mail = '$id_mail' ");

	 if ($edit) {
     header('Location:../pages/datasurat.php');
   }
  
  ?>
  <?php
}
?>