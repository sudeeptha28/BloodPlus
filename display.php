<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <title>display</title>
    </head>
    <body style="margin:50px;">
    <h1>Request donor list </h1>
    <br>       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact number</th>
      <th scope="col">Adress</th>
      <th scope="col">Location</th>
      <th scope="col">Pincode</th>
      <th scope="col">Blood group</th>

    </tr>
  </thead>
  <tbody>

   <?php
  $blood = $_POST['blood'];
  $location = $_POST['location'];


   $connection=new mysqli('localhost', 'root', '', 'project_db');



   if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="Select name,email,mobno,address,location,pincode,bloodgroup from register where bloodgroup='$blood' AND location='$location' ";
$result=$connection->query($sql);
if(mysqli_num_rows($result) == 0){
  echo '<script> window.location.href="homepage1.php";
  alert("No Records found!!!");
  </script>';
}
while($row=$result->fetch_assoc()){
echo"<tr>
<td>" . $row["name"] . "</td>
<td>" . $row["email"] . "</td>
<td>" . $row["mobno"] . "</td>
<td>" . $row["address"] . "</td>
<td>" . $row["location"] . "</td>
<td>" . $row["pincode"] . "</td>
<td>" . $row["bloodgroup"] . "</td>
</tr>";

}
  
 ?>        
  </tbody>
</table>
</body>
</html>
