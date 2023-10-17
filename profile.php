<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> EasyFund </title>
	<link rel = "stylesheet" type = "text/css" href = "profile.css">

    <style>

.profile-icon {
    position: fixed;
    top: 10px;
    right: 40px;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #DEC5C5;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #DCA9A9;
  color: black;
}

.topnav a.active {
  background-color: #DCA9A9;
  color: black;
}

.container {
    	display: flex;
    	align-items: center;
    }

form {
		display: flex;
      	flex-direction: column;
      	gap: 20px;
	}

.edit-icon {
            position: relative;
            bottom: 140px; 
            left: 1070px;
            font-size: 40px;
            cursor: pointer;
            transform: scaleX(-1); 
        }

.button-container {
        display: flex;
        justify-content: center; /* Center horizontally */
        gap: 30px; /* Add some space between the buttons */
}

</style>
</head>

<body>

<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div>

<div class="topnav">
<a class="back-button" href="javascript:history.back()"><b> < </b></a>
<div style = "padding-left:40px">
  <a href="home.php">Home</a>
  <a href="contact us page.php">Contact Us</a>
  <a href="#About">About</a>
</div>
</div>

<div class="container">
<div class="edit-icon">&#9998;</div>
	<div id = "form">
    <h2>My Profile</h2>
		<form name = "form" method = "POST" action="home.php">
			<input type = "text" id = "name" placeholder = "Name">
			<input type = "phone number" id = "number" placeholder = "Phone Number">
            <input type = "text" id = "email" placeholder = "Email Address">
            <input type = "text" id = "username" placeholder = "Username">
            <input type = "password" id = "password" placeholder = "Password">
			
			<div class="button-container">
          			<button type="submit" id="btn" name="save">
            			<span class="button-text">Save</span>
          			</button>

                      <button type="submit" id="btn2" name="signout">
            			<span class="button-text">Sign Out</span>
          			</button>
				</form>
          	

		
        	</div>
		</form>
	</div> 
</div>

</body>
</html>
</head>