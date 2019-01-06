<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "network";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO messages (msg_sender, msg_reciever, msg_content)
VALUES ( '".$_SESSION['username']."', '".$_POST['recieverId']."', '".$_POST['msg']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>