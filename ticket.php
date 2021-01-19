<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Ticket System';
require_once('Models/postDataSet.php');
require_once('Models/replyDataSet.php');

if (!isset($_SESSION['id'])) {
	header('location: index.php');
}

$postsDataSet = new postDataSet();

if (isset($_POST['sendButton'])) {
	$message = $_POST['message'];
	$userID = $_SESSION['id'];
	$view->postsDataSet = $postsDataSet->addPost($message,$userID);
}

$view->postsDataSet = $postsDataSet->fetchPostsForUser($_SESSION['id']);

require_once('Views/ticket.phtml');
