<html>
<head><title>Login</title></head>
<body>


    <form action="index.php" method="post">

     First Name: <input type="text" name="fname"><br>
     Last Name: <input type="text" name="lname"><br>
     Email: <input type="text" name="email"><br>
     Password: <input type="password" name="password"><br>
     <input type="submit" value="submit">

    </form>   

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$fname= $_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	 if($fname==''||  $lname='' || $email=='' || $password==''){
	 	echo "Fill all values";
	 }
	 else{

	 	require_once('dbcon.php');
	 	$sql= "INSERT INTO user_reg (fname,lname,email,password) VALUES 
	 	       ('$fname','$lname','$email',md5('$password'))";
	 	       if(mysqli_query($dbcon,$sql)){
	 	         
	 	       	echo 'successfully registered';
	 	       }
	 	       	else {
	 	       	echo 'Error';
	 	       }
	 	       mysqli_close($dbcon);
	 }





}
?>