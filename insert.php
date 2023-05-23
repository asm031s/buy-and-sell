<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "buy_and_sell";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM billing";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['name1']));
    
    if($name=='')
    $sql = "SELECT * FROM billing";
    else
    $sql = "SELECT * FROM billing WHERE name1 ='$name'";
}


$result = $con->query($sql);
?>

<html>
	<title>Buy & Sell</title>
	<tr><td>
<style>
body
{ margin:0;}


 </style>
<link rel="stylesheet" type="text/css" href="styling.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<body>
<table border=0 width=1533 height=500 cellspacing=0>

<tr height=120 bgcolor="343232" border=0>
<td colspan=6  >


<img src="logo4.png" width="80" height="80" style="margin-left: 742px; padding-top:20px; padding-bottom:20px;"> 

 </td>
 
 </tr>
 <tr height=10 ><td bgcolor="white"></td></tr>


<tr height=45 bgcolor="343232" border=0>
<td colspan=6 >


<ul >
  <li id="para1" style="margin-right:80px;"><a href="dashboard.php"><i>Admin Dashboard </a></li></i>
  <li id="para1" style="margin-right:80px;"><a href="contact.html"><i>Contact Us </a></li></i>
   <li id="para1" style="margin-right:80px;"><a href="design.html"><i>Design</a></li></i>
    <li id="para1" style="margin-right:80px;"><a href="vehical.html"><i>Vehicle</a></li></i>
  <li id="para1" style="margin-right:80px;"><a href= "home.html" ><i>Home</a></li></i>
 
 

 
</ul>

</td>
</tr>





<tr style=" background: linear-gradient(to bottom left, #9999ff 0%, #ffffff 100%);"><td>
<form action="" method="GET">
<input type="text" placeholder="Search by Name" name="name1">&nbsp;
<!-- <button name="search">search</button> -->
<input type="submit"  value="Search" name="search">
</form>
<br><br>

<table>
	<thead>
	

		<tr>
			
			
			<th >Name</th>
<th style="padding-left:40px;">Gender</th>
<th style="padding-left:20px;">Email</th>
<th style="padding-left:170px;">Mobile</th>
<th style="padding-left:60px;">Address</th>
<th style="padding-left:20px;">City</th>
<th style="padding-left:60px;">State</th>
<th style="padding-left:20px;">Zip</th>
<th style="padding-left:30px;">Card Number</th>
<th style="padding-left:30px;">month/year</th>
<th style="padding-left:30px;">Card Holder Name</th>
<th colspan="10" style="padding-left:30px;">Action</th>
		</tr>
	</thead>
	
	<?php while($row = $result->fetch_assoc()) { ?>
	<table border=0 >
	<tr>
			<td><?php echo $row['name1']; ?></td>
			<td style="padding-left:50px;"><?php echo $row['gender']; ?></td>
						<td style="padding-left:30px;"><?php echo $row['email']; ?></td>

			<td style="padding-left:20px;"><?php echo $row['mobile']; ?></td>
			<td style="padding-left:30px;"><?php echo $row['address']; ?></td>
			<td style="padding-left:30px;"><?php echo $row['city']; ?></td>
			<td style="padding-left:20px;"><?php echo $row['state']; ?></td>
			<td style="padding-left:20px;"><?php echo $row['zip']; ?></td>
			<td style="padding-left:40px;"><?php echo $row['cnumber']; ?></td>
			<td style="padding-left: 80px;"><?php echo $row['monthyear']; ?></td>
			<td style="padding-left:70px;"><?php echo $row['cardholdername']; ?></td>
			
					<td style="padding-left:50px;"><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a></td>

			
			<td style="padding-left:10px;">
				<a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn">| Delete</a>
			</td>
		</tr>		</table>
		
	<?php } ?>
</table>

</td></tr>
<tr><td >
<a href="adminInsert.php">Insert Data</a>
</td></tr>

</table>
</body>
</html>