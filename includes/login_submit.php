<?php echo "<h1>Hello Jarvis</h1>"?>

<?php
require 'common.php';
?>
<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "SELECT user 
        FROM users 
        WHERE email = '$email' 
        AND password = '$password'";

$result = mysqli_query($con, $sql);



if (mysqli_num_rows($result,$sql) >= 1 ) 
{
        echo "You're Logged In!";
        } else {
        echo "Incorrect password or username!";
} 






$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
mysqli_close($con);
?>