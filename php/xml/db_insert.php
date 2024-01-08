<?php
    $servername = "your_server_name"; // Replace with your MySQL server name
    $username = "your_username";       // Replace with your MySQL username
    $password = "your_password";       // Replace with your MySQL password
    $dbname = "mechi";                 // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // Information to insert
    $name = "John Doe";
    $password = password_hash("secure_password", PASSWORD_DEFAULT); // Replace with your secure password

    // SQL query to insert data
    $sql = "INSERT INTO user (name, password) VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>