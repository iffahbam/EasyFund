<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "with = device-width, initial-scale = 1.0">
	<title> Donation Page </title>
<style>
    /* nav bar */
    h3 {
        margin-top: 80px;
        margin-left: 220px;
        letter-spacing: 1px;
    }

    .profile-icon {
        position: fixed;
        top: 10px;
        right: 40px;
    }

    body {
        background-color: rgb(241, 228, 231);
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


    .content-container {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        justify-content: center; /* Center content vertically */
        line-height: 1.5;
    }


  .box {
    background-color: #FBFBF6;
    width: 48%;
    height: 60%;
    padding: 60px;
    border: 1px solid black;
    border-radius: 10px;
    margin: 57px;
    text-align: center; 
    font-family: 'Times New Roman', Times, serif;
    font-size: 18px;
  }


  /* progress bar */
  .loading-container {
    margin: 10px;
    display: flex;
    flex-direction: column; /* Stack loading bars vertically */
    align-items: center; /* Center loading bars horizontally */
    justify-content: center; /* Center loading bars vertically */
}

.loading-bars {
    width: 25%;
    display: flex;
    flex-direction: column; /* Stack loading bars vertically */
    align-items: center; /* Center loading bars horizontally */
    justify-content: center; /* Center loading bars vertically */
}

.loading-bar {
    width: 100%;
    height: 20px;
    background-color: whitesmoke;
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    position: relative;
}

.loading-fill {
    height: 100%;
    background-color: #4CAF50;
    border-radius: 10px;
}

.loading-text {
    position: absolute;
    top: -35px; /* Adjust position */
    left: 0;
    width: 100%;
    text-align: center;
    font-size: 22px;
    letter-spacing: 1px;
    font-family: 'Times New Roman', Times, serif;
    color: #545450;
    font-weight: bold;
    
}

/* Style for the Enter Amount input field */
        .amount-input {
            width: 45%;
            padding: 10px;
            margin: 5px 10px; /* Adjust margin values */
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            float: left;
        }

        /* Style for the Donate button */
        .donate-button {
            background-color: rgb(24, 212, 24); /* Green color */
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 15px; /* Adjusted border-radius for consistency */
            cursor: pointer;
            margin: 5px 10px; /* Adjust margin values */
            margin-top: 20px;
        }

        /* Style for the Donate button on hover */
        .donate-button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Container for Enter Amount and Donate button */
        .donation-container {
            display: flex;
            gap: 1px; /* Add some space between the buttons */
            align-items: center; /* Center horizontally */
            flex-direction: column;
            justify-content: center; /* Center vertically */
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

<div class="content-container">
    <div class="box">
      
        <h2><?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : ''; ?></h2>
      <p><?php echo isset($_GET['description']) ? htmlspecialchars($_GET['description']) : ''; ?></br></p>
 </div>   
  </div>

  <?php
    $currentAmount = 500; 
    $targetAmount = isset($_GET['targetAmount']) ? (int)$_GET['targetAmount'] : 0;
    ?>

    <div class="loading-container">
        <div class="loading-bars">
            <div class="loading-bar">
                <div class="loading-text">RM<?php echo $currentAmount; ?> of RM<?php echo $targetAmount; ?></div>
                <div class="loading-fill" style="width: <?php echo ($currentAmount / $targetAmount) * 100; ?>%;"></div>
            </div>
        </div>
    </div>

    <!-- Container for Enter Amount and Donate button -->
    <div class="donation-container">
    <form action="payment.php" method="POST">
            <!-- Enter Amount input field -->
            <input type="number" class="amount-input" placeholder="Enter Amount (RM)">
            <!-- Donate button -->
            <button class="donate-button">Donate</button>
        </div>

</body>
</html>
</head>

