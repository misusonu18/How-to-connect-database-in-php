<?php
session_start();
include("DB_config.php");

$username = $_POST['user'];
$password = $_POST['pass'];
$_SESSION["user"] = $username;
$_SESSION['pass'] = $password;
$_SESSION['last_time'] = time();

$check = "SELECT * FROM login WHERE Email='$username' AND Password='$password'";

$result = mysqli_query($con, $check);

$found = mysqli_num_rows($result);

if ($found != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user = $row['Email'];
        $pas2 = $row['Password'];
    }
    if ($username == $user && $password == $pas2) {
        header('location:welcome.php');
    } 
    else {
        echo "Invalid Username OR Password";
    }
} else {
    echo "Required All Fields";
}
?>
