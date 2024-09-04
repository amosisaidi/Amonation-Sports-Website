<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 800px;
            margin: 20px auto;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        h3 {
            margin-top: 20px;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #007bff;
        }

        p {
            margin-top: 20px;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="nav-links">
            <li><a href="admin_panel.php">Home</a></li>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="view_reports.php">View Reports</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Welcome, Admin!</h2>

        <h3>Admin Actions:</h3>
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="view_reports.php">View Reports</a></li>
        </ul>

        <h3>Chat with Users:</h3>
        <ul>
            <li><a href="chat_director1.php">Chat with Director 1</a></li>
            <li><a href="chat_director2.php">Chat with Director 2</a></li>
            <li><a href="chat_director3.php">Chat with Director 3</a></li>
            <li><a href="chat_medical_officer_week.php">Chat with Medical Officer (Week)</a></li>
            <li><a href="chat_medical_officer_hospital.php">Chat with Medical Officer (Hospital)</a></li>
        </ul>

        <p><a href="admin_logout.php">Logout</a></p>
    </div>
</body>
</html>
