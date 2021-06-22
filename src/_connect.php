<?php 
$DB = 'statistiky';
$servername = 'localhost';
$username = 'root';
$password = '' ;

$con = new mysqli($servername, $username, $password, $DB);

if(!$con) {

    die('connection failed: ' . mysqli_conenct_error());

}