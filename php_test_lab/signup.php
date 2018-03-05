<?php
session_start();

$_SESSION['theEmail'] = $_POST['theEmail'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO myusers (uemail, upass) VALUES ('" . $_POST['theEmail'] . "','" . $_POST['thePassword'] . "')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    $_SESSION['ConnError'] = $conn->error;
    echo $_SESSION['ConnError'];
}

mysqli_close($conn);

?>