<?php

include "../common/conn.php";

$error = "";

$name = $_POST['name'];
if(empty($name)) $error .= "<p>Name is Required!</p>";

$user = $_POST['user'];
if(empty($user)) $error .= "<p>User is Required!</p>";

$pass = $_POST['pass'];
if(empty($pass)) $error .= "<p>Password is Required!</p>";

$rePass = $_POST['rePass'];
if(empty($rePass)) $error .= "<p>Repeat Password is Required!</p>";

if(isset($rePass) && isset($pass) && $pass != $rePass) $error .= "<p>Passwords don't Match!</p>";

if($error == "") {
	$sql = "SELECT * FROM users WHERE user = '".$user."'";
	$res = mysql_query($sql, $conn);
	$num = mysql_num_rows($res);

	if($num == 0) {
		$sqlIns = "INSERT INTO users (name, user, pass, role) VALUES ('".$name."', '".$user."', '".base64_encode(base64_encode($pass))."', 1)";
		$resIns = mysql_query($sqlIns, $conn);
		echo "Registered";
	}

	else {
		echo "User already Registered!";
	}
}

else echo $error;

?>