<?php
session_start();
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
    $entity = $_POST['entity'];

    // SQL query to check credentials
    $sql = "SELECT * FROM users WHERE email = ? AND password = ? AND entity = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $password, $entity);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Credentials are valid
        $_SESSION['user'] = $email;
        if ($entity == 'client') {
            header("Location: dashboard.php");
        } else if ($entity == 'organization') {
            header("Location: organisation_dashboard.php");
        }
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid credentials');</script>";
    }

    $stmt->close();
}

$conn->close();
?>