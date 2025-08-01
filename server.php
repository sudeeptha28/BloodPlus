
<?php
session_start();


$username = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'project_db');




if (isset($_POST['reg_user'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  
  if (empty($username) OR empty($password1 )){
    array_push($errors,"all Fields are required");
  }
  
  if(strlen($password1)<8){
    array_push($errors,"Password must be atleast 8 characters long");
  }

  if($password1!==$password2){
    array_push($errors,"Password does not match");  
  }

  
  $user_check_query = "SELECT * FROM login WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    
  }

  
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO login (username, password) 
  			  VALUES('$username', '$password1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homepage1.php');
  }
}

// LOGIN page
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password3']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username1'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage1.php');
    
  	 } 
     if (mysqli_num_rows($results) == 0){
       array_push($errors, "user not available");
  	 }
    
    
   
    
  } 
  
  
}

?>