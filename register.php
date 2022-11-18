<?php include'dbconn.php'; 

if($_SERVER['REQUEST_METHOD']== 'POST'){
	$user_name = $_POST['user'];
	$user_email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	$existSql = "select * from `users` where email = '$user_email'"; 
	$result = mysqli_query($conn, $existSql);
	$numRows = mysqli_num_rows($result);
	if($numRows>0){
		echo"Email already exists..please choose other email.";
	}else{
		 
	if($pass == $cpass){
		//$hash = password_hash($pass, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users` (`user`, `email`, `pass`) VALUES ('$user_name', '$user_email', '$pass')";
    	$result = mysqli_query($conn, $sql);
		if($result){
		header("location: login.php");     
			 
		}
		
	}else{
		echo"Passwords do not match!";
		
	}	
		
	 } 
 }  
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files 

-->
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="css/registration.css" rel="stylesheet" type="text/css" media="all" />
<!-- //web font 


	<nav class="navbar background">
		<ul class="nav-list">
		   
			<div class="logo"><img src="https://th.bing.com/th/id/OIP.cxqhgfYobV7-e18rlUCbuwHaHa?w=180&h=180&c=7&o=5&pid=1.7" alt="logo"></div>
		
		
		<li><a href="index.php">Home</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="Syllabus.html">Syllabus</a></li>
		</ul>
		
		
			</nav>


-->

</head>
<body>


	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp Now</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="POST">
					<input class="text" type="text" name="user" placeholder="Username" required="">
				   <input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					 <input class="text w3lpass" type="password" name="cpass" placeholder="Confirm Password" required=""> 
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>	
	
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

	<br>
   

    <footer class="background">
        <p class="text-footer">
        Copyright &copy; 2027 www.WinLinsys.com- All rights reserved
        </p>
    </footer>

</body>
</html>