<?php

$view = new stdClass();
$view->pageTitle = 'Index';

if (isset($_SESSION['id'])) {
	header('location: risks.php');
}

require_once('Views/index.phtml');
