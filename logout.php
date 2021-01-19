<?php
session_start();

require_once('Models/UserDataSet.php');

if (isset($_POST['logoutbtn'])) {
	unset($_SESSION["id"]);
	unset($_SESSION["firstName"]);
	unset($_SESSION["lastName"]);
	session_destroy();
	header('Location: index.php');
}
?>
