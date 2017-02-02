<?php

session_start();

include "../common/conn.php";

$error = "";

$description = $_POST['description'];
if(empty($description)) $error .= "<p>Description is Required!</p>";

$date = $_POST['date'];
if(empty($date)) $error .= "<p>Date is Required!</p>";

$hour = $_POST['hour'];
if(empty($hour)) $error .= "<p>Hour is Required!</p>";

$val = $_POST['val'];
if(empty($val)) $error .= "<p>Value is Required!</p>";

$comment = $_POST['comment'];

if($error == "") {
	$sqlIns = "INSERT INTO expenses (description, dat, hour, val, comment, user_id) VALUES ('".$description."', '".$date."', '".$hour."', '".$val."', '".$comment."', '".$_SESSION['id']."')";
	$resIns = mysql_query($sqlIns, $conn);
	echo "Registered|".$_SESSION['user'];
}

else echo $error;

?>