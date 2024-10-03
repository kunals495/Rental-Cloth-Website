<?php


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="../styles/style.css">
<link rel="shortcut icon" href="../images/shirt.png" >
</head>
<body background="../images/back.jpg">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){

			?>
          <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="styles.css">
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

        .success-message {
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

        h2 {
            color: #007bff; /* Blue heading */
        }

        p {
            color: #555; /* Dark gray text */
            margin-bottom: 20px; /* Add some space below paragraph */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Blue button */
            color: #fff; /* White text */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth color transition */
        }

        .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="success-message">
        <h2>Registration Successful</h2>
        <p>Your account has been created successfully.</p>
        <a href="login.php" class="btn">Login</a>
    </div>
</body>
</html>

            <?php
        }
    }
        else{
?>
<div class="form" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <fieldset class="field" style="width: 400px; height: auto; border: 2px solid #14cde7; background: linear-gradient(135deg, #2a2a72, #009ffd); text-align: center; border-radius: 20px; padding: 30px;">
        <h1 id="register" style="color: white; font-size: 2.5em; margin-bottom: 30px;">Registration</h1>
        <form name="registration" class="form11" action="" method="post" style="background: none;">
            <div class="input-container" style="position: relative; margin-bottom: 20px;">
                <input class="input-field" type="text" id="rname" name="username" placeholder="Username" style="width: 100%; padding: 10px; border: none; border-radius: 25px; outline: none; background: rgba(255, 255, 255, 0.3); color: white; font-size: 1.2em; transition: background-color 0.3s;" required>
            </div>
            <div class="input-container" style="position: relative; margin-bottom: 20px;">
                <input class="input-field" type="email" id="remail" name="email" placeholder="Email" style="width: 100%; padding: 10px; border: none; border-radius: 25px; outline: none; background: rgba(255, 255, 255, 0.3); color: white; font-size: 1.2em; transition: background-color 0.3s;" required>
            </div>
            <div class="input-container" style="position: relative; margin-bottom: 20px;">
                <input class="input-field" type="password" id="rpass" name="password" placeholder="Password" maxlength="8" style="width: 100%; padding: 10px; border: none; border-radius: 25px; outline: none; background: rgba(255, 255, 255, 0.3); color: white; font-size: 1.2em; transition: background-color 0.3s;" required>
            </div>
            <div style="margin-bottom: 30px;">
                <button class="sub1" type="submit" name="submit" style="height: 50px; width: 100%; background-color: #14cde7; color: white; border: none; border-radius: 25px; cursor: pointer; outline: none; transition: background-color 0.3s;">Register</button>
            </div>
        </form>
    </fieldset>
</div>



</div>
<?php } ?>
</body>
</html>
