<!DOCTYPE html>
<html>
<head>
    <title>Director Login</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        /* Heading styles */
        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        /* Input styles */
        .input {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Button styles */
        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Error message styles */
        .error-message {
            color: #ff5252;
            margin-top: 10px;
        }

        /* Link styles */
        .link {
            color: #007bff;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Director Login</h2>
        
        <form action="director_dashboard.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" class="input" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" class="input" id="password" name="password" required>
            
            <input type="submit" class="button" value="Login">
        </form>
    </div>
</body>
</html>
