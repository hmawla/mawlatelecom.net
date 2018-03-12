<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page Test</title>
</head>
<body>
    <header>
        <h1>MAWLA TELECOM</h1>
        <?php
            if(isset($_SESSION['loggedIn'])){
                echo "Logged as: " . $_SESSION['theEmailLogin'] . '<br><a href="logout-exec.php">Logout</a>';
            }
            else{
                echo '<a href="login.php">Login</a>';
            }
        ?>
    </header>
</body>
</html>