<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "touristbooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $destination = htmlspecialchars(trim($_POST['destination']));
    $date_of_travel = htmlspecialchars(trim($_POST['date']));
    $number_of_travelers = filter_var($_POST['travelers'], FILTER_VALIDATE_INT);
    $full_name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $current_date = date("Y-m-d");
    if ($date_of_travel < $current_date) {
        header("Location: warning.php?message=The date you selected is in the past. Please choose a future date.");
        exit();
    }

    if ($number_of_travelers === false || !$email) {
        header("Location: warning.php?message=Invalid input data. Please check your entries.");
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Bookings (destination, date_of_travel, number_of_travelers, full_name, email, phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $destination, $date_of_travel, $number_of_travelers, $full_name, $email, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: booking_successfull.php");
        exit();
    } else {
        header("Location: warning.php?message=Error: " . $stmt->error);
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    header("Location: warning.php?message=Invalid request method. Please submit the form again.");
    exit();}
?>
