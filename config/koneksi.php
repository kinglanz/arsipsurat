<?php
$db_name = 'arsipsurat';
$username = 'root';
$password = '';
$hostname = 'localhost';
$conn = new mysqli(
		$hostname,
		$username,
		$password,
		$db_name
	);
$conn->query('set foreign_key_checks = 0');
if ($conn->connect_error) {
	die('connection failed :' . $conn->connection_error);
}
?>
