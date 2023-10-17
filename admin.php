
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
		<form name = "form" method = "POST" action="adminHome.php">
			<input type = "text" id = "username" placeholder = "Admin ID">
			<input type = "password" id = "password" placeholder = "Password">
			
			<div class="button-container">
          			<button type="submit" id="btn" name="signin">
            			<span class="button-text">Sign In</span>
          			</button>
                      <p style = "font-size: 11px"><u>Sign in as Donor</u></p>
				</form> 
        	</div>
		</form>
	</div> 
   </div>

<p></br><span style = "margin: 120px"><span style = "font-size: 16px"><span style = "letter-spacing: 1px">
		Join us today and be part of a compassionate community dedicated</br><span style = "margin: 150px">
		to making a meaningul impact in the lives of those in need.</p></br>

</body>
</html>