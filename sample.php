
<!DOCTYPE html> 
<html>
  <head>
<title>LOGIN</title>
<link rel="stylesheet" href="sam.css">
</head> 
<body>

<form action="login.php" method="post">
  <h2>BF Process Control System</h2><br>
<h2>LOGIN</h2>
<?php  if(isset($_GET['error'])){
?>
<p class="error"><?php echo $_GET['error'] ;?></p>
<?php
}?>
  <label>Email id</label>
  <input type="email" name="una" placeholder="name"> 
  <label>password</label>
  <input type="pass"  name="ps"placeholder="********"><br>
  <a href="qw.php">New user?</a>
  <button type="sb">login</button>
</form>
</body>
</html>