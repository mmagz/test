<?php
include("dbcon.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$email=mysqli_real_escape_string($con,$_POST['email']); 
$password=mysqli_real_escape_string($con,$_POST['password']); 
$password=md5($password);
$sql="SELECT id FROM user_reg WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
 
$_SESSION['email']=$email;

header("location: welcome.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
<form action="" method="post">
<label>email :</label>
<input type="text" name="email"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>