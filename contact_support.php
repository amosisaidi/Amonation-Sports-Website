<!DOCTYPE html>
<html>
<head>
    <title>Contact Support</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 6px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success-message {
            color: #28a745;
            margin-top: 10px;
        }

        .error-message {
            color: #dc3545;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Support</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Prepare email content
            $to = "abinerykinwiko@gmail.com"; // Change to the support email address
            $subject = "Support Request from $name";
            $headers = "From: $email";
            $emailContent = "Name: $name\nEmail: $email\nMessage:\n$message";

            // Send email
            if (mail($to, $subject, $emailContent, $headers)) {
                echo "<p class='success-message'>Your support request has been sent successfully!</p>";
            } else {
                echo "<p class='error-message'>Failed to send support request. Please try again later.</p>";
            }
        }
        ?>

        <!-- Support request form -->
        <form action="contact_support.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Submit Request">
        </form>
    </div>
</body>
</html>
