<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows){
			$_SESSION['username'] = $username;
			 ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Success</title>

    <link rel="shortcut icon" href="../images/shirt.png">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0; /* Light gray background */
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 300px;
            margin-top: 80px;
            background-color: #fff; /* White background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px); /* Start slightly above its final position */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h3 {
            color: #14cde7; /* Light blue heading color */
            font-weight: 100;
            margin-bottom: 10px;
            text-align: center;
        }

        p {
            color: #555; /* Dark gray text color */
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px; /* Add some space below paragraph */
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue button background color */
            color: #fff; /* White text color */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth color transition */
        }

        a:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>You have logged in successfully!</h3>
        <p>Click here to <a href='index.php'>GO ON HOMEPAGE</a></p>
    </div>
</body>
</html>



             <?php
            }else{ 
				echo "<body background=\"login.png\"><script>alert('username or password is incorrect');location.replace('login.php');</script></body>";
				}
    }else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css">

<link rel="shortcut icon" href="../images/shirt.png">

<style type="text/css">
	.forgot{
		text-decoration: none;
		color: red;
		margin-left: 250px;
	}
	.forgot:hover{
		color:#14cde7;
	}
	.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
	height: 400px;
    width: 500px;
}

.loader.hidden {
    animation: fadeOut 2s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}
</style>
</head>
<body background="../images/back.jpg">
<div class="loader">
    <img height="50" width="50" src="../images/shopping.gif" alt="Loading..." />
       </div>

       <div class="form" style="margin-top: 50px;">
    <fieldset style="width: 400px; border: none; background: linear-gradient(135deg, #2a2a72, #009ffd); text-align: center; margin: 0 auto; border-radius: 20px; padding: 30px;">
        <h1 style="color: white; font-size: 2.5em; margin-bottom: 30px;">Login</h1>
        <form class="form1" action="" method="post" name="login" style="background: none;">
            <div style="margin-bottom: 30px;">
                <input style="height: 50px; width: 100%; padding: 10px; border: none; border-radius: 25px; outline: none; background: rgba(255, 255, 255, 0.3); color: white; font-size: 1.2em;" id="name" type="text" name="username" placeholder="Username" required>
            </div>
            <div style="margin-bottom: 30px;">
                <input style="height: 50px; width: 100%; padding: 10px; border: none; border-radius: 25px; outline: none; background: rgba(255, 255, 255, 0.3); color: white; font-size: 1.2em;" id="pass" type="password" name="password" placeholder="Password" required>
            </div>
            <div style="margin-bottom: 30px;">
                <input class="sub" name="submit" type="submit" value="Login" style="height: 50px; width: 100%; background-color: #14cde7; color: white; border: none; border-radius: 25px; cursor: pointer; outline: none; transition: background-color 0.3s;">
            </div>
        </form>
        <p style="color: white; font-size: 1em;">Not registered yet? <a href="registration.php" style="color: #14cde7;">Register Here</a></p>
        <p style="color: white; font-size: 0.8em;">Forgot your password? <a href="forgotpassword.php" style="color: #14cde7;">Reset here</a></p>
    </fieldset>
</div>

<?php } ?>
<script type="text/javascript">
	window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>


</body>
</html>