<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<body background="images/669006.png" style="padding-left:500px">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card" style="background:rgb(0,0,0,0.5);">
<header class="card-header">
	<h4 class="card-title mt-2" style="color:white">Sign up</h4>
</header>
<article class="card-body">
<form action="registerphp.php" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label style="color:white">Name</label>
		  	<input type="text" class="form-control" name="name" placeholder="">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
  <div class="form-group"  >
    <label style="color:white">User Name</label>
    <input type="text" class="form-control" name="username" placeholder="User Name">
  </div> <!-- form-group end.// -->
	<div class="form-group">
		<label style="color:white">Email address</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div> <!-- form-group end.// -->
	<div class="form-group">
		<label style="color:white">Create password</label>
	    <input class="form-control" name="password" type="password">
	</div> <!-- form-group end.// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" type="submit" name="submit_btn" value="send" action="login.php"> Register  </button>
    </div> <!-- form-group// -->
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center" style="color:white">Have an account? <a href="http://localhost/OnlineClothingStore/login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
</body>
