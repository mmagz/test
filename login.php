<html>
<head><title>login</title></head>
<body>


	<form action="" method="post">
		Email : <input type="text" name="email">

		Password : <input type="password" name="password">

		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php
require_once('dbcon.php');
  if(isset($_POST['submit'])){

    if(empty($_POST['email']) && empty($_POST['password'])){
      echo "invalid login";

    }else

    {
      $email=$_POST['email'];
      $password=$_POST['password'];
        $sql=("SELECT id from user_reg where email='$email' and password='$password'");
        mysqli_num_rows($con,$sql);
    }
  }
mysqli_close($con);
?>
