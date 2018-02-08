<?php
if(isset($_POST['submit'])){
	include("include/sql_functions.php");
	$con = connect("northwind");
	$_POST=validate($con,$_POST);
	$uname=$_POST['uname'];
	$password=md5($_POST['pass']);
	echo $query="SELECT * FROM user where username='$uname'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)==0)
		echo "No such user.";
	else{
		$arr=mysqli_fetch_array($res);
		$passDB=$arr['pass'];
		if($passDB==$password){
			?>
			<h1 align="center">Login Successfull.</h1>
			<?php
		}
		else{
			?>
			<h1 align="center">Login Failed.</h1>
			<?php
		}
	}	
}
?>
<html>
<head>
<title>Login Form</title>
</head>
<body>
<h1 align="center">Login... </h1>
<form name="" action= <?= $_SERVER['PHP_SELF'] ?> method="post">
<label>Username:</label><input type="text" name="uname" placeholder="Enter username here..."><br>
<label>Password:</label><input type="password" name="pass" placeholder=""><br>
<input type="submit" name="submit" value="Login">
</form>
</body>
</html>
