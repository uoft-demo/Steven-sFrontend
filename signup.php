<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">


		<div class="signup">
		
		<form method="post">
			<label for="chk" aria-hidden="true">Sign up</label>
			<input id="text" type="text" name="user_name" placeholder="username">
			<input id="text" type="password" name="password" placeholder="password">
			<button id="button" type="submit" value="Signup">Sign up</button>

			<p> Already an account?<a href="login.php"> Log in</a> here</p>
		</form>
	</div>
	<a href="homepage.html" class="close">
	</div>
</body>
</html>