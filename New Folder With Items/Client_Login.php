<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "InfraKonnect"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check credentials
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Credentials are valid
        session_start();
        $_SESSION['user'] = $email;
        header("Location: index.html");
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid credentials');</script>";
    }

    $stmt->close();
}

$conn->close();
?>