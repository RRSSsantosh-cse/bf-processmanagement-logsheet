<?php
include 'connection.php';
if(isset($_POST['submit'])){
$name=$_POST['user_name'];
$email= $_POST['email'];
$number=$_POST['mobile'];
$password=$_POST['password'];
$sql="insert into `users`(user_name,email,mobile,password) values('$name','$email','$number','$password')";
$result=mysqli_query($conn,$sql);
if(!empty($email)and !empty($number) and !empty($password))
{
  header('location:sample.php');}
 
}

?>
<!DOCTYPE html> 
<html>
  <head>
<title>SIGN IN</title>
<link rel="stylesheet" href="sam.css">
</head> 
<body>
<script type="text/javascript">
  function fun(){
    var b = document.forms["xyz"]["email"].value;
    var c = document.forms["xyz"]["mobile"].value;
    var d = document.forms["xyz"]["password"].value;
    if (b == null || b == "", c == null || c == "", d == null || d == "") {
      alert("Please Fill All Required Field");

    }
    else{
    alert("Successfully loggin");
    }
  }
</script>    
      <style>
  hv{
  display:flex;
 justify-content:spacing-around;
}
 
  </style>
<form method="post" name="xyz">
<h2>BF Process Control System</h2><br>
  <h2>SIGN IN</h2>

  <label>user name</label>
  <input type="txt" name="user_name" placeholder="name" > 
  <label>Email</label>
  <input type="email" name="email" placeholder="name" id="b"> 
  <label>Mobile number</label>
  <input type="txt" name="mobile" placeholder="name" maxlength="10" id="c"> 
  <label>password</label>
  <input type="pass"  name="password"placeholder="********" maxlength="8" id="d"><br>
  <hv>
  <a href="qw.php">clear</a>
  <button type="submit" name="submit" onclick="fun();" >SIGN IN</button>
</hv>
</form>
</body>
</html>