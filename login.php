<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_email'];
		$password = $_POST['password'];

		if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
		{

			//read from database
			$query = "select * from users where user_email = '$user_email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
  <link 
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
    <form action="login.php" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="number" name="user_email"  required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password"  required>
        <label>Enter your password</label>
      </div>
	  
      <div class="forget">
        <label for="remember">
            <input type="checkbox" id="remember">
            <p>Remember me</p>
          </label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" name="submit">Log In</button>
        <div class="signup_form">
          <p>Don't have an account? <a href="signup.php">Signup Now</a></p>
        </div>
      </form>
    </div>
  </body>
  </html>


