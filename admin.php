<?php
// Start session
session_start();

// Check if the admin is logged in
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}

// Replace with your database connection details
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "online_sick_sheet";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user accounts
$userAccounts = [];
$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userAccounts[] = $row;
    }
}

// Get messages
$messages = [];
$sql = "SELECT sender, recipient, text, timestamp FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
            width: 800px;
            text-align: center;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .user-list {
            text-align: left;
            margin-bottom: 20px;
        }

        .user-list-item {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .message-list {
            max-height: 300px;
            overflow-y: scroll;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            text-align: left;
            margin-bottom: 20px;
        }

        .message {
            margin-bottom: 10px;
            padding: 5px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .message .sender {
            font-weight: bold;
        }

        .message .timestamp {
            font-size: 0.8em;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Panel</h2>

        <h3>User Accounts</h3>
        <div class="user-list">
            <?php foreach ($userAccounts as $user) : ?>
                <div class="user-list-item">
                    <span>ID: <?php echo $user["id"]; ?></span><br>
                    <span>Username: <?php echo $user["username"]; ?></span><br>
                    <span>Email: <?php echo $user["email"]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <h3>Messages</h3>
        <div class="message-list">
            <?php foreach ($messages as $message) : ?>
                <div class="message">
                    <span class="sender"><?php echo $message["sender"]; ?></span>
                    <p><?php echo $message["text"]; ?></p>
                    <span class="timestamp"><?php echo $message["timestamp"]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <p><a href="admin_logout.php">Logout</a></p>
    </div>
</body>
</html>
