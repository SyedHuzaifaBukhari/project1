<?php 
//database connection
$conn=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name=isset($_POST['fullname']) ? $_POST['fullname'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';

//to prevent sql injection
$name=stripcslashes($name);
$email=stripcslashes($email);
$password=stripcslashes($password);

$name=mysqli_real_escape_string($conn,$name);
$email=mysqli_real_escape_string($conn,$email);
$password=mysqli_real_escape_string($conn,$password);


$sql="INSERT INTO users (Name,Email,Password) VALUES ('$name','$email','$password')";
//$sql="INSERT INTO users (Name,Email,Password) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[password]')";
$sql_result=mysqli_query($conn,$sql) or die (mysqli_error($conn));
/*if (!mysqli_query($conn,$sql))

  {

  die('Error: ' . mysqli_error($conn));

  }*/
 if($sql_result==true)
 {
 	echo "1 record added";
 header("location: index.php");
 }
 else
 {
 	echo "Failed";
 }
mysqli_close($conn); 
?>