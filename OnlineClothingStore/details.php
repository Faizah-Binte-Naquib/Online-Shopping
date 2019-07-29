<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
	  <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/details.css" />


	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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
    interval:3
  })
});
</script>

<script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/home.css" />
    <title>HOME</title>
	<header>
	</header>
</head>
<body background="images/back.jpg">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
      <a class="navbar-brand" href="http://localhost/OnlineClothingStore/home.php"  id="title">MyAnimeCompanion</a>
    </div>
    <h6 style="font-size:40px">  <a href="http://localhost/OnlineClothingStore/ProfileorLogin.php" id="upper_right">PROFILE</a></h6>
  </div>
</nav>

<?php
	session_start();
   include('config.php');
   $item=$_SESSION['name'];
	$query="SELECT * from anime where name='".$item."'";
	$result = mysqli_query($db,$query);
?>
<?php
while($row = mysqli_fetch_array($result)){ ?>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
       <div class="hovereffect">
    <img src="images/<?php echo $row['images'] ?>"class="img-fluid" alt="">
     <div class="overlay">
       <p style="color:white">Dive into the world of Anime!</p>
       </div>
     </div>
    </div>
    <div class="col-sm-4">
      <?php $animeid=$row['animeid'] ?>
    <h4 style="color: white; font-size:30px; background-color:rgba(255,255,255,.7);"><?php echo $row['name'] ?></h4>
    <h5 style="color:#D3D3D3;  background-color:rgba(255,255,255,.5)">Genre: <?php echo $row['genre'] ?></h5>
    <h5 style="color:#D3D3D3; background-color:rgba(255,255,255,.3)">Episodes: <?php echo $row['episodes'] ?></h5>
    <h5 style="color:#D3D3D3; background-color:rgba(255,255,255,.1)">Airing Year: <?php echo $row['year'] ?></h5>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <form method="post"><input type="submit" name="details" class="btn btn-primary" value="Add to Watch List"/></form>
    <?php
     if(isset($_POST['details']))
     {
       if(@$_SESSION['cid']==''){
         ?>
         <div class="alert alert-info" role="alert">
           To use this feature you must be logged in
         </div>
         <?php
       }
       else{
       @$id = $_SESSION['cid'];
       @$query1="INSERT INTO animemanagement (userid,animeid) VALUES (".$id.",".$animeid.")";
       @mysqli_query($db,$query1);
     }
     }
     ?>
    </div>
<?php }     ?>
<div class="col-sm-4">
<h4 style="color:#D3D3D3; background-color:rgba(255,255,255,.1)">Average Rating</h4>
<h5 style="color:#D3D3D3; background-color:rgba(255,255,255,.3)"><?php
$query1="SELECT AVG(rating) as average from animemanagement where animeid=".$animeid."";
$result=mysqli_query($db,$query1);
while($row = mysqli_fetch_array($result)){
  echo $row['average'];
}
  ?>	&#11088;</h5>
  <h5 style="color:#D3D3D3;  background-color:rgba(255,255,255,.5)">Add your own rating</h5>
<h5 style="color: white; font-size:20px; background-color:rgba(255,255,255,.7);"><form method="POST">
<label class="radio-inline"><input type="radio" name="MyRadio" value="1" checked>1&#11088;<br></label> <!--This one is automatically checked when the user opens the page -->
<input type="radio" name="MyRadio" value="2">2&#11088;
<input type="radio" name="MyRadio" value="3">3&#11088;
<input type="radio" name="MyRadio" value="4">4&#11088;
<input type="radio" name="MyRadio" value="5">5&#11088;
<br/></h5>
<input type="submit" value="Result" name="Result" class="btn btn-primary" >
</form>
<?php
if(isset($_POST['Result'])){
     $rating=$_POST["MyRadio"];
     $id=$_SESSION['cid'];
     $query1="UPDATE animemanagement set rating=".$rating." where userid=".$id." AND animeid=".$animeid."";
     mysqli_query($db,$query1);
   }
?>
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
