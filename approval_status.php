<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Initialize variables
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "sick_sheet_db"; // Change to your database name

// Fetch the approval percentage for the logged-in student
if ($_SESSION["user_id"]) {
    $userId = $_SESSION["user_id"];

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve approval percentage from the database
    $approvalPercentage = 0; // Initialize

    $sql = "SELECT approval_percentage FROM student_approval WHERE user_id = '$userId'"; // Make sure this SQL query is correct
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error in SQL query: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $approvalPercentage = $row["approval_percentage"];
    } else {
        $noResultsMessage = "No results found.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Approval Page</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p, a {
    margin: 0;
    padding: 0;
}

/* Center the content vertically and horizontally */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

        /* Container for content */
        .container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 400px;
    text-align: center;
}

/* Heading style */
h2 {
    margin: 0 0 20px;
    color: #333;
}

        /* Link style */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Approval percentage style */
        .approval-percentage {
            font-size: 24px;
            color: #28a745;
            margin-bottom: 20px;
        }

        /* Other links style */
        .other-links {
            margin-top: 20px;
        }

        /* Additional link style */
        .other-links a {
            margin-right: 10px;
        }
.no-results {
            color: #dc3545;
            font-size: 18px;
            margin-top: 10px;
        }

        /* Links container */
        .links-container {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Link style */
        a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Links container */
.links-container {
    margin-top: 20px;
}

/* Link style */
.other-links a {
    margin-top: 10px;
    padding: 10px 20px;
    border: 1px solid #007bff;
    border-radius: 4px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
    display: inline-block;
}

.other-links a:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="container">
        <h2>Approval Percentage</h2>
        
        <?php
        echo "<p class='approval-percentage'>Your sick sheet approval percentage: $approvalPercentage%</p>";
        ?>

        <!-- Additional links for interaction -->
        <p class="other-links">Other links:
            <a href="update_info.php">Update Information</a>
            <a href="view_history.php">View History</a>
            <a href="contact_support.php">Contact Support</a>
        </p>
    </div>
</body>
</html>
