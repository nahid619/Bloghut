<?php 

session_start();
include'config/database.php';

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = $_POST['userrole'];
    
    if(!$firstname || !$lastname)
    {
        $_SESSION['edituser'] = "Invalid form input on edit page. ";
    }
    else
    {
        $query = "update users set firstname='$firstname', lastname='$lastname', is_admin='$is_admin' where id='$id' limit 1";
        $result = mysqli_query($con, $query);

        if(mysqli_errno($con))
        {
            $_SESSION['edituser'] = "Failed to update user.";
        }
        else
        {
            $_SESSION['edituser-success']="User $firstname $lastname updated Successfully.";
        }

    }
}

header('location:'.'manage-users.php');
die();


?>