<?php 
//database connection
$conn=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql1="SELECT * FROM users";
$records= mysqli_query($conn,$sql1) or die (mysqli_error($conn));
?>

<!--

-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center">Add User Form<hr/> </h2>
  <br/>
  <form class="form-horizontal" action="process.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text", class="form-control", id="name", name="fullname", placeholder="Full Name" required><br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="email", class="form-control" , name="email", placeholder="Email" required><br/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password", class="form-control" , name="password", placeholder="Password" required><br/>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="" name="" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 align="center"> All Users <hr/></h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		while ($users=mysqli_fetch_assoc($records)) {
		  ?>

		    <td><?php echo $users['Id'] ?></td>
			<td><?php echo $users['Name']?></td>
			<td><?php echo $users['Email']?></td>
			<td><?php echo $users['Password']?> </td>
			
		
		<td> <a href="edit_record.php?edit_id=<?php echo $users['Id']; ?>" alt="edit" onClick="update()">Edit</a> </td>
		<td> <a href="delete2.php?delete_id=<?php echo $users['Id']; ?>" alt="delete" onClick="delete()">Delete</a> </td>
	</tr>
<?php } ?>
</tbody>
  </table>
</div>

</body>
</html>
