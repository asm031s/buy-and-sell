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
    <body>
 <form action="" method="post">
 
<p>
<label>Full name</label>
<input type="text" name="name1" size="30" value ="<?php echo $row['name1']; ?>">
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
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="submit" name="submit" value="Update Book Details">
</p>
</form>
<a href="insert.php">Buyer Information</a> <br>

</body>
</html>
<?php
if(isset($_POST['submit'])){
    //addslashes() is a PHP built-in function. It will make sure that quote in O’Reilly doesn’t break the code.
    $id = addslashes($_POST['id']);
    $name1 = addslashes($_POST['name1']);
    $email = addslashes($_POST['email']);
    $mobile = addslashes($_POST['mobile']);
    $query = "update billing set  name1 ='$name1', email = '$email' , mobile='$mobile' where id ='$id'";
    $result = mysqli_query($conn, $query);
    if($result){
   echo "update success!!";
    } 
}
}
}
?>