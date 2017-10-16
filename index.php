<link rel="stylesheet" href="main.css">

<?php 
require_once 'weekGenerator.php';

$week = new weekGenerator();

$day = (empty($_GET['data'])? date('N'): date('N', strtotime($_GET['data'])));
echo $week->generate($day);
?>