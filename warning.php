<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Error - Tourist</title>
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/warning.css">
</head>

<body>

    <!-- Error Container -->
    <div class="container">
        <h1 class="error-title">Oops! Something Went Wrong</h1>
        <p class="error-message">
            <?php echo htmlspecialchars($_GET['message']); ?>
        </p>

        <p class="error-details">
            It looks like there was an issue with your booking. Please check your information and try again. If the problem persists, contact our support team.
        </p>

        <!-- Button to return to Booking Form -->
        <a href="booking_now.php" class="btn btn-primary">Return to Booking Form</a>

        <!-- Additional Suggestions -->
        <div class="help-section">
            <h2 class="help-title">Need Assistance?</h2>
            <p>Here are some ways we can help:</p>
            <ul>
                <li><a href="faq.html" class="help-link">Check out our FAQ</a></li>
                <li><a href="contact_us.html" class="help-link">Contact Customer Support</a></li>
                <li><a href="tours.html" class="help-link">Browse Other Tours</a></li>
            </ul>
        </div>
    </div>

</body>

</html>
