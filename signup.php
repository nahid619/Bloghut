
<?php

session_start();

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null ;
$username = $_SESSION['signup-data']['username'] ?? null ;
$email = $_SESSION['signup-data']['email'] ?? null ;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null ;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null ;

unset($_SESSION['signup-data']);

?>

<!DOCTYPE html>
<html>
    <head>

    <title>BLOGHUT | sign up</title>
        <link rel="stylesheet" href="./css/style.css">
        <!--Icons-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!--Google Fonts-->
        <link rel="stylesheet" href="./css/font.css">      

</head>

<body>

    <section class="area-form">
        <div class="form-section">
        <div class="container form-section-container">
            <h2>Sign UP</h2>

            <?php if(isset($_SESSION['signup'])) :?>
            <div class="alert-message error">
                <p>
                    <?= $_SESSION['signup'] ;
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
            <?php endif?>

            <form method="POST" action="signuplogic.php" enctype="multipart/form-data">

                <input type="text" name="firstname" value="<?= $firstname?>" placeholder="First Name">
                <input type="text" name="lastname" value="<?= $lastname?>" placeholder="Last Name">
                <input type="text" name="username" value="<?= $username?>" placeholder="UserName">
                <input type="email" name="email" value="<?= $email?>" placeholder="Email">
                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Enter Password">
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Conferm Password">
                <div class="form_control">
                    <label for="avatar">User avatar</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button class="btn" name="submit" type="submit">Sign Up</button>
                <small> Already have an account? <a style="color:greenyellow; font-size: 1rem;" href="signin.php">Sign in</a></small>
            </form>
        </div>
        </div>
    </section>




</body>
</html>




