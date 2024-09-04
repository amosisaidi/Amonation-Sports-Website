<?php
// Start session
session_start();

// Database connection for the admin
$adminHost = "localhost";
$adminUser = "root"; // Replace with the actual admin database username
$adminPass = ""; // Replace with the actual admin database password
$adminDb = "admin_db"; // Replace with the actual admin database name

$adminConn = new mysqli($adminHost, $adminUser, $adminPass, $adminDb);
if ($adminConn->connect_error) {
    die("Admin Database Connection Failed: " . $adminConn->connect_error);
}

// Check if the admin is already logged in
if (isset($_SESSION["admin"])) {
    header("Location: admin_panel.php");
    exit();
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your admin credentials
    $adminUsername = "admin";
    $adminPassword = "admin123";

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION["admin"] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        $loginError = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
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

        .error-message {
            color: #ff5252;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>

        <!-- Display the error message if loginError is not empty -->
        <?php if (isset($loginError)) : ?>
            <p class="error-message"><?php echo $loginError; ?></p>
        <?php endif; ?>

        <form action="admin_login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
