<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Risk';
require_once('Models/RisksDataSet.php');
require_once('webscraping.php');

$risksDataSet = new RisksDataSet();
$view->risksDataSet = $risksDataSet->fetchAllRisks();
//var_dump($view->risksDataSet);

//echo $_SESSION['id'];

if (!isset($_SESSION['id'])) {
	header('location: index.php');
}

if (isset($_POST["Save"])) {
	$risksDataSet->updateResidualRisk($_POST['Treatment'],$_POST['Mitigation'],$_POST['residualProbability'],$_POST['residualConsequence'],$_SESSION['riskID']);
	header('Location: risks.php');
}

if (isset($_GET['rid'])) {
	$_SESSION['riskID'] = $_GET['rid'];
} else {
	$_SESSION['riskID'] = 1;
}

require_once('Views/risks.phtml');
