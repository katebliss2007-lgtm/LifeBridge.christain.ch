<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $file = $_FILES['file'];

  // Validate file type
  $allowed_types = array('image/jpeg', 'image/png', 'video/mp4', 'audio/mpeg');
  if (!in_array($file['type'], $allowed_types)) {
    echo 'Invalid file type';
    exit;
  }

  // Move uploaded file to a secure location
  $upload_dir = 'uploads/';
  $file_name = basename($file['name']);
  $file_path = $upload_dir . $file_name;
  move_uploaded_file($file['tmp_name'], $file_path);

  // Store metadata in database
  $conn = new mysqli('localhost', 'your_db_username', 'your_db_password', 'your_db_name');
  $sql = "INSERT INTO media (title, description, file_type, file_name, file_path) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('sssss', $title, $description, $file['type'], $file_name, $file_path);
  $stmt->execute();
  $stmt->close();
  $conn->close();

  echo 'File uploaded successfully!';
}
?>


