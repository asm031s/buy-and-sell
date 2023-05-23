<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buy_and_sell";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
	//$name1=$_POST[name1];
$sql = "INSERT INTO `BILLING` (`name1`,`gender`,`email`,`mobile`,`address`,`city`,`state`,`zip`,`cnumber`,`monthyear`,`cardholdername`)
VALUES ('$_POST[name1]','$_POST[gender]','$_POST[email]','$_POST[mobile]','$_POST[address]','$_POST[city]', 
'$_POST[state]','$_POST[zip]','$_POST[cnumber]','$_POST[monthyear]','$_POST[cardholdername]')";

if (mysqli_query($conn,$sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);

?>
