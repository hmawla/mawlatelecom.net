<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>

</head>
<body>
    <form action="signup.php" method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="theEmail" id="theEmail" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="thePassword" id="thePassword" required></td>
            </tr>
            <tr>
                <td>Repeat Password:</td>
                <td><input type="password" name="repPass" id="repPass" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="reset">Reset</button>
                    <button type="submit">Go</button>
                </td>
            </tr>
        </table>
        
        
    </form>
    <form action="php_test.php" method="post">
        <input type="text" name="theNameN" value="<?php if(isset($_SESSION['theName'])) echo $_SESSION['theName']; ?>">
        <input type="text" name="theAgeN" value="<?php if(isset($_SESSION['theAge'])) echo $_SESSION['theAge']; ?>">

        <input type="submit" value="GO">
    </form>
    <?php
        if(isset($_SESSION['ConnError'])){
            echo '<script>alert("' . $_SESSION['ConnError'] . '");</script>';
            unset($_SESSION['ConnError']);
            unset($_SESSION['theName']);
            unset($_SESSION['theAge']);
            
        }
        else{
            if(isset($_SESSION['theName']) || isset($_SESSION['theAge'])){
                echo '<script>alert(" Welcome: ' . $_SESSION['theName'] . ' \n Your age: ' . $_SESSION['theAge'] . '");</script>';
                unset($_SESSION['theName']);
                unset($_SESSION['theAge']);
            }
        }
        
            
    ?>
</body>
</html>