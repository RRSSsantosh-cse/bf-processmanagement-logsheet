<?php 
session_start();
include "connection.php";
if(isset($_POST['una'])&&isset($_POST['ps'])) 
{
function validate($data) 
{
$data=trim($data) ;
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data ;
}
$user=validate($_POST['una']) ;
$pass=validate($_POST['ps']);
if(empty($user)){
    header("Location:sample.php?error=user name is required") ;
  exit();
}
else if(empty($pass)) {
header("Location:sample.php?error=password is required");
exit() ;
}
else{
  $sql="SELECT * FROM users WHERE email='$user' AND password='$pass'"; 
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);
  if(mysqli_num_rows($res)) 
  {
$_SESSION['user_name']=$row['user_name'];
$_SESSION['password']=$row['password'];
$_SESSION['email']=$row['email'];
$_SESSION['id']=$row['id'];
header("Location:home.php");
}

else 
{
  header("Location:sample.php?error=Invalid user");
exit() ;
}
}
} 
else{
    header("Location:sample.php"); 
    exit();
}