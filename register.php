<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>
<?php
require('dbconnect.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (userName,userEmail,userPass)
VALUES ('$username','$email','".$password."')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.html'>Login</a></div>";
        }
    }else{
?>
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
  <li id="para1" style="margin-right:80px;"><a href=""><i> </a></li></i>

  <li id="para1" style="margin-right:80px;"><a href="login.html"><i>Login</a></li></i>

  <li id="para1" style="margin-right:80px;"><a href="contact.html"><i>Contact Us </a></li></i>
   <li id="para1" style="margin-right:80px;"><a href="design.html"><i>Design</a></li></i>
    <li id="para1" style="margin-right:80px;"><a href="vehical.html"><i>Vehicle</a></li></i>
  <li id="para1" style="margin-right:80px;"><a href= "home.html" ><i>Home</a></li></i>
 
 

 
</ul>

</td>
</tr><tr><td><br><br>
<center>
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="email" name="email" placeholder="Email" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input type="submit" name="submit" value="Register" />
</form>
</center>
<br>

</td></tr>

</table>
<?php } ?>
</body>
</html>
