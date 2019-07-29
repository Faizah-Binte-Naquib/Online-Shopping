<?php
include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
session_start();


 if($_SERVER["REQUEST_METHOD"] == "POST"){

$username = stripcslashes($username);
$password = stripcslashes($password);


$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);



$sql ="SELECT userid from user where username='$username' and password='$password'";


 $result = mysqli_query($db,$sql);

while($row=mysqli_fetch_array($result))
{

 $_SESSION["cid"]=$row["userid"];
}
  echo $_SESSION["cid"];
 $count = mysqli_num_rows($result);


      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
		     $_COOKIE['user']=$username;
         $_SESSION['login_user'] =$username;
		 include('profile.php');

      }else {
         echo "Your Login Name or Password is invalid";
      }
 }

?>
