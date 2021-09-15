<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$name = \mysqli_real_escape_string($con , $_POST['name']);
$email = \mysqli_real_escape_string($con , $_POST['email']);
$password = \mysqli_real_escape_string($con , $_POST['password']);
$password = md5($password);
$contact = \mysqli_real_escape_string($con  ,  $_POST['contact']);
$city = \mysqli_real_escape_string($con  ,  $_POST['city']);
$address = \mysqli_real_escape_string($con  ,  $_POST['address']);
$user_registration_query = "insert into users(name, email, password, contact,city ,address) values ('$name', '$email', '$password', '$contact' , '$city' ,'$address')";


$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

echo "User successfully inserted" ;
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>
