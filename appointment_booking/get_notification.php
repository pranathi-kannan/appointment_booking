<?php
session_start(); // Start the session (if not already started)

// Check if the student is logged in
if (!isset($_SESSION['username'])) {
    http_response_code(403); // Unauthorized
    die();
}

// Connect to the database
$connection = mysqli_connect("localhost", "root", "", "appointment_booking");

if (!$connection) {
    http_response_code(500); // Internal Server Error
    die("Database connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

// Fetch unread notifications for the student
$sql = "SELECT * FROM notifications WHERE username = '$username' AND status = 'unread' ORDER BY created_at DESC";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $username);
$stmt->execute();
$result = $stmt->get_result();

$notifications = [];
while ($row = $result->fetch_assoc()) {
    $notifications[] = $row;
}

// Update the status of fetched notifications to 'read'
$sql = "UPDATE notifications SET status = 'read' WHERE username = 'username'";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $username);
$stmt->execute();

// Close the database connection
mysqli_close($connection);

// Return notifications as JSON
header('Content-Type: application/json');
echo json_encode($notifications);
?>
