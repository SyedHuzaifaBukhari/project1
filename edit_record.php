
<?php 
//database connection
$conn=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = isset($_GET['edit_id']) ? $_GET['edit_id'] : '';


if(isset($_GET['edit_id']) ? $_GET['edit_id'] : ''){
//if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM users WHERE Id='".$id."'";
 $result = mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
 $row = mysqli_fetch_array($result);
 $email = $row['Email'];
 $name =  $row['Name'];
 $PSD =  $row['Password'];
 $id =  $row['Id'];

}

//Update Information
if(isset($_POST['submit_update'])){
	$ID =  $_POST['edit'];


 $name = isset($_POST['fullname_updated']) ? $_POST['fullname_updated'] : '';
 $email = isset($_POST['email_updated']) ? $_POST['email_updated'] : '';
 $password = isset($_POST['password_updated']) ? $_POST['password_updated'] : '';
 
  $update = "UPDATE users SET Name='$name', Email='$email',Password='$password' WHERE Id='".$ID."'";
 //$update = "UPDATE users SET Name='$name', Email='$email',Password='$password' WHERE Id='$id'";
 $sql = mysqli_query($conn,$update);
 if($sql==true)
 {

 header("location: index.php");
 }
 else
 {
 	echo "Failed";
 }
}
mysqli_close($conn); 
?>




<!DOCTYPE html>
<html>
<head>
	<title>Update User Record</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<!--
<table border=1 width="300" cellspacing="1" cellpadding="1" align="center">
<tr> <td><form action="edit_record.php" method="post" target="_blank">
	<input type="text", name="fullname_updated", placeholder="Full Name" value="<?php //echo $name ;?>" required><br/>
	<input type="email", name="email_updated", placeholder="Email" value="<?php //echo $email;?>" required><br/>
	<input type="password", name="password_updated", placeholder="Password" value="<?php //echo $PSD;?>" required><br/>
	</td><td><input type="hidden"  name="edit" value="<?php //echo $id;?>">
		<input type="submit" value="Update" name="submit_update" >
</form></td></tr>
</table>
-->
<div class="container">
  <h2 align="center">Update User Record<hr/> </h2>
  <br/>
  <form class="form-horizontal" action="edit_record.php" method="post", target="_blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text", class="form-control", id="name", name="fullname_updated", placeholder="Full Name" value="<?php echo $name ;?>"required><br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="email", class="form-control" , name="email_updated", placeholder="Email" value="<?php echo $email;?>"
        required><br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password", class="form-control" , name="password_updated", placeholder="Password" value="<?php echo $PSD;?>" required><br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"></label>
      <div class="col-sm-10">          
        <input type="hidden"  name="edit" value="<?php echo $id;?>"><br/>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="" name="submit_update" class="btn btn-default">Update</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>
