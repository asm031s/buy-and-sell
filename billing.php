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

// sql to create table
$sql = "CREATE TABLE billing (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name1 VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,

email VARCHAR(50),
mobile INT(11) NOT NULL,
address VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
zip INT(5) NOT NULL,
cnumber INT(5) NOT NULL,
monthyear VARCHAR(30) NOT NULL,
cardholdername VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table billing_form created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>