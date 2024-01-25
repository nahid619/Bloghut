<?php 

session_start();
include'config/database.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query = "select * from users where id='$id'";
    $result = mysqli_query($con,$query);
    $user = mysqli_fetch_assoc($result);

    //making sure of only 1 user
    if(mysqli_num_rows($result)==1)
    {
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/'. $avatar_name;

        //delete image if available
        if($avatar_path)
        {
            unlink($avatar_path);
        }
    }

    //delete thumbnails of users post 
    $thumbnail_query = "select thumbnail from posts where author_id=$id";
    $thumbnail_result = mysqli_query($con,$thumbnail_query);
    if(mysqli_num_rows($thumbnail_result) > 0)
    {
        while($thumbnail = mysqli_fetch_assoc($thumbnail_result))
        {
            $thumbnail_path = '../images/'. $thumbnail['thumbnail'];

            if($thumbnail_path)
            {
                unlink($thumbnail_path);
            }
        }
    }




    //delete user
    $delete_user_query = "delete from users where id='$id'";
    $delete_user_result = mysqli_query($con,$delete_user_query);

    if(mysqli_errno($con))
    {
        $_SESSION['delete-user']="could not delete '{$user['firstname']} {$user['lastname']}'";
    }
    else
    {
        $_SESSION['deleteuser-success']="'{$user['firstname']} {$user['lastname']}' successfully deleted";
    }

}

header('location: '.'manage-users.php');
die();


?>