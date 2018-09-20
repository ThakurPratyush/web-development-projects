<script type='text/javascript'>
    function func(){
    var a = getElementById(pass);
    var b = getElementById(cpass);
    if (a!==b){
     alert('Please recheck your confirmed password');
    }
    }
</script>

<?php
	$host="localhost";
	$user="root";
	$password="";
	$link=mysqli_connect($host, $user, $password, "gsite");
	
	if(isset($_POST["submit"])){
		$fnam=$_POST["fname"];
		$lnam=$_POST["lname"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$cpass=$_POST["cpass"];
		$dob=$_POST["dob"];
		$radio=$_POST["radio"];
		$num=$_POST["num"];
		$cont=$_POST["cont"];
		
			$qer="insert into users values('$fnam', '$lnam', '$email', '$pass', '$dob', '$radio', $num, '$cont')";
			$res = mysqli_query($link, $qer) or die(mysqli_error($link));
			
			if(mysqli_affected_rows($link)==1){
				echo"<script type='text/javascript'>alert('Account Created successfully');</sctipt>";
				header("location: Sign_in.php");
			}
			else{
				echo"<script type='text/javascript'>alert('Account already exists!!!!!');</sctipt>";
			}
		}	
?>

<html>
	<head>
		<title>Sign up - Create a Google Account</title>
		<link rel="stylesheet" type="text/css" href="signup.css"></link>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"></link>
	</head>
	<body>
	<form action="sign_up.php" method="POST">
		<p style="font-size:50px; color:#828585">Create your Google Account</p>
			<div id="right">
				<p>Enter your name</p>
				<input type="name" name="fname" placeholder="first" required style="height:20px"><input type="name" name="lname" placeholder="last" required style="height:20px"><br><br>
				<p>Choose your username</p>
				<input type="name" placeholder="username" name="email" required style="height:20px; width:330px;"><br><br>
				<p>Create Password</p>
				<input type="password" placeholder="atleast 6 digits" name="pass" id="pass" required style="height:20px; width:330px;"><br><br>
				<p>Confirm Password</p>
				<input type="password" name="cpass" id="cpass" required style="height:20px; width:330px;"><br><br>
				<p>Date of Birth</p>
				<input type="date" name="dob" required style="height:20px; width:330px;"><br><br>
				<p>Gender</p>
				<input type="radio" name="radio" value="M">M<br><input type="radio" name="radio" value="F">F<br><input type="radio" name="radio" value="o">Other<br><br>
				<p>Phone</p>
				<input type="number" name="num" style="height:20px; width:330px;" placeholder="Enter your number"><br><br>
				<p>Country</p>
				<input type="name" name="cont" required style="height:20px; width:330px;" placeholder="Enter your Country"><br><br>
				<input type="Submit" value="Submit" name="submit" onclick="func()" style="border:none; height:30px; width:60px; background-color:#4285F4; color:white"/>
			</div>
		</form>
	</body>
</html>