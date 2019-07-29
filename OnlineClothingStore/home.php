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
    <title>HOME</title>
	<header>
	</header>
</head>
<body background="images/back.jpg">

<?php
session_start();
include 'php/slider.php'; ?>

<div id="slides" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
     <li data-target="#slides" data-slide-to="0" class="active"></li>
     <li data-target="#slides" data-slide-to="1"></li>
     <li data-target="#slides" data-slide-to="2"></li>
   </ul>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img id="homeImage" src="images/wallpaper1.jpg">
       <div class="carousel-caption">
         <p class="dis"></p>
         <h3 class="display-3"></h1>
       </div>
     </div>
     <div class="carousel-item">
       <img id="homeImage" src="images/wallpaper2.jpg">
       <div class="carousel-caption">
      <h3 class="display-3"></h3>
       <h1 class="display-2"></h1>
       </div>
     </div>
     <div class="carousel-item">
       <img id="homeImage" src="images/wallpaper3.jpg">
       <div class="carousel-caption">
         <h1 class="display-3"></h1>
       </div>
     </div>

   </div>
 </div>



 <div class="scrollmenu">
   <a href="genre.php?id=Action">Men Casual</a>
   <a href="genre.php?id=Adventure">Men Formal</a>
   <a href="genre.php?id=Romance">Women Casual</a>
   <a href="genre.php?id=Slice of Life">Women Formal</a>
    <a href="genre.php?id=Comedy">Jersey</a>
   <a href="genre.php?id=Thriller">Kids</a>
   ...
 </div>

<div class="container">
 <form>
   <div class="row">
     <div class="col-9">
      <input class="form-control serchbox" type="text" placeholder="Search" aria-label="Search">
     </div>

   <div class=" col-md-2 col-3">
     <button type="submit" class="btn btn-outline-info searchbutton">Search</button>
   </div>
   </div>
 </form>
</div>


<?php
   include('config.php');
	$query="SELECT * from anime";
	$result = mysqli_query($db,$query);

	$row_number=mysqli_num_rows($result);
	?>
	<div class="row">
		<?php
		if ($row_number>0) {
			while ($item =mysqli_fetch_array($result)) {


				?>

				<div class="col-lg-3">
					<form method="post" action="home.php?action=add&id=<?php echo $item["animeid"];?>">
          <div class="hovereffect">
					<a href=""><img src="images/<?php echo $item['images']?>" class="img-fluid"></a>
          <div class="overlay">
           <h2><?php echo $item['name'] ?></h2>
           <?php echo $item['name'] ?>
           <h2>Genre: <?php echo $item['genre'] ?></h2>
           <input type="hidden" name="hidden_name" value="<?php echo $item["name"]; ?>"/>
          </div>
        </div>
					<div class="card-body">
					<form method="post"><input type="submit" name="details" class="btn btn-primary" value="Details"/></form>
            <?php if(isset($_POST["details"]))
            {
              $_SESSION["name"]=$_POST["hidden_name"];
            /*  header('Location:http://localhost/AnimeProject/details.php');  exit;*/
             echo '<script>window.location="http://localhost/OnlineClothingStore/details.php"</script>';
            }?>
						</div>

					</form>

				</div>

				<?php
			}
			?>
		</div>
		<?php

	}

	?>

<?php
if(isset($_POST["details"]))
{
  $_SESSION["name"]=$_POST["hidden_name"];
  echo   $_SESSION['name'];
}
?>

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
