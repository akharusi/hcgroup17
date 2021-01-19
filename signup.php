<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Login';
require_once('Models/userDataSet.php');

if(isset($_POST['signup-btn'])) {

      $firstName = $_POST['first-name'];
	  $lastName = $_POST['last-name'];
	  $contactNo = $_POST['contactNo'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
	  
	  $registerObject = new UserDataSet();
	  $registerObject->register($email,$firstName,$lastName,$contactNo,$hashed_password);
}

require_once('Views/index.phtml');
