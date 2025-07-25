<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="login.php"> <!-- Assuming the PHP code is in a file named login.php -->
        User ID: <input type="text" name="username" id="username">
        Password: <input type="password" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
    <?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "login1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$userID = $_POST['username'];
$password = $_POST['password'];

// Example SQL query with placeholder for security (consider using prepared statements)
$sql = "SELECT * FROM your_table_name WHERE username = '$userID' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Login failed. Invalid credentials.";
}

// Close connection
$conn->close();
?>

</body>
</html>
