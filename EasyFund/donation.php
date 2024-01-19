<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
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

        .content-container {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.5;
        }

        .box {
            background-image: url('donation.jpg');
            background-size: cover;
            width: 48%;
            height: 60%;
            padding: 70px;
            border: 1px solid black;
            border-radius: 10px;
            margin: 80px;
            display: flex; /* Add display:flex */
            flex-direction: column; /* Stack child elements vertically */
            align-items: center; /* Center child elements horizontally */
            justify-content: center; /* Center child elements vertically */
            text-align: justify; /* Justify the text */
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
        }

        .box p {
            margin-left: 40px;
            margin-right: 40px;
        }

        .box h2 {
            margin-top: -5px;
        }

        .amount-input {
            width: 45%;
            padding: 10px;
            margin: 5px 10px;
            /* Adjust margin values */
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            float: left;
        }

        /* Style for the Donate button */
        .donate-button {
            background-color: rgb(24, 212, 24);
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin: 5px 10px;
            margin-top: 20px;
        }

        .donate-button:hover {
            background-color: #45a049;
        }

        .donation-container {
            display: flex;
            gap: 1px;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        /* progress bar */
        .loading-container {
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .loading-bars {
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
            top: -35px;
            /* Adjust position */
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 22px;
            letter-spacing: 1px;
            font-family: 'Times New Roman', Times, serif;
            color: #545450;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <a href="profile.php">
        <div class="profile-icon">
            <img src="profile.jpg" width="30" height="30" alt="Profile">
        </div>
    </a>

    <div class="topnav">
        <a class="back-button" href="javascript:history.back()"><b> < </b></a>
        <div style="padding-left: 40px">
            <a href="home.php">Home</a>
            <a href="contact us page.php">Contact Us</a>
            <a href="#About">About</a>
        </div>
    </div>

    <div class="content-container">
        <div class="box">
            <?php
            include("connect.php");
            $id = $_GET['id'];

            $amount = 0;
            $sql_fund = "SELECT * FROM payment WHERE fund_id = '$id'";
            $result_fund = mysqli_query($conn, $sql_fund);
            while($row_fund = mysqli_fetch_array($result_fund)){
                $amount+=$row_fund['amount'];
            }

            $currentAmount = $amount; 

            if ($id) {
                $sql = "SELECT * FROM fundraising WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <h2><?php echo $row["title"]; ?></h2>
                    <p><?php echo $row["description"]; ?></p>
        </div>
    </div>

    <div class="loading-container">
        <div class="loading-bars">
            <div class="loading-bar">
            <div class="loading-text">RM<?php echo $currentAmount; ?> of RM<?php echo $row["targetAmount"]; ?></div>
            <div class="loading-fill" style="width: <?php echo ($currentAmount / $row["targetAmount"]) * 100; ?>%;"></div>
            </div>
        </div>
    </div>

    <!-- Container for Enter Amount and Donate button -->
    <div class="donation-container">
        <form action="payment.php" method="POST">
            <!-- Enter Amount input field -->
            <input type="hidden" name="fund_id" value="<?php echo $_GET['id']?>">
            <input type="number" class="amount-input" name="amount" placeholder="Enter Amount (RM)" required>
            

            <!-- Donate button -->
            <button class="donate-button" name="donate" >Donate</button>
        </form>
    </div><br><br><br><br><br>
    <?php
                }
            } else {
                echo "<h3>No books found</h3>";
            }
            ?>
</body>

</html>
