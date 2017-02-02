<?php

session_start();

include "../common/conn.php";

$error = "";

$user = $_POST['user'];
if(empty($user)) $error .= "<p>User is Required!</p>";

$pass = $_POST['pass'];
if(empty($pass)) $error .= "<p>Password is Required!</p>";

if($error == "") {
	$sql = "SELECT * FROM users WHERE user = '".$user."' AND pass = '".base64_encode(base64_encode($pass))."'";
	$res = mysql_query($sql, $conn);
	$num = mysql_num_rows($res);

	if($num > 0) {
		$row = mysql_fetch_array($res);
		$_SESSION['user'] = $user;
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['role'] = $row['role'];
		echo "Logged|".$user;
	}
	else {
		echo "Wrong User/Password!";
	}
}

else echo $error;

?>