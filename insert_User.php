
<?php
//declare message
$message="";

if(isset($_POST['Submit_data'])){
	
	//db connection
	include "db_connection.php";
	
	//get data from method post
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];

   //query for insert_User	
   $query="INSERT INTO users(name,age,email) VALUES('$name','$age','$email')";
   
   //Execute query with if else statement
if( $db->exec($query) ){
		$message = "Data inserted successfully.";
	}else{
		$message = "Sorry, Data is not inserted.";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
		Insert User Data
		</title>
	</head>
	
	<body>
	
	
	<form action="insert_User.php" method="post" >
	<div style="width:500px; margin:20px auto;">
	<br>
	<h2>REGISTRATION</h2>
	<br>
	<div><?php echo $message; ?></div>
	<p><b>Add New User</b></p>
	<hr></hr>
	<br>
<table>
	<tr>
		<td>Name</td><td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Age</td><td><input type="text" name="age"></td>
	</tr>
	<tr>
		<td>Email</td><td><input type="text" name="email"></td>
	</tr>
</table>

	
	<br>
	<input type="submit" name="Submit_data" value="Submit">&nbsp;
	<a href="display_User.php? id=<?php echo $row['rowid'];?>"><input type="button" value="Display All"></a><br>
	<br>
	<hr></hr>

	
	</div>
	</form>
	</body>
</html>

