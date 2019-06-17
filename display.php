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

<!DOCTYPE html>
<html>
<head>
	<title>Users Data</title>
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
	<script type="text/javascript">
function delete(){
 var x;
 if(confirm("Data Deleted Sucessfully") == true){
 x= "update";
 }
 function update(){
 var x;
 if(confirm("Data Updated Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>