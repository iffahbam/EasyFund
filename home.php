
<?php
session_start();

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$query = "SELECT * FROM news ORDER BY id DESC";
$statement = $connect->prepare($query);
$statement->execute();

if($statement->rowCount() > 0) {
    $result = $statement->fetchAll();
} 

else {
    $output .= '<tr><td>No Data Found</td></tr>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyFund</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>

        body {
            background-color:rgb(241, 228, 231);
        }

        .profile-icon {
            position: absolute;
            display: flex;
            align-items: center;
            top: 10px;
            right: 40px;
            cursor: pointer;
        }

        .new-button {
            position: absolute;
            display: flex;
            align-items: center;
            top: 80px;
            left: 50px;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .text {
            display: inline-block;
            vertical-align: middle;
            font-size: 20px;
            margin-left: 14px;
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

        .column-container {
            display: flex;
            gap: 20px; /* Adjust the gap between boxes */
            justify-content: space-between; /* Distribute boxes evenly in 3 columns */
            flex-wrap: wrap; /* Wrap to the next line if there are more than 3 boxes */
            padding: 30px;
        }

        a {
          color: black;
          text-decoration: none; /* Optional: Remove underlines from links */
        }

        .title {
            font-size: 22px; /* Adjust the font size as needed */
            margin-top: 110px;
            margin-bottom: -60px;
            font-weight: bold;
        }

        .boxCol {
            width: calc(30.33% - 35px);
            text-align: center;
            border-radius: 15px;
            letter-spacing: 1px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            margin-right: 30px;
            margin-left: 30px;
            margin-bottom: 40px;
            position: relative;
        }

        .box-background {
            background-image: url('imran.jpg');
            background-size: cover;
            min-height: 200px;
            padding: 70px 60px;
            border: 1px solid black;
        }


        .loading-bar {
            width: 100%;
            height: 15px;
            background-color: #ddd;
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

        .number {
            font-size: 18px; /* Adjust the font size as needed */
            color: #555; /* Set the color as needed */
            display: flex;
            justify-content: center; 
            margin-bottom: -10px;
        }
    </style>
</head>
<body>
    <?php echo $_SESSION["username"] ?>

    <a href="profile.php">
    <div class="profile-icon">
        <img src="profile.jpg" width="30" height="30" alt="Profile">
    </div>
    </a>
    
    <div class="topnav">
        <div style="padding-left:40px">
            <a class="active" href="#Home">Home</a>
            <a href="contact us page.php">Contact Us</a>
            <a href="#About">About</a>
        </div>
    </div>

    <div align="center"><?php echo $error; ?></div>
    <br><br><br>
    <?php

$currentAmount = 500; // Replace with the actual current amount

if (isset($result)) {
    echo '<div class="column-container" id="boxContainer">';
    foreach ($result as $row) {
        echo '<div class="boxCol box-background">'; 
        echo '<a href="donation.php?news_id=' . $row["id"] . '&title=' . urlencode($row["title"]) . '&description=' . urlencode($row["description"]) . '&currentAmount=' . $row["currentAmount"] . '&targetAmount=' . $row["targetAmount"] . '" class="boxCol">';
        echo '<h2 class="title">' . $row["title"] . '</h2>';
        echo '<br><br><br><br>';
        echo '<span class="number">RM' . $currentAmount . ' of RM' . $row["targetAmount"] . '</span>'; // Display current amount out of target amount
        echo '</a>'; // Close the anchor element
        echo '<div class="loading-bar">';
        echo '<div class="loading-fill" style="width: ' . calculateProgress($row["targetAmount"]) . '%;"></div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}

function calculateProgress($targetAmount) {
    // Calculate the progress as a percentage
    // You need to implement your own logic here based on the actual progress
    // For example, you could calculate it as (currentAmount / targetAmount) * 100
    $currentAmount = 500; // Replace with the actual current amount
    $progress = ($currentAmount / $targetAmount) * 100;

    return $progress;
}
?>
   
   <script>
        function addNewAnnouncement() {
            window.location.href = "addAnnouncement.php";
        }
    </script>

</body>
</html>
