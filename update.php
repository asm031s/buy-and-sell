<?php
 
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","buy_and_sell");
if(!$conn){
echo "Error: Unable to connect to MySql";
die();
}


$query ="select * from billing where id =".$id;
 
$result = mysqli_query($conn, $query);
if($result){
$num_rows = mysqli_num_rows($result);
if($num_rows==1){
$row = mysqli_fetch_array($result);
 
 
?>
<html>
    <head></head>
	<link rel="stylesheet" type="text/css" href="styling.css">

	  <link rel="stylesheet" type="text/css" href="style.css">

    <body style="    background: linear-gradient(to top left, #666699 0%, #ffffff 100%);
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
 <form action="" method="post">
 
<p>
<label>Full name</label>
<input type="text" name="name1" size="30" value ="<?php echo $row['name1']; ?>">
</p>
<p>
<label>Gender</label>
<input type="text" name="gender" size="30" value="<?php echo $row['gender'];?>"><br>
<input  type="radio" name="gender" value="male"><label   style=" margin-left:12px;"><b>Male</b></label><br>

<input type="radio" name="gender" value="female"> <label  style=" margin-left:9px;"><b>Female </b></label><br>

<input   type="radio" name="gender" value="others"><label style=" margin-left:13px;"><b>Other </b></label> <br> 



</p>
<p>
<label>Email</label>
<input type="text" name="email" size="30" value="<?php echo $row['email'];?>">
</p>
<p>
<label>mobile number</label>
<input type="text" name="mobile" size="30" value="<?php echo $row['mobile'];?>">
</p>
<p>
<label>Address</label>
<input type="text" name="address" size="30" value="<?php echo $row['address'];?>">
</p>
<p>
<label>City</label>
<select  id="option" name="city"  size=1  style="width:250;" >

<option value=""></option>
<option <?php if($row['city']=="dhaka"){echo "selected";}  ?> value="dhaka">Dhaka
<option <?php if($row['city']=="Chittagong"){echo "selected";}  ?>  value="Chittagong">Chittagong
<option <?php if($row['city']=="Sylhet"){echo "selected";}  ?>  value="Sylhet">Sylhet
</select>
</p>
<p>
<label>State</label>
<input type="text" name="state" size="30" value="<?php echo $row['state'];?>">
</p>
<p>
<label>Zip</label>
<input type="text" name="zip" size="30" value="<?php echo $row['zip'];?>">
</p>
<p>
<label>Card Number</label>
<input type="text" name="cnumber" size="30" value="<?php echo $row['cnumber'];?>">
</p>
<p>
<label>Month/Year</label>
<input type="text" name="monthyear" size="30" value="<?php echo $row['monthyear'];?>">
</p>
<p>
<label>Card Holder Name</label>
<input type="text" name="cardholdername" size="30" value="<?php echo $row['cardholdername'];?>">
</p>
<p>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="submit" name="submit" value="Update">
</p>


</form></center>

</td></tr>

</table>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $id = addslashes($_POST['id']);
    $name1 = addslashes($_POST['name1']);
		 $gender = addslashes($_POST['gender']);
    $email = addslashes($_POST['email']);
    $mobile = addslashes($_POST['mobile']);
	    $address = addslashes($_POST['address']);
    $city = addslashes($_POST['city']);
	$state = addslashes($_POST['state']);
    $zip = addslashes($_POST['zip']);
	    $cnumber = addslashes($_POST['cnumber']);
    $monthyear = addslashes($_POST['monthyear']);
	    $cardholdername = addslashes($_POST['cardholdername']);

 
    $query = "update billing set  name1 ='$name1', gender = '$gender', email = '$email' , mobile='$mobile', address='$address', city='$city', state='$state', zip='$zip', cnumber='$cnumber', monthyear='$monthyear', cardholdername='$cardholdername' where id ='$id'";
    $result = mysqli_query($conn, $query);
    if($result){
   echo "update success!!";
    } 
}
}
}
?>