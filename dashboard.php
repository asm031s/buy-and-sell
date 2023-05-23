<?php
require('dbconnect.php');
include("auth.php");
?>
<html>
<head>
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" type="text/css" href="styling.css">

<link rel="stylesheet" href="style.css" />
</head>
<style>
body
{ margin:0;} </style>
<body >
<table  border=1 width=1518>
<tr height=120 bgcolor="343232" border=0>
<td colspan=6  >


<img src="logo4.png" width="80" height="80" style="margin-left: 742px; padding-top:20px; padding-bottom:20px;"> 

 </td>
 
 </tr>
 <tr height=10 ><td bgcolor="white" colspan=2></td></tr>


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
<tr style="    background: linear-gradient(to bottom, #000099 0%, #6666ff 100%);
">
<td width=400 height=100>

</td>
<td width=1450 height=100>
<p style="font-size:20; padding-left:50; color:white;"><b>Dashboard</b></p>

<p><a href="logout.php" style="padding-left:1000;color:white; font-size:20;">Logout</a></p>
</td></tr>

<tr >
<td width=400 height=650>
<table border=1 width=400 height=650 style="    background: linear-gradient(to bottom, #000099 0%, #6666ff 100%);
">
<tr><td height=50 width=400>
<p ><a href="insert.php" style="padding-left:120;color:white; font-size:20;"> Buyer Information</a></p></td></tr>
<tr><td height=200>
<p ><a href="insert.php" style="padding-left:120;color:white; font-size:20;"></a></p></td></tr>
</table>
</td>

<td width=1450 height=650 style=" background: linear-gradient(to bottom left, #9999ff 0%, #ffffff 100%);"> 
</td>
</tr>

</table>
</body>
</html>

