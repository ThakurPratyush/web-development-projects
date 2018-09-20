<?php
	$host="localhost";
	$user="root";
	$pass="";
	$link=mysqli_connect($host, $user, $pass, "gsite");
	
	session_start();
	$error="";
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$passwrd=$_POST["passwrd"];
		
		$qry="select * from users where user_name='$name' AND password='$passwrd'";
		$res=mysqli_query($link, $qry);
		
		
		
		while($r=mysqli_fetch_row($res)){
            $_SESSION["login"]=$name;
			$_SESSION["pass"]=$passwrd;
			if($r[2]==$name && $r[3]==$passwrd){
				header("location:main.html");
			}
			else{
				echo"<script type='text/javascript'>alert('either id/password is invalid or no such account exists');</script>";
			}
		}
	}	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign in - Google Accounts</title>
		<link rel="stylesheet" type="text/css" href="sign.css"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	</head>
	<body>
	<form action="Sign_in" method="POST">
		<div id="header_head">
		<header>
			<div id="top_bar">
						<div id="left_side">
							<img src="googlogo.png" style="height:23px; top: 50%; left: 50%;"></img>
						</div>
					</div>
				</header>
				<nav style="height:22px">
					<ul>
						<li style="color:black;"><a href="main.php" style="color:black;">Pixel</a></li>
						<li><a href="main.php" style="color:#828585;">Overview</a></li>
						<li><a href="specs.php" style="color:#828585;">Top Specs</a></li>
						<li><a href="switch.php" style="color:#828585;">Switch</a></li>
						<li><a href="support.php" style="color:#828585;">Support</a></li>
						<li style="border-bottom:2px solid #4285F4; padding-bottom: 10px;"><a href="Sign_in.html">Sign in</a></li>
					</ul>
				</nav>
				</div>
		<div id="main_body">
		<div id="main">
			<p style="font-size:40px;">One account. All of Google.</p>
			<p style="padding:20px;">Sign in with your Google Account</p>
			<div id="box">
				<img src="cont.png" height="64" style="padding-top:10px;"/><br><br>
				<input type="text"  name="name" placeholder="Enter your User name" required style="height:30px;"/><br><br>
				<input type="password" name="passwrd" placeholder="Enter yout password" required style="height:30px;"/><br><br>
				<input type="submit" value="Sign in" name="submit" style="border:0px; height:30px; width:60px;"/>
			</div><br>
                        <a href="sign_up.php" style="text-decoration:none; color:#4285F4" >Create an Account</a>
		</div>

					<div id="below_text">
						<a href="https://www.google.co.in/?gfe_rd=cr&ei=5ShzWP_WKqLv8wevw5W4Ag"><img src="google.svg"/></a>
						<div style="margin-left:-950px;"><a href="https://www.google.com/policies/privacy/" style="color:#828585;">Privacy&Terms</a></div>
						<div style="margin-left: -170px;">
							<a href="https://support.google.com/pixelphone/?visit_id=1-636195389215363726-2537863585&rd=2#topic=7078250" style="color:#828585;"><img src="help.png" style="height:15px;"/>
							Help Center</a>
						</div>
					</div>
		</div>
		</form>
	</body>
</html>