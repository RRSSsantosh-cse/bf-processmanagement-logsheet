<?php 
$sname="localhost";
$unmae="root";
$password="";
$db="test";
$conn=mysqli_connect($sname,$unmae,$password,$db);
if(!$conn){echo 'connection failed';}
?>