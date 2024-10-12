<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Chaukhamba Travels</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            background-image: url('header-background.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        nav ul li a:hover {
            color: #ffcc00;
        }
        .about-us {
            padding: 50px 20px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        .about-us h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .about-us p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }
        footer a {
            color: #ffcc00;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        /* Add some animations */
        header, .about-us {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .cta-button {
            background-color: #ffcc00;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            color: #333;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #ff9900;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Chaukhamba Travels</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li> 
        </ul>
    </nav>
    <section class="about-us">
        <h2>Our Story</h2>
        <p>Born from wanderlust, Chaukhamba Travels was established by a group of seasoned adventurers...</p>
        <h2>What We Offer</h2>
        <p>Chaukhamba Travels specializes in curated travel experiences that cater to a wide array of interests...</p>
        <h2>Our Commitment to You</h2>
        <p>Customer satisfaction is the cornerstone of everything we do at Chaukhamba Travels...</p>
        <button class="cta-button">Contact Us Now</button>
    </section>
    <footer>
        <p>Contact us at <a href="mailto:chaukhambatravels@gmail.com">chaukhambatravels@gmail.com</a></p>
    </footer>
</body>
</html>
