<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Risk';

require_once('Models/RisksDataSet.php');

$risksDataSet = new RisksDataSet();
$view->risksDataSet = $risksDataSet->fetchAllRisks();
var_dump($view->risksDataSet);
require_once('Views/risk.phtml');
