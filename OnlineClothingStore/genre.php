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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo"></a>
      <a class="navbar-brand" href="http://localhost/OnlineClothingStore/home.php"  id="title">MyAnimeCompanion</a>
    </div>
    <h4>  <a href="http://localhost/OnlineClothingStore/ProfileorLogin.php"  id="upper_right">Profile</a></h4>
  </div>
</nav>




<?php $genre=$_GET['id']; ?>
<?php
	session_start();
   include('config.php');
	$query="SELECT * from anime where genre='".$genre."'";
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
            <?php
            if(isset($_POST["details"]))
            {
              $_SESSION["name"]=$_POST["hidden_name"];
              header('Location:details.php');
              exit;
            }
            ?>
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
