<?php
$servername = 'localhost';
$username = '@Lifebridger';
$password = '1234';
$dbname = 'your_db_name'; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Create table
$sql = "CREATE TABLE media (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  file_type VARCHAR(50),
  file_name VARCHAR(255),
  file_path VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
  echo 'Table created successfully';
} else {
  echo 'Error creating table: ' . $conn->error;
}

$conn->close();
?>


