<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> EasyFund </title>
	<link rel = "stylesheet" type = "text/css" href = "style_editdetails.css">
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
	<div id = "form">
    <h2>Title</h2>
		<form name = "form" method = "POST" action="home.php">
			<input type = "text" id = "title" placeholder = "Edit the title here">
      <h2>Description</h2>
			<input type = "text" id = "description" placeholder = "Edit the description here">
          
			
			<div class="button-container">
          			<button type="submit" id="btn" name="cancel">
            			<span class="button-text">Cancel</span>
          			</button>

                      <button type="submit" id="btn2" name="update">
            			<span class="button-text">Update</span>
          			</button>
				</form>
          	

		
        	</div>
		</form>
	</div> 
</div>

</body>
</html>
</head>