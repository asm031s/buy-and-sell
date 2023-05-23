<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "buy_and_sell";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}

if(isset($_POST['submit']))
{
   $name =$_POST['name1'];
    $gender = $_POST['gender'];
	$email =$_POST['email'];
    $mobile = $_POST['mobile'];
	$address =$_POST['address'];
    $city = $_POST['city'];
	$state =$_POST['state'];
    $zip = $_POST['zip'];
	$cnumber =$_POST['cnumber'];
    $monthyear = $_POST['monthyear'];
	$cardholdername = $_POST['cardholdername'];

    $sql="insert into billing (name1,gender,email,mobile,address,city,state,zip,cnumber,monthyear,cardholdername) VALUES ('$name','$gender','$email','$mobile','$address','$city','$state','$zip','$cnumber','$monthyear','$cardholdername')";
			 

    $result = $con->query($sql);
    if($result) echo "data added";
    else echo "unsuccessful";

}

?>

<html>
<head></head>
<link rel="stylesheet" type="text/css" href="styling.css">

  <link rel="stylesheet" type="text/css" href="style.css">

<title>Buy & Sell ADMIN INSERTION</title>
<body style="     background: linear-gradient(to top left, #666699 0%, #ffffff 100%);
">

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
  <li id="para1" style="margin-right:80px;"><a href="insert.php"><i>Buyer Information</a></li></i>

  <li id="para1" style="margin-right:80px;"><a href="dashboard.php"><i>Admin Dashboard </a></li></i>
   <li id="para1" style="margin-right:80px;"><a href="design.html"><i>Design</a></li></i>
    <li id="para1" style="margin-right:80px;"><a href="vehical.html"><i>Vehicle</a></li></i>
  <li id="para1" style="margin-right:80px;"><a href= "home.html" ><i>Home</a></li></i>
 
 

 
</ul>

</td>
</tr>
<tr><td><br><br>
<center>
<form action="" method="POST">

<b>Full Name: </b><input type="text" name="name1" id="name1" placeholder="Full Name"  maxlength=25 ><br>
<label style="  font-size:15; color:red;">*Name length must be between 2 and 5*</label><br><br>
<label style="font-size:19;"><b>Gender:</b></label><br><br>
<input  type="radio" name="gender" value="male"><label   style=" margin-left:12px;"><b>Male</b></label><br>

<input type="radio" name="gender" value="female"> <label  style=" margin-left:9px;"><b>Female </b></label><br>

<input   type="radio" name="gender" value="others"><label style=" margin-left:13px;"><b>Other </b></label> <br> 

<b>Email:</b><input type="text" name="email" id="email" placeholder="Email" ><br>

<b>Mobile Number:</b><input type="text" name="mobile" id="num" placeholder="Mobile Number" ><br>
<label style=" font-size:15; color:red; margin-left:130px;">*Mobile Number must be of 11 digits*</label><br><br>
<label style="font-size:19;"><b>Address:</b></label>
<input type="text" name="address" id="address" placeholder="Address" ><br>


<select  id="option" name="city"  size=1  style="width:250;">
<option value="">Choose a city</option>
<option value="dhaka">Dhaka
<option value="Chittagong">Chittagong
<option value="Sylhet">Sylhet
</select><br>

<input type="text" name="state" id="state" placeholder="State" style="width:150;"> 
<input type="text" name="zip" id="zip" placeholder="Zip" style="width:100; margin-left:0;"><br>
<label style="  font-size:15; color:red;margin-left:150px;">*Zip must be of 5 digits*</label><br>
<br><br><br>

<font style=" margin-left:30px; font-size:30;" color=black><b>Payment:</b></font><br>

<br>
<b>Card Number:</b><input type="text" name="cnumber" id="Cnumber"placeholder="Enter Card Number"><br>
<label style="  font-size:15; color:red;margin-left:130px;">*Card number must be of 5 digits*</label><br>


<input type="text" name="monthyear" id="monthyear" placeholder="MM/YEAR" style="width:150; margin-left:150px;"><br>
<b>Card holder name:</b><input type="text" name="cardholdername"  id="cardholdername" placeholder="Card Holder Name" ><br><br>

<input type="submit" value="submit" name="submit">
</form>
</center>
<br>

</td></tr>

</table>
</body>
</html>