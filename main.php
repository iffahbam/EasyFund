<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE username = '%s'",
                   $mysqli->real_escape_string($_POST["username"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>


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
	<title> EasyFund Login</title>
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


    body {
    background-color:rgb(241, 228, 231);
}

h3 {
    margin-top: 80px;
    margin-left: 220px;
    letter-spacing: 1px;
}

#form {
    background-color:#DEC5C5;
    border-radius: 18px;
    width: 25%;
    margin-left: 280px;
    padding: 30px;
}

#username {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#password{
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#btn {
    color: white;
    background-color: black;
    padding: 6px;
    border-radius: 8px;
    width: 30%;
    border: 0;
}

#btn2 {
    color: white;
    background-color: black;
    padding: 6px;
    border-radius: 8px;
    width: 30%;
    border: 0;
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

			<input type = "text" id = "username" name = "username" placeholder = "Username" required  value="<?= htmlspecialchars($_POST["username"] ?? "") ?>">


			<input type = "password" id = "password" name = "password" placeholder = "Password" required>
			
			<div class="button-container">
          			<button type="submit" id="btn" name="signin" action="home.php">
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




