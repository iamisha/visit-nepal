
<?php
session_start();/* we give session start in config file so that we don't have to give session start in each and every file */
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formdb';
$dbc = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
?>