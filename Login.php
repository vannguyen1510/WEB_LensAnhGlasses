<?php 
	
	//require_once "Login_index.php";

	include('Login_XuLy.php');

	if(isset($_SESSION['username']))
	{
		header("location: Logged_Welcome.php");
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<script src="JS/jquery.min.js"></script>
	<link href="CSS/style_login.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->

<div class="header">
		<div class="header-main">
		       <h1>Hi there !</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
					 <form action="Login.php" method="POST">
					
						<input type="text"  value="User name" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
						<input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
						<input type="submit" name="dangnhap" value="Login"> 
						
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>or</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="twitt"><h5>Twitter</h5></a>
					</div>
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2018 Lens and glasses. All rights reserved | Design by Van Nguyen</p>
</div>
<!--footer end here-->
	
</form>
</body>
</html>