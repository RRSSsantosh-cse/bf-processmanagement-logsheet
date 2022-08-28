<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['name'])){
?>

<!DOCTYPE html> 
<html>
  <head>
<title>LOGIN</title>
<link rel="stylesheet" href="sam.css">
</head> 
<body>
<?php header("location:hm.php");?>
</body>
</html>

<?php } 
else {
  header("location:hm.php");
} 
?>