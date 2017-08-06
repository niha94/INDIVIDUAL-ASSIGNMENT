<?php 
//include db_connection
include "db_connection.php";



//get by id
$id = $_GET['id'];
//query
$query = "DELETE FROM users WHERE rowid=$id";

// Run the query to delete record
if( $db->query($query) ){
	$message = "Record is deleted successfully.";
}else {
	$message = "Sorry, Record is not deleted.";
}
//will redirect to display_User page
 echo "<script> location.href='display_User.php'; </script>";

?>
