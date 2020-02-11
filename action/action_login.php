<?php
ob_start();
session_start();

	include("../config/koneksi.php");
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$sql_login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		if (mysqli_num_rows($sql_login)>0) {
			$row_akun = mysqli_fetch_array($sql_login);
			$_SESSION['id_user'] = $row_akun['id_user'];
			$_SESSION['username'] = $row_akun['username'];
			$_SESSION['fullname'] = $row_akun['fullname'];
			$_SESSION['level'] = $row_akun['level'];
			if ($_SESSION['level']==1) {
				header("location:../pages/dashboard.php");
				// echo "sukses";
			}else{
				header("location:../pages/dashboardpengguna.php");
				// echo "gagal2";
			}
		}else{
			header("location:../index.php");
		}
	}