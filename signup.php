  <?php include ('server.php') ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Saving Lives</title>
    <link rel="stylesheet" href="signup.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'  rel='stylesheet'>
</head>
<body>
    
<div class="wrapper">
    <form method="post" action="signup.php">
        
        <h2>Signup</h2>
        <div class="input-box">
            <input type="text" placeholder="Username"name="username" value="<?php echo $username; ?>" required>
            <i class='bx bxs-user'></i>
        </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password1" required>
                <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="password2" required>
                <i class='bx bxs-lock-alt'></i>
        </div>
        <?php include('errors.php'); ?>
        <button type="submit" class="btn" name="reg_user">Signup</button>
        <div class="sign">
            <p>already a member?</p><a href="login.php">Login</a>
        </div>
        </form>
        </div>
</body>
</html>



