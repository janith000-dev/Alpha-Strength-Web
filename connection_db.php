<?php
// Change these values to match your MySQL settings
$host = "localhost";        // or 127.0.0.1
$username = "root";         // default username for XAMPP
$password = "";             // default is empty for XAMPP
$database = "gym_website";  // your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
}

// Optional: success message (for testing only)
echo "✅ Connected successfully to the database.";
?>
