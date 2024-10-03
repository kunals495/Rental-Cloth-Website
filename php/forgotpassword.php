<?php
 session_start();
 require('db.php');
if (isset($_POST['username'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];
 	$rows=mysqli_query($con,"SELECT password FROM `users` WHERE username='$username'");
 	
 	if($rows){
 		 $sql=mysqli_query($con,"UPDATE `users` SET password='".md5($password)."' where username='$username'");
 		 if($sql && $password == $confirmpassword)
        { ?>
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change Success</title>
	<link rel="shortcut icon" href="../images/shirt.png">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			background-color: #87CEEB;
            
        
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 300px;
            margin-top: 80px;
            background-color: #fff;
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
            color: #14cde7;
            font-weight: 100;
            margin-bottom: 10px;
            text-align: center;
        }

        a {
            color: red;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        a:hover {
            color: #ff6666; /* Light red on hover */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Password Change Successful!</h3>
        <p>Your password has been changed successfully.</p>
        <a href="login.php">LOGIN</a>
    </div>
</body>
</html>


           <?php
		}
	
       else
        {
       echo "<script>alert('password do not match');</script>";
       echo "<script>location.replace('forgotpassword.php');</script>";
       }
 	}
 	else{
 		echo "username invalid";
 	}
 }
 else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #545d9f;
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 300px;
            margin-top: 50px;
            padding: 20px;
            border-radius: 50px;
            border: 2px solid #14cde7;
            background-color: #545d9f;
        }

        h1 {
            color: white;
            text-align: center;
        }

        input {
            width: calc(100% - 20px);
            height: 25px;
            margin-top: 20px;
            margin-left: 10px;
            padding: 5px;
            border: 1px solid #14cde7;
            border-radius: 20px;
            outline: none;
        }

        .sub {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            border: none;
            border-radius: 20px;
            background-color: #14cde7;
            color: white;
            cursor: pointer;
            outline: none;
        }

        .sub:hover {
            background-color: #2696d3; /* Lighter shade of blue on hover */
        }
		
    </style>
	<link rel="shortcut icon" href="../images/shirt.png">
</head>
<body background = "../images/back.jpg">
    <div class="form-container">
        <h1>Forgot Password?</h1>
        <form class="form1" action="" method="post" name="forgotpassword">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="New Password" required><br>
            <input type="password" name="confirmpassword" placeholder="Confirm New Password" required><br>
            <input class="sub" name="submit" type="submit" value="Update Password">
        </form>
    </div>


<?php } ?>
</body>
</html>