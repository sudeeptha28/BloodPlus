<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Saving Lives</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'  rel='stylesheet'>
</head>
<body>
    
<div class="wrapper">
    <form method="post" action="login.php">
                <h2>LOGIN</h2>
        <div class="input-box">
            <input type="text" placeholder="Username" name="username" required>
            <i class='bx bxs-user'></i>
        </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password3" required>
                <i class='bx bxs-lock-alt'></i>
        </div>
        <?php include('errors.php'); ?>
        <button type="submit" class="btn"name="login_user">login</button>
        <div class="sign">
           <p>not yet a member?</p> <a href="signup.php"> Signup</a>
        </div>
        </form>
        </div>
</body>
</html>



