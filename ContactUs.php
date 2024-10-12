<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Chaukhamba Travel Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
            overflow: hidden;
        }

        h1, h2 {
            color: #0072ff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
            text-align: center;
        }

        ul li {
            font-size: 16px;
            margin-bottom: 10px;
            color: #00c6ff;
            transition: color 0.3s ease;
        }

        ul li:hover {
            color: #0072ff;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #0072ff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
            outline: none;
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #0072ff, #00c6ff);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            transform: translateY(-3px);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .social-icons a {
            font-size: 24px;
            color: #0072ff;
            margin: 0 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a:hover {
            color: #00c6ff;
            transform: scale(1.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            ul {
                text-align: left;
            }

            .social-icons {
                flex-direction: column;
            }
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            animation: fadeInBackground 2s ease-in-out forwards;
        }

        @keyframes fadeInBackground {
            0% {
                background-color: transparent;
            }
            100% {
                background-color: #ffffff;
            }
        }

        h1, h2 {
            color: #0072ff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        form {
            background-color: rgba(0, 123, 255, 0.05);
            padding: 20px;
            border-radius: 15px;
            animation: formFade 3s ease-in-out;
        }

        @keyframes formFade {
            from {
                background-color: rgba(0, 123, 255, 0);
            }
            to {
                background-color: rgba(0, 123, 255, 0.05);
            }
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #0072ff, #00c6ff);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            transform: translateY(-3px);
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
        }
    
    </style>
</head>

<body>

    <div class="container">
        <h1>Contact Us</h1>
        <p>We're here to assist you with any inquiries, feedback, or suggestions. Reach out to us at Chaukhamba Travel Agency through the following channels.</p>

        <h2>Office Address</h2>
        <p>123 Adventure Ave,<br>Cityville, Country, ZIP</p>

        <h2>Phone</h2>
        <ul>
            <li>Main: +918171082167</li>
            <li>Toll-Free: N/A</li>
        </ul>

        <h2>Email</h2>
        <ul>
            <li><a href="mailto:chaukhambatravels@gmail.com">General Inquiries</a></li>
            <li><a href="mailto:chaukhambatravels@gmail.com">Customer Support</a></li>
            <li><a href="mailto:chaukhambatravels@gmail.com">Bookings</a></li>
        </ul>

        <h2>Business Hours</h2>
        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>

        <h2>Follow Us</h2>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" aria-label="Pinterest"><i class="fa fa-pinterest"></i></a>
        </div>

        <h2>Feedback & Suggestions</h2>
        <p>We value your feedback! Please fill out the form below or email us at <a href="mailto:chaukhambatravels@gmail.com">chaukhambatravels@gmail.com</a>.</p>

        <form action="contactUs_submit.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>
