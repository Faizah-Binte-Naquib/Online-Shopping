<?php
include('login.php');
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
include('config.php');


$name = mysqli_real_escape_string($db, $_POST['name']);
$username= mysqli_real_escape_string($db, $_POST['username']);
$password= mysqli_real_escape_string($db, $_POST['password']);
$email= mysqli_real_escape_string($db, $_POST['email']);


$sql ="INSERT INTO user (username,password,name,email) VALUES ('".$username."', '".$password."', '".$name."','".$email."')";


$result = mysqli_query($db,$sql);
mysqli_close($db);

?>
