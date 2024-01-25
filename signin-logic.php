<?php
session_start();
include'config/database.php';


if(isset($_POST['submit']))
{
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $upassword = filter_var($_POST['upassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$username_email)
    {
        $_SESSION['signin'] = "Username or Email needed";
    }
    else if (!$upassword)
    {
        $_SESSION['signin'] = "Fill up password";
    }
    else
    {
        $fetch_user_query = "select * from users where username='$username_email' or email='$username_email'";
        $fetch_user_result = mysqli_query($con, $fetch_user_query);

        if(mysqli_num_rows($fetch_user_result) == 1)
        { 
            //convert record into array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];

            //comapre password with saved password
            if($upassword == $db_password)
            {
                // set session for access controll
                $_SESSION['user-id'] = $user_record['id'];

                

                // set session for user if admin
                if($user_record['is_admin'] == 1)
                {
                    $_SESSION['user_is_admin'] = true ;
                    $_SESSION['super_admin'] = $user_record['id'];
                }

                //log in user
                header('location:' . './admin/index.php');

            }
            else
            {
                $_SESSION['signin'] = "Check your inputs";
            }
        }
        else
        {
            $_SESSION['signin'] = "User Not found";
        }
    }
     // if any problem, redirect to signin page
     if (isset($_SESSION['signin']))
    {
          $_SESSION['signin-data'] = $_POST;
          header('location: '.'signin.php');
          die();
    }
    
}
else
{
    header('location: ' . 'signin.php');
    die();
}


?>