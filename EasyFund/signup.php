<?php


if(isset($_POST['signup'])){

    if (empty($_POST["name"])) {
        $errorMessage = "Name is required";
    }elseif (empty($_POST["phone"])) {
        $errorMessage = "Phone Number is required";
    }elseif ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Valid email is required";
    }elseif (empty($_POST["username"])) {
        $errorMessage = "Username is required";
    }elseif (strlen($_POST["password"]) < 8) {
        $errorMessage = "Password must be at least 8 characters";
    }elseif ( ! preg_match("/[a-z]/i", $_POST["password"])) {
        $errorMessage = "Password must contain at least one letter";
    }elseif ( ! preg_match("/[0-9]/", $_POST["password"])) {
        $errorMessage = "Password must contain at least one number";
    }elseif ($_POST["password"] !== $_POST["password_confirmation"]) {
        $errorMessage = "Passwords must match";
    }else{

        $name = trim($_POST["name"]);
        $phone = trim($_POST["phone"]);
        $email = trim($_POST["email"]);
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
                      
                      
        include "connect.php";             

        $sql = "INSERT INTO  donor (name,phone,email,username,password,usertype) VALUES 
                    ('$name','$phone','$email','$username','$password','user')"; 

        mysqli_query($conn, $sql) or die('Query failed. ' . mysqli_error());

        print "<script>";
        print "alert('User successfully registered'); self.location='index.php';"; 
        print "</script>";

    }


}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> Sign Up Page </title>
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

#name {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#phone{
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
}

#email {
    background-color: white;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
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

#password_confirmation{
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
        <form name="form" action="" method="post" id="signup">

            <div id="error-message">
            <?php if (!empty($errorMessage)):?>

            <?php echo $errorMessage?>

            <?php endif?>
            </div> <!-- Error message container -->

            <input type = "text" id="name" name="name" placeholder = "Name" required>
			<input type = "tel" id="phone" name="phone" placeholder = "Phone Number" required>
            <input type = "email" id="email" name="email" placeholder = "Email Address" required>
			<input type = "text" id="username" name="username" placeholder = "Username" required>
			<input type = "password" id="password" name="password" placeholder = "Password" required>
			<input type = "password" id="password_confirmation" name="password_confirmation" placeholder = "Confirm Password" required>
            
			<div class="button-container">
                <form name="signup_form" method="POST" action="index.php">
          			<button type="submit" id="btn" name="signup">
            			<span class="button-text">Sign Up</span>
          			</button>
					  <p style = "font-size: 11px"><u>Already have an account?</a></u></p>
				</form>
          	
				<form name = "signup_form" method = "POST" action="index.php">
					<button type="submit" id="btn" name="login">
            			<span class="button-text">Sign In</span>
          			</button>
        	</div>
		</form>
	</div> 
</div>

<p></br><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Join us today and be part of a compassionate community dedicated</br><span style = "margin: 150px">
		to making a meaningful impact in the lives of those in need.</p></br>


        <script>
    
    // Pay button functionality (you can customize this as needed)
        document.getElementById("btn").addEventListener("click", function () {
            // Add code to handle the payment submission
            //alert("Signup successful.");
        });
    </script>

</body>
</html>










