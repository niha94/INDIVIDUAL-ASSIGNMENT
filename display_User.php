<?php 
//db connection
include "db_connection.php";

//query
$query =  "SELECT rowid, * FROM users";

$result = $db->query($query);
?>

<!DOCTYPE html>
<html>
	<head>
	<title>
	View User Data
	</title>
	</head>
	
	<body>
	<br>
	<div style="width:500px; margin:20px auto;">
	<br>
	<h2>REGISTRATION</h2>
	<br>

	<p><b>List of User</b></p>
	<hr></hr>

	<table width="100%" cellpadding="5" cellspacing="1">
	<br>
	<tr>
		<td><b>Name</b></td>
		<td><b>Age</b></td>
		<td><b>Email</b></td>
		<td><b>Action</b></td>
	</tr>

	<?php while($row =$result->fetchArray()){?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['age'];?></td>
			<td><?php echo $row['email'];?></td>
			<td>
				<a href="update_User.php? id=<?php echo $row['rowid'];?>"><input type="button" value="Update"></a>&nbsp;
				<a href="delete_User.php?id=<?php echo $row['rowid'];?>"><input type="button" value="Delete"></a>
			</td>
		</tr>
	<?php }?>
	<table>
	<br>
	
	
	<hr></hr>

	<br>
	
	
	
		<a href="insert_User.php";?><input type="button" value="Back"></a>
	</body>
	</html>