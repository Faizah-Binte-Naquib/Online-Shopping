<?php
@session_start();
include_once('config.php');
$username="";
if(!isset($_SESSION['login_user'])){
$username = $_COOKIE['user'];

}
else{
	$username = $_SESSION['login_user'];

}

$array = Array();
$username = $_SESSION['login_user'];
if (!$db)
    {
        die("Connection to database failed with error#: " . mysqli_connect_error());
    }

    $sql = "SELECT name,email,username FROM user WHERE username='$username';";

    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_assoc($result))
	{
		$array[] = $row['name'];
		$array[]=$row['email'];
		$array[]=$row['username'];
	}



	     $result2 = mysqli_query($db,$sql);
         $row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);


         $count = mysqli_num_rows($result2);
         if($count == 1) {

         $_SESSION['login_user'] = $username;

      }else {
         echo "Your Login Name or Password is invalid";
      }



?>




<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />

<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery-3.1.1.js">    </script>
<script type="text/javascript" src="/js/menu.js"></script>
<link rel="stylesheet" type="text/css" href="css/index2.css">


<!-- Carousel -->
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
$('.carousel').carousel({
  interval: 3000
})
});
</script>
<script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/home.css" />
<title>PROFILE</title>
</head>
<body background="images/601988.png">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
      <a class="navbar-brand" href="http://localhost/OnlineClothingStore/home.php"  id="title">MyAnimeCompanion</a>
    </div>
    <h6>  <a href="http://localhost/OnlineClothingStore/logout.php"   id="upper_right">LOG OUT</a></h6>
    <h6>  <a href="#" id="upper_right">EDIT</a></h6>
  </div>
</nav>






  <div class="container">
    <div class="row">
      <div class="col-md" style="background:rgb(172,44,38,0.3);
     height:100%;
     border-radius: 25px;
     padding: 20px;
     width: 200px;
     height: 150px;
    margin-bottom:100px;
    -webkit-box-shadow: 10px 35px 35px -4px rgba(250,240,255,0.75);
    -moz-box-shadow: 10px 35px 35px -4px rgba(0,0,0,0.75);
    box-shadow: 10px 35px 35px -4px rgba(0,0,0,0.75);">
        <h6 style="color:white">Name:   <?php if (array_key_exists(0,$array)) {
        echo $array[0];}?>
      <br/><br/>Email:  <?php if (array_key_exists(1,$array)) {
        echo $array[1];}?>
      <br/><br/>User Name:  <?php if (array_key_exists(2,$array)) {
        echo $array[2];}?>
    </div></h6>

    </div>
  </div>

	<div class="container">
    <div class="row">
       <div class="col-md"
	      style="margin-bottom:100px;">
  <table class="table table-hover table-dark" style="opacity:0.7;padding:50%; height:100px; background:black ;  border-radius: 25px;">
    <thead>
      <tr>
        <th scope="col" >Anime Name</th>
        <th scope="col" >Genre</th>
        <th scope="col" >Rating</th>
      </tr>
    </thead>
    <tbody>
			<?php
		  include_once('config.php');
		  if (!$db)
		  {
		 		 die("Connection to database failed with error#: " . mysqli_connect_error());
		  }
		  $id=$_SESSION['cid'];
		  $sql = "SELECT anime.name,anime.genre,animemanagement.rating from animemanagement inner join anime ON animemanagement.animeid = anime.animeid where animemanagement.userid=".$id.";";

		  $result = mysqli_query($db, $sql);
		 if($result->num_rows>0)
		 {
		  while($row=$result-> fetch_assoc())
		  {
		 	 echo "<tr><td>".$row["name"]."</td><td>".$row["genre"]."</td><td>".$row["rating"]."</td></tr>";
		  }
		  echo "</table>";

		  $db->close();

		 }
		  ?>
    </tbody>
  </table>
</div>
</div>
</div>





  <footer class="text-center" id="footer">
  <p> <h2 color="white">&copy;MyAnimeCompanion</h2></p>
  <h6 color="white">Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.</h6>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>



  <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.js">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">
</body>
</html>
