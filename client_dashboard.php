<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "InfraKonnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT title, description, file_name, file_path, upload_date FROM uploads";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .col-12 {
            width: 100%;
        }

        .tp-fea-ads-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            margin-bottom: 15px;
        }

        .tp-fea-ads-thumb-box {
            flex: 1;
            position: relative;
        }

        .tp-fea-ads-thumb img {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 150px; /* Limit image height */
        }

        .tp-fea-ads-2-content {
            flex: 2;
            padding: 15px;
        }

        .tp-fea-ads-2-meta {
            color: #888;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .tp-fea-ads-2-title {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .tp-fea-ads-2-title a {
            text-decoration: none;
            color: #333;
        }

        .tp-fea-ads-text p {
            font-size: 14px;
            color: #555;
        }

        .tp-fea-ads-2-price-box {
            margin-top: 10px;
        }

        .tp-fea-ads-2-price a {
            color: #007bff;
            text-decoration: none;
        }

        .tp-fea-ads-2-price a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Client Dashboard</h1>
    <div class="container">
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-12">';
                    echo '<div class="tp-fea-ads-item">';
                    echo '<div class="tp-fea-ads-thumb-box">';
                    echo '<div class="tp-fea-ads-thumb">';
                    // You might want to use a placeholder image if file_path is not an image
                    echo '<img src="' . htmlspecialchars($row['file_path']) . '" alt="">';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="tp-fea-ads-2-content">';
                    echo '<div class="tp-fea-ads-2-meta">';
                    echo '<span>' . date("F j, Y", strtotime($row['upload_date'])) . '</span>'; // Format date as needed
                    echo '</div>';
                    echo '<h4 class="tp-fea-ads-2-title"><a href="listing-details-1.html">' . htmlspecialchars($row['title']) . '</a></h4>';
                    echo '<div class="tp-fea-ads-text">';
                    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                    echo '</div>';
                    echo '<div class="tp-fea-ads-2-price-box">';
                    echo '<div class="tp-fea-ads-2-price">';
                    echo '<a href="' . htmlspecialchars($row['file_path']) . '" download="' . htmlspecialchars($row['file_name']) . '">Download Document</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No ads found.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
