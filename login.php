<?php
// Database connection settings
$servername = 'localhost';
$username = '@Lifebrigder';
$password = '1234<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == '@Lifebrigder' && password_verify($password, '1234')) {
    // Login successful
    header('Location: admin-media.php');
    exit;
  } else {
    echo 'Invalid username or password';
  }
}
?><?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == '@Lifebrigder' && password_verify($password, '1234')) {
    // Login successful
    header('Location: admin-media.php');
    exit;
  } else {
    echo 'Invalid username or password';
  }
}
?';
$dbname = 'church_website';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == '@Lifebrigder' && $password == '1234') {
    // Login successful
    header('Location: admin-dashboard.html');
    exit;


