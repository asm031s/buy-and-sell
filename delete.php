<?php 
	$db = mysqli_connect('localhost', 'root', '', 'buy_and_sell');
	
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM billing WHERE id=$id");
	$_SESSION['message'] = " deleted!"; 
	header('location: insert.php');
}
?>