<link rel="stylesheet" href="main.css">
<?php 
//enable errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
require_once 'weekGenerator.php';

$week = new weekGenerator();

$day  = (empty($_GET["dia"])? null : $_GET["dia"]);

echo $week->generate($day);
echo $week->translateDay();
