<?php
$conn = new mysqli('localhost', '@Lifebrigder', '1234', 'your_db_name');
$sql = "SELECT * FROM media";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  echo '<h2>' . $row['title'] . '</h2>';
  echo '<p>' . $row['description'] . '</p>';
  echo '<a href="'"' . $row['file_path'] . '"'">Download</a>';
}
$conn->close();
?>


