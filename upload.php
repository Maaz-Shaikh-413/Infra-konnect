<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "InfraKonnect";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Directory for uploaded files
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if form was submitted and file is uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['upload_file'])) {
    $projectTitle = $_POST['project_title'];
    $itemDescription = $_POST['item_description'];
    $fileName = basename($_FILES['upload_file']['name']);
    $filePath = $uploadDir . $fileName;

    // Move uploaded file to the server directory
    if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $filePath)) {
        // Prepare SQL query to insert file metadata
        $sql = "INSERT INTO uploads (title, description, file_name, file_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssss", $projectTitle, $itemDescription, $fileName, $filePath);

        // Execute and check if the data was inserted successfully
        if ($stmt->execute()) {
            echo "File successfully uploaded and data saved.";
        } else {
            echo "Error saving data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to upload file.";
    }
}

$conn->close();
?>