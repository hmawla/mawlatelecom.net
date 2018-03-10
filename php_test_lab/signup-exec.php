<?php
include 'encryptor.php';
include 'checksignupdata.php';
include 'connection.php';

session_start();

$_SESSION['theEmail'] = $_POST['theEmail'];
$theEmail = doEncrypt($_POST['theEmail']);
$thePassword = doEncrypt($_POST['thePassword']);
$thePhone = doEncrypt($_POST['thePhone']);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!checkData($theEmail,$thePhone)){
   header('location:signup.php');
}
else{
    $sql = "INSERT INTO myusers (uemail, upass, uphone) VALUES ('" . $theEmail . "','" . $thePassword . "','" . $thePhone ."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        $_SESSION['ConnError'] = mysqli_error($conn);;
        echo $_SESSION['ConnError'];
    }
}

mysqli_close($conn);

?>