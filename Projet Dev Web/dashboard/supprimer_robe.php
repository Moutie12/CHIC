<?php
include_once('../connect.php');
$id = $_GET['id'] ;
$sql = "DELETE FROM robe WHERE id = ".$id ;
mysqli_query($connect,$sql) ;
header('location:http://localhost/Projet%20Dev%20Web/dashboard/robe.php');

?>