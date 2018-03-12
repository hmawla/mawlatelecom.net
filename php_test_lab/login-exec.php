<?php
    include 'encryptor.php';
    include 'checklogindata.php';
    include 'connection.php';
    session_start();

    $theEmail = $_POST['theEmailLogin'];
    $thePass = doEncrypt($_POST['thePassLogin']);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if(checkData(doEncrypt($theEmail),$thePass)){
        
        $_SESSION['theEmailLogin'] = $theEmail;
        $_SESSION['theNameLoggedIn'] = doDecrypt($_SESSION['theNameLoggedIn']);
        header('location:index.php');
    }
    else{
        echo "Invalid login";
    }

    mysqli_close($conn);
?>