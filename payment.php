<?php
session_start();


if(isset($_POST['donate'])){
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['fund_id'] = $_POST['fund_id'];
}
    
if(isset($_POST['payment_method'])){
    $payment_method = $_POST['payment_method'];
}else{
    $payment_method = "";
}

?>


<?php

    if(isset($_POST['btn_pay'])){

        include "database.php";
        $fund_id = $_SESSION['fund_id'];
        $payment = $_POST['payment_method'];
        
        if($payment=='FPX'){
            $bank_name = $_POST['bank_name'];
        }

        if($payment=='Credit Card'){
            $name_card = $_POST['name_card'];
            $cvv = $_POST['cvv'];
        }

        $card_number = $_POST['card_number'];
        $payment_date = $_POST['payment_date'];
        $amount = $_SESSION['amount'];

        if($payment=='FPX'){

            $sql = "INSERT INTO  payment (fund_id,payment_type,bank_name,card_number,payment_date,amount) VALUES 
            ('$fund_id','$payment','$bank_name','$card_number','$payment_date','$amount')"; 

        }elseif($payment=='Credit Card'){

             $sql = "INSERT INTO  payment (fund_id,payment_type,name,card_number,cvv,payment_date,amount) VALUES 
            ('$fund_id','$payment','$name_card','$card_number','$cvv','$payment_date','$amount')";

        }

        mysqli_query($mysqli, $sql) or die('Query failed. ' . mysqli_error());
          
        print "<script>";
        print "alert('Payment successfully updated'); self.location='home.php';"; 
        print "</script>"; 

    }



?>


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
            position: absolute;
            display: flex;
            align-items: center;
            top: 10px;
            right: 40px;
            cursor: pointer;
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

#bank {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 97.5%;
    border: 0;
    margin-bottom: 10px;
}

#amount {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 95%;
    border: 0;
    margin-bottom: 10px;
}

#payment_method {
    background-color: #ececec;
    padding: 10px;
    border-radius: 8px;
    width: 50%;
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

        <form name="form" method="POST" action="">

        <select name="payment_method" id="payment_method" onchange="this.form.submit();" class="form-control" >
            <option>Please select payment method</option>
            <option value="FPX" <?php if(!strcmp('FPX',$payment_method)): echo "selected"; ?> <?php endif?>  >FPX</option>
            <option value="Credit Card" <?php if(!strcmp('Credit Card',$payment_method)): echo "selected"; ?> <?php endif?>>Credit Card</option>
        </select>

        <br>

        <?php if($payment_method=='FPX'):?>

        <a style="margin-right : 10px;" href="#" id="fpx-link">
            <img src="fpx.png" alt="FPX Logo" width="170" height="170">
        </a>

        <p>Financial Process Exchange (FPX)</p>

        <?php endif?>

        <?php if($payment_method=='Credit Card'):?>

        <img src="visa&mastercard.png" alt="VISA/MasterCard Logo" width="400" height="170">
       
        <p>Debit / Credit Cards (FPX)</p>

        <?php endif?>

        <?php if($payment_method!=""):?>

        <div class="container">
            <div id="form">
                <h4>

                    <?php if($payment_method=='FPX'):?>
                        FPX Details
                    <?php elseif($payment_method=='Credit Card'):?>
                        Card Details
                    <?php endif?>

                
            </h4>

                    
            <?php if($payment_method=='FPX'):?>

                <input type="text" id="amount" name="amount" value="<?php echo $_SESSION['amount']; ?>" readonly>

                <select name="bank_name" id="bank" required >
                    <option value="">Please select bank name</option>
                    <option value="Maybank">Maybank Bank</option>
                    <option value="CIMB">CIMB Bank</option>
                    <option value="RHB">RHB Bank</option>
                </select>

            <input type="text" id="name" name="card_number" placeholder = "Bank Account Number" required>
            <input type="date" id="date" name="payment_date" placeholder = "Valid Until" required>

            <?php endif?>

            <?php if($payment_method=='Credit Card'):?>

            <input type="text" id="amount" name="amount" value="<?php echo $_SESSION['amount']; ?>" readonly>

            <input type="text" id="name" name="name_card" placeholder = "Name on Card" required>
            <input type="text" id="cardnumber" name="card_number" placeholder = "Card Number" required>
            <input type="date" id="date" name="payment_date" placeholder = "Valid Until" required>
            <input type="text" id="cvv" name="cvv" placeholder = "CVV" required>

            <?php endif?>


            <?php if(isset($_POST['payment_method'])):?>
                    
            <div class="button-container">
                <input type="button" id="cancel-button" value="Cancel" onclick="window.location.href='home.php';">
                <input type="submit" name="btn_pay" id="pay-button" value="Pay">
        	</div>

            <?php endif?>

            </div>
        </div>

      <?php endif ?>
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
