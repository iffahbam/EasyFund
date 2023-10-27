<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> Payment Page </title>

<style>
    
    h4 {
        margin-top: 10px;
        float: left;
        margin-left: 20px;
    }
    
    body {
        background-color: rgb(241, 228, 231);
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    
/* nav bar */
    .profile-icon {
        position: fixed;
        top: 10px;
        right: 40px;
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


    .box-container {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        justify-content: center; /* Center content vertically */
    }


  .box {
    background-color: white;
    width: 58%;
    height: 40%;
    padding: 40px;
    border: 1px solid black;
    border-radius: 4px;
    margin: 57px;
    text-align: center; 
  }

  .container {
    	display: flex;
    	align-items: center;
    }

  #form {
    background-color:white;
    border-radius: 4px;
    border: 1px solid #9f9f9f;
    width: 90%;
    margin: 30px;
    padding: 30px;
	}


#name {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
    margin-bottom: 10px;
}

#cardnumber {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
    margin-bottom: 10px;
}

#date{
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
    margin-bottom: 10px;
}

#cvv {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
    margin-bottom: 10px;
}


  .button-container {
    display: flex;
    justify-content: center; /* Center horizontally */
    gap: 30px; /* Add some space between the buttons */
    margin-top: 20px; /* Add space above the buttons */
    margin-bottom: 20px; /* Add space below the buttons */
}

input[type="submit"] {
    background-color: rgb(24, 212, 24);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 10%;
}


input[type="button"] {
    background-color: rgb(211, 97, 97);
    color: black;
    padding: 6px;
    border: 1px solid #000;
    border-radius: 8px;
    cursor: pointer;
    width: 10%;
}

</style>
</head>
<body>

<a href="profile.php"> 
<div class="profile-icon">
<img src="profile.jpg" width="30" height="30" alt="Profile">
</div></a>

<div class="topnav">
            <a class="back-button" href="javascript:history.back()"><b> < </b></a>
            <div style = "padding-left: 40px">
                <a href="home.php">Home</a>
                <a href="contact us page.php">Contact Us</a>
                <a href="#About">About</a>
        </div>
</div>

<div class="box-container">
    <div class="box">
        <h2>Select Payment Method</h2>
        <!-- "Financial Process Exchange (FPX)" as a clickable link with an image -->
        <a style="margin-right : 10px;" href="#" id="fpx-link">
            <img src="fpx.png" alt="FPX Logo" width="170" height="170">
        </a>
        <p>Financial Process Exchange (FPX)</p>

       
            <img src="visa&mastercard.png" alt="VISA/MasterCard Logo" width="300" height="170">
        </a>
        <p>Debit / Credit Cards (FPX)</p>

        
        <div class="container">
            <div id ="form">
                <form name = "form" method = "POST" action="####">
                <h4>Card Details</h4>
                    <input type = "text" id = "name" placeholder = "Name on Card">
                    <input type = "no" id = "cardnumber" placeholder = "Card Number">
                    <input type = "date" id = "date" placeholder = "Valid Until">
                    <input type = "no" id = "cvv" placeholder = "CVV">
                    
            <div class="button-container">
                <input type="button" id="cancel-button" value="Cancel" onclick="window.location.href='home.php';">
                <input type="submit" id="pay-button" value="Pay">

        	</div>
		</form>
	</div> 
</div>


<script>
        
        // Cancel button functionality (you can customize this as needed)
        document.getElementById("cancel-button").addEventListener("click", function () {
            // Add code to handle cancel action
            alert("Payment canceled.");
        });

        // Pay button functionality (you can customize this as needed)
        document.getElementById("pay-button").addEventListener("click", function () {
            // Add code to handle the payment submission
            alert("Processing payment...");
        });
    </script>

</body>
</html>
