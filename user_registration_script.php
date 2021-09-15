
<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$email = \mysqli_real_escape_string($con , $_POST['email']);
$first_name = \mysqli_real_escape_string($con , $_POST['first_name']);
$last_name = \mysqli_real_escape_string($con , $_POST['last_name']);
$phone = \mysqli_real_escape_string($con  ,  $_POST['phone']);
$user_registration_query = "insert into users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email_id'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>





<?php
require 'common.php';
?>
<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$email = \mysqli_real_escape_string($con , $_POST['email']);
$password = \mysqli_real_escape_string($con , $_POST['password']);
$password = md5($password);


$user_registration_query = "insert into users(email,password) values ('$email', '$password')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>


