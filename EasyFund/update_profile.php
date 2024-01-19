<?php
// Database connection parameters (login_db)
$dbName = "login_db";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";

// Create connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phoneNumber = $_POST["number"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
}
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("UPDATE login_db SET name=?, phoneNumber=?, email=?, username=?, password=? WHERE user);
    $stmt->bind_param("sssss", $name, $phoneNumber, $email, $username, $password);

    if ($stmt->execute()) {
        echo "Profile updated successfully";
    } else {
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
