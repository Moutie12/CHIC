<?php
include_once('../connect.php');
session_start() ;
$id = $_GET['id'] ;
$sql = "DELETE FROM pantalon WHERE id = ".$id ;
mysqli_query($connect,$sql) ;
header('location:http://localhost/Projet%20Dev%20Web/dashboard/pantalon.php');

?>