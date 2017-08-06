<?php 
//declaration
$message="";

//include db connection
include "db_connection.php";

if(isset($_POST['Submit_data'])){
	
	//get data from method POST
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];


//query
$query = "UPDATE users set name='$name', age='$age', email='$email' WHERE rowid = $id";

//execute
if($db->exec($query)){
	$message = "Data is successfully updated";
}else{
	$message = "Data is not updated. Try again";
}
}

$id = $_GET['id'];

$query = "SELECT rowid, * FROM users WHERE rowid = $id";
$result = $db->query($query);
//set new data
$data = $result->fetchArray();

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Update User</title>
	</head>
	
	<body>

	<br>
	<div style="width:500px; margin:20px auto;">
	<br>
	<h2>REGISTRATION</h2>
	<br>
	<div><?php echo $message; ?></div>

	<p><b>Update User</b></p>
	<hr></hr>
<form action="" method="post">
	<table width="100%" cellpadding="5" cellspacing="1">
	
	<br>
	<tr>
	    <td></td>
		<td><b>Name</b></td>
		<td><b>Age</b></td>
		<td><b>Email</b></td>

	</tr>

	
	<tr>
		
		<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
		<td><input type="text" name="name" value="<?php echo $data['name'];?>"></td>
		<td><input type="text" name="age" value="<?php echo $data['age'];?>"></td>
		<td><input type="text" name="email" value="<?php echo $data['email'];?>"></td>
	</tr>

		
	<table>
	<br>
	
	
	<hr></hr>

	<br>
	
	
	
		<a href="display_User.php";?><input type="button" value="Back"></a>&nbsp;
</form>
		<input type="submit" name="Submit_data" value="Update Data">
	
	</body>
	</html>