<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup_form</title>
  <link rel="stylesheet" type="text/css" href="signup.css" />
</head>
<body>
  <header>
    <h2 class="logo">The Last Library</h2>
    <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <button class="btnlogin-popup">Login</button>
    </nav>
</header>
  <div class="wrapper">
    <form action="signup.php" method="post" >
      <h2>signup_form</h2>
	 
	  <div class="input-field">
        <input type="text" id="name" name="name" required>
        <label>Enter your name</label>
      </div>
	 
      <div class="input-field">
        <input type="text" id="email" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password" required>
        <label> Create password</label>
      </div>
      <div class="input-field">
        <input type="text" id="password2" name="university" required>
        <label>university</label>
      </div>
      <button class="submit" name="submit">Signup now</button>
      <div class="Login">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>




