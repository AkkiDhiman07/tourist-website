<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f7d9d9;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 3em;
            color: #e63946;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 20px;
        }

        .heart {
            font-size: 4em;
            color: #e63946;
            margin-bottom: 20px;
            animation: beat 1s infinite;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #e63946;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1em;
        }

        a:hover {
            background-color: #d62828;
        }

        @keyframes beat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heart">❤️</div>
        <h1>Thank You From the Bottom of Our Hearts!</h1>
        <p>We have received your message, and we appreciate you taking the time to reach out to us.</p>
        <p>We'll get back to you as soon as possible!</p>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
