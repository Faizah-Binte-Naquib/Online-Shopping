<?php

session_start();


	//if the values passed is empty -

	if(!isset($_SESSION['login_user']))
{
	header("location:login.php");
}
	//redirect to login page after 5 seconds


	else

	{

		header("location:profile.php");
}

?>
