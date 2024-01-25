<?php 

session_start();
include'config/database.php';


if(isset($_POST['submit']))
{
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];


    //validation
    if(!$firstname)
    {
        $_SESSION['signup'] = "Please enter your Firstname";
    }
    else if(!$lastname)
    {
        $_SESSION['signup'] = "Please enter your Lastname";
    }
    else if(!$username)
    {
        $_SESSION['signup'] = "Please enter your Username";
    }
    else if(strlen($createpassword)<8 || strlen($confirmpassword)<8)
    {
        $_SESSION['signup'] = "Re-enter password.(Minimum 8 character)";
    }
    else if(!$avatar['name'])
    {
        $_SESSION['signup'] = "Please add avatar: ";
    }
    else
    {
        if($createpassword!=$confirmpassword)
        {
            $_SESSION['signup']="Password do not match!";
        }
        else
        {
            $password= $confirmpassword;
            //check for duplicate username or email
            $user_check_query = "SELECT * from users where username='$username' or email='$email'";
            $user_check_result = mysqli_query($con,$user_check_query);
            if(mysqli_num_rows($user_check_result)>0)
            {
                $_SESSION['signup']="username or email exists";
            }
            else
            {
                //work on avatar
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                //ensuring image
                $allowed_image = ['png','jpg','jpeg'];
                $extension = explode('.', $avatar_name);
                $extension = end($extension);

                if(in_array($extension,$allowed_image))
                {
                    if($avatar['size'] < 1000000)
                    {
                        //avatar upload
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else
                    {
                        $_SESSION['signup'] = "Filesize is too large should be less than 1mb.";
                    }
                }
                else
                {
                    $_SESSION['signup']= "File should be png, jpg or jpeg";
                }
            }
        }
    }
    

    if(isset($_SESSION['signup']))
    {
        $_SESSION['signup-data'] = $_POST;
        header('location:'.'signup.php');
        die();
    }
    else
    {
        $inset_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) 
                        VALUES('$firstname','$lastname', '$username', '$email', '$password', '$avatar_name',0 )";

        $inset_user_result = mysqli_query($con , $inset_user_query);


        if(!mysqli_errno($con))
        {
            $_SESSION['signup-success'] = "Registration succesfull. Please login.";
            header('location:' . 'signin.php');
            die();
        }
    }

}
else{
    header('location: '.'signup.php');
    die();
}


?>