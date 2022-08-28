<?php 
include 'co.php' ;
if(isset($_GET['deleteid']))
{
$id=$_GET['deleteid'] ;
$sql="delete from `rud` where id=$id";
$res=mysqli_query($conn,$sql);
if($res){header('location:hm.php');}
}




?>