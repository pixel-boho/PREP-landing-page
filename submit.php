<?php
                $servername = "localhost";
                $username = "pixelboho_lijo";
                $password = "W23d%hh74s";
                $dbname = "pixelboho_camb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO camb01 (name, mobile, email, pincode, school, datetime, ip_address) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $mobile, $email, $pincode, $school, $datetime, $ip_address);

// Set parameters and execute
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pincode = $_POST['pincode'];
$school = $_POST['school'];
$datetime = $_POST['datetime'];
$ip_address = $_POST['ip_address'];
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect to thank you page
header("Location: thankyou.php");
exit();
?>
