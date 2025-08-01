<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$occupation = $_POST["occupation"];
$address = $_POST['address'];
$location = $_POST['location'];
$pin = $_POST['pin'];
$blood = $_POST['blood'];
$yesno = $_POST['yesno'];
$LDdate = $_POST['LDdate'];

$conn = new mysqli('localhost', 'root', '', 'project_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $user_check_query = "SELECT * FROM register WHERE name='$name' AND mobno='$number' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['name'] === $name && $user['mobno'] === $number) {
            echo '<script> window.location.href="homepage1.php";
            alert("You have already Registered!!!");
            </script>';
        }
    }


if($yesno=="yes"){
    echo  '<script> window.location.href="registrationform1.php";  
    alert("Cannot Register because of your health status!!!");
    </script>';
    }

    
elseif($dob<"18"){
    echo  '<script> window.location.href="registrationform1.php";
    alert("Cannot Register for below 18!!!");
    </script>';

}


else {
    $smt= $conn ->prepare("insert into register(name,dob,email,mobno,gender,occupation,address,location,pincode,bloodgroup,hiv,Iddate)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");	
    $smt ->bind_param("sisissssisss",$name,$dob,$mail,$number,$gender,$occupation,$address,$location,$pin,$blood,$yesno,$LDdate);
    $smt ->execute();
    echo  '<script> window.location.href="homepage1.php";
    confirm("Registration successful Your information will be stored and dispalyed to the Requestor");
    </script>';
    
    $smt ->close();
    $conn->close();
    }
    ?>


