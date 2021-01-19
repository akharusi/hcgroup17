<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Login';
require_once('Models/userDataSet.php');

if(isset($_POST['login-btn'])) {
    $email = $_POST['user-email'];
    $password = $_POST['user-pass'];
	
	$loginObject = new UserDataSet();
	$checkLogin = $loginObject->login($_POST['user-email'], $_POST['user-pass']);
}

require_once('Views/index.phtml');
