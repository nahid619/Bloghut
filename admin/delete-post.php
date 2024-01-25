<?php 

session_start();
include'config/database.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query = "select * from posts where id='$id'";
    $result = mysqli_query($con,$query);

    //making sure of only 1 user
    if(mysqli_num_rows($result)==1)
    {
        $post=mysqli_fetch_assoc($result);
        $thumbnail_name = $post['thumbnail'];
        $thumbnail_path = '../images/'. $thumbnail_name;

        //delete image if available
        if($thumbnail_path)
        {
            unlink($thumbnail_path);

            //delete post form datbase
            $delete_post_query = "delete from posts where id=$id limit 1";
            $delete_post_result = mysqli_query($con,$delete_post_query);

            if(!mysqli_errno($con))
            {
                $_SESSION['deletepost-success'] = "Post deleted successfully";
            }

        }
    }

}

header('location: '.'index.php');
die();


?>