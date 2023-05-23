<?php
//session_start();

// initializing variables
$username = "";
$email    = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'buy_and_sell');


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  	$query = "SELECT * FROM users WHERE userName='$username' AND userPass='$password'";


  $auth_user = mysqli_query($db,$query);
    $row= mysqli_fetch_array($auth_user);
    $count = mysqli_num_rows($auth_user); 

     if ($count > 0)
    {
    
    switch ($row["userType"]){
        case "user": 
		    echo "user";
		    header('Location:home.html');

           // echo "Logged in as user";
            break;
        case "admin":
            header('Location:dashboard.php');
            //echo "Logged in as admin";
            break;

        default: echo "Invalid login";

    }
}
}
?>