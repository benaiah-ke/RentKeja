<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Material Symbols and icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="login-assets/style.css">

    <title>RentKeja - Login/Sign-Up</title>
</head>
<body>
    <div id="main">
        <div class="top-area">
            <div class="logo">
               <h1>RentKeja</h1>
            </div>
            <div class="welcome">
               <h2>Welcome Back!</h2>
               <p>Enter your email address and password to sign in</p>
            </div>
        </div>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['login-email']); 
        $email = mysqli_real_escape_string($con, $email);
        $pwd = stripslashes($_REQUEST['login-pwd']);
        $pwd = mysqli_real_escape_string($con, $pwd);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: dash.php");
        } else {
            echo "<div id='login-form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<form class="login-form" id="login-form" method="post">
    <div class="login-item">
        <label for="login-name">Email or Username</label>
        <input type="text" placeholder="enter email or username" id="login-name" name="login-name">
    </div>
    <div class="login-item">
        <label>Password</label>
        <input type="password" placeholder="enter password" id="login-pwd" name="login-pwd">
    </div>
    <div class="forgot-pwd">
        <p><a href="#">Forgot Password</a></p>
    </div>
    <div class="login-item" id="login-item-btn">
        <input type="submit" id="login-btn">
    </div>
</form>
<?php
    }
?>
        <div class="bottom-area">
            <p>Not a RentKeja user? Sign up <a href="signup.php">HERE</a></p>
        </div>
    </div>
    
</body>
</html>