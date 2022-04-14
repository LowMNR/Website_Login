<?php
require_once ('config.php');

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="./sito2.0/public/css/form.css">    
    <title>Sign in</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">

    <div class="form">
        <h1 class="heading">login</h1>
        <label for="inputUsername" class="sr-only"></label>
        <input name="Username" type="username" placeholder="Username" id="inputUsername" autocomplete="off" class="username" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <input name="Password" type="password" id="inputPassword" placeholder="Password"  autocomplete="off" class="password" required>
        <button name="Submit" value="Login" class="submit-btn" type="submit">log in</button>

    </div>

    <script src="/sito2.0/public/js/form.js"></script>

        <?php

        if(isset($_POST['Submit'])){

            $result = password_verify($_POST['Password'], $Password);

            if( ($_POST['Username'] == $Username) && ($result === true)) {

                $_SESSION['Username'] = $Username;

                $_SESSION['Active'] = true;
                header("location:index.php");
                exit;

            } else {
                if(isset($_POST['Submit'])){

                    $result1 = password_verify($_POST['Password'], $Password1);
        
                    if( ($_POST['Username'] == $Username1) && ($result1 === true)) {
        
                        $_SESSION['Username'] = $Username1;
        
                        $_SESSION['Active'] = true;
                        header("location:index.php");
                        exit;
        
                    } else {
                        if(isset($_POST['Submit'])){

                            $result2 = password_verify($_POST['Password'], $Password2);
                
                            if( ($_POST['Username'] == $Username2) && ($result2 === true)) {
                
                                $_SESSION['Username'] = $Username2;
                
                                $_SESSION['Active'] = true;
                                header("location:index.php");
                                exit;
                
                            } else {
                                ?>
                                &nbsp;
                                <link rel="stylesheet" type="text/css" href="css/alert.css">
                                <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        Username e/o Password errati!
                                </div>
                                <script src="js/alert.js"></script>
                                <?php
                            }
                        }
                    }
                }
                ?>
                &nbsp;
                
                <?php
            }
        }
        ?>

        

    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
