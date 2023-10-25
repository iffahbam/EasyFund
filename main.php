
<?php

$host="localhost";
$user="root";
$password="";
$db="user";

$data = mysqli_connect($host, $user, $password, $db);

if($data === false) {
	die("connection error");

}

if($_SERVER["REQUEST_METHOD"]=="POST") {
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username= '".$username."' AND password= '".$password."' ";

	$result=mysqli_query($data, $sql);

	$row=mysqli_fetch_array($result);

	if($row ["usertype"]=="user") {
		$_SESSION["username"] = $username;
		header("location: home.php");
	}

	else if($row ["usertype"]=="admin") {
		$_SESSION["username"] = $username;
		header("location: adminHome.php");
	}

	else {
		$errorMessage = "Invalid username or password!";
	}
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> EasyFund </title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<style>
	.container {
    	display: flex;
    	align-items: center;
    }

	img {
  		border-radius: 50%;
		width: 340px;
      	height: 340px;
		margin-left: 200px;
	}

	form {
		display: flex;
      	flex-direction: column;
      	gap: 20px;
	}

	#error-message {
        color: #EB4852;
        text-align: center; /* Center the error message */
        margin-bottom: 3px; /* Add some space below the error message */
    }

</style>

<body>
	
	<h3>WELCOME TO EASYFUND!</h3>
	<p><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Our mission is to facilitate 
		and simplify the process of fundraising</br><span style = "margin: 180px">
		for charitable causes within the IIUM community.</p></br>
<div class="container">
	<img src="Logo.jpg" alt="Logo">

	<div id = "form">
		<form name = "form" method = "POST" action="#">

			<div id="error-message">
        	<?php if (isset($errorMessage)) echo $errorMessage; ?>
    		</div> <!-- Error message container -->

			<input type = "text" id = "username" name = "username" placeholder = "Username" required>
			<input type = "password" id = "username" name = "password" placeholder = "Password" required>
			
			<div class="button-container">
          			<button type="submit" id="btn" name="signin">
            			<span class="button-text">Sign In</span>
          			</button>
					  <p style = "font-size: 11px"><u>Do not have an account?</u></p>
				</form>
          	

				<form name = "signup_form" method = "POST" action="signup.php">
					<button type="submit" id="btn" name="signup">
            			<span class="button-text">Sign Up</span>
          			</button>
        	</div>
		</form>
	</div> 
</div>

<p></br><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Join us today and be part of a compassionate community dedicated</br><span style = "margin: 150px">
		to making a meaningul impact in the lives of those in need.</p></br>


</body>
</html>


