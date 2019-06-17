<?php 
//database connection
$conn=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_GET['delete_id'])){
 $sql = "SELECT * FROM users WHERE Id =" .$_GET['delete_id'];
 $result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
 $row = mysqli_fetch_array($result);
}


 
 $delete = "DELETE FROM users WHERE Id=". $_GET['delete_id'];
 $up = mysqli_query($conn, $delete);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: index.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete User Record</title>
</head>
<body>

</body>
</html>