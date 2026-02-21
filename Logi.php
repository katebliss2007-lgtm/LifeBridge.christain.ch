<?php
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
?>


