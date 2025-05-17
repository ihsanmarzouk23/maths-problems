<?php
  // Define variables
  $username = "your_username";
  $password = "your_password";

  // Connect to database
  $conn = new mysqli("localhost", $username, $password, "maths_problems_db");
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Example SQL query (you can modify this based on your needs)
  $sql = "SELECT * FROM students WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);

  if ($stmt->execute()) {
    echo "User found";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
?>
