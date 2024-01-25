<?php 
session_start();

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$upassword = $_SESSION['signin-data']['upassword'] ?? null;

unset($_SESSION['signin-data']);


?>



<!DOCTYPE html>
<html>
    <head>

    <title>BLOGHUT | Sign in</title>
        <link rel="stylesheet" href="./css/style.css">
        <!--Icons-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!--Google Fonts-->
        <link rel="stylesheet" href="./css/font.css">      

</head>
<body>


<section class="area-form">
        <div class="form-section">
    <div style="margin-top:0% ;" class="container form-section-container">
        <h2>Sign In</h2>

        <?php  if(isset($_SESSION['signup-success'])): ?>
            <div class="alert-message success">
                <p>
                    <?=$_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
        <?php elseif(isset($_SESSION['signin'])): ?>
            <div class="alert-message error">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div> 
        <?php endif ?>


        <form  method="POST" action="signin-logic.php">
            
            <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="UserName or Email">
            <input type="password" name="upassword" value="<?= $upassword ?>" placeholder="Enter Password">
            <button class="btn" name="submit" type="submit">Sign In</button>
            <small style="color:azure; margin-top: 1rem; display: block;"> Don't have an account? <a style="color:greenyellow; font-size: 1rem;" href="signup.php">Sign up</a></small>
        </form>
    </div>
    </div>
</section>
</body>
</html>