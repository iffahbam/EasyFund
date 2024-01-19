<?php session_start();?>
<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Admin</title>
    <style>
        body {
            background-color: rgb(241, 228, 231);
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

        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 30px;
        }

        a {
          color: black;
          text-decoration: none; /* Optional: Remove underlines from links */
        }

        .column-container {
            display: flex;
            gap: 20px; /* Adjust the gap between boxes */
            justify-content: space-between; /* Distribute boxes evenly in 3 columns */
            flex-wrap: wrap; /* Wrap to the next line if there are more than 3 boxes */
            padding: 30px;
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

        .boxCol h3 {
            font-size: 22px;
            font-weight: bold;
            margin-top: 70px; /* Adjust the margin as needed to move the title downwards */
        }


        .box-background {
            background-image: url('photo.jpg');
            background-size: cover;
            min-height: 200px;
            padding: 90px 60px;
            border: 1px solid black;
        }

        .box-background1 {
            background-image: url('photo3.jpg');
            background-size: cover;
            min-height: 200px;
            padding: 90px 60px;
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
            margin-top: 10px;
            
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
            margin-top: -60px; 
        }

        .edit-icon {
            position: relative;
            bottom: 110px;
            left: 185px;
            font-size: 40px;
            cursor: pointer;
            transform: scaleX(-1);
        }
    </style>
</head>
<body>

<a href="adminProfile.php">
    <div class="profile-icon">
        <img src="profile.jpg" width="30" height="30" alt="Profile">
    </div>
    </a>
    
    <div class="topnav">
        <div style="padding-left:40px">
            <a class="active" href="#adminHome">Home</a>
            <a href="contactAdmin.php">Contact Us</a>
            <a href="aboutAdmin">About</a>
        </div>
    </div>

    <div class="new-button" onclick="addNewAnnouncement()">
        <img src="plus.jpg" width="30" height="30" alt="Plus Icon">
        <span class="text">NEW</span>
    </div>
    <br><br><br>

<?php
    include('connect.php');
    $sqlSelect = "SELECT * FROM fundraising ORDER BY id DESC";
    $result = mysqli_query($conn, $sqlSelect);
    

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<div class="column-container" id="boxContainer">';
        while ($data = mysqli_fetch_array($result)) {

            $amount = 0;
            $id = $data['id'];
            $sql_fund = "SELECT * FROM payment WHERE fund_id = '$id'";
            $result_fund = mysqli_query($conn, $sql_fund);
            while($row_fund = mysqli_fetch_array($result_fund)){
                $amount+=$row_fund['amount'];
            }


            $currentAmount = $amount; 
            echo '<div class="boxCol box-background">';
            echo '<a href="details.php?id=' . $data['id'] . '">';
            echo '<div class="edit-icon">&#9998;</div>';
            echo '<h3>' . $data['title'] . '</h3>';
            echo '<br><br><br><br>';
            echo '<span class="number">RM' . $currentAmount . ' of RM' . $data['targetAmount'] . '</span>';
            echo '</a>';
            echo '<div class="loading-bar">';
            echo '<div class="loading-fill" style="width: ' . calculateProgress($currentAmount, $data['targetAmount']) . '%;"></div>';
            echo '</div>';
            echo '</div>';


        }
    
        echo '</div>';
    } 
    
    else {
        echo '<p>No news found</p>';
    }

    function calculateProgress($currentAmount, $targetAmount) {
        // Calculate the progress as a percentage
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
