<?php 

session_start();
include'config/database.php';

//make sure edit post button was clicked
if(isset($_POST['submit']))
{
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $previous_thumbnail_name = filter_var($_POST['previous_thumbnail_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = $_POST['category'];
    $is_featured = $_POST['is_featured'];
    $thumbnail = $_FILES['thumbnail'];

   
    $is_featured = $is_featured == 1 ?: 0;

    if(!$title)
    {
        $_SESSION['editpost']="Could not update post.";
    }
    else if(!$category_id)
    {
        $_SESSION['editpost']="Could not update post.";
    }
    else if(!$body)
    {
        $_SESSION['editpost']="Could not update post.";
    }
    else
    {
        //delete old thumbnail
        if($thumbnail['name'])
        {
            $previous_thumbnail_path = '../images/'. $previous_thumbnail_name;
            if($previous_thumbnail_path)
            {
                unlink($previous_thumbnail_path);
            }

            //work on new thumbnail
            $time = time();
            $thumbnail_name = $time. $thumbnail['name'];
            $thumbnail_temp_name = $thumbnail['tmp_name'];
            $thumbnail_destination_path = '../images/'.$thumbnail_name ;

            //make sure file is image
            $allowed_files = ['png','jpg','jpeg'];
            $extension = explode('.', $thumbnail_name);
            $extension = end($extension);
            if(in_array($extension, $allowed_files))
            {
                if($thumbnail['size']<3000000)
                {
                    move_uploaded_file($thumbnail_temp_name, $thumbnail_destination_path);

                }
                else 
                {
                    $_SESSION['editpost'] = "Image is too large. should be less than 3 mb.";
                }
            }
            else 
            {
                $_SESSION['editpost'] = "thumbnail should be in png jpg or jpeg format";
            }

        }
    }

    if($_SESSION['editpost'])
    {
        header('location: '. 'index.php');
        die();
    }
    else 
    {
        if($is_featured == 1)
        {
            $zero_all_is_featured_query = "update posts set is_featured=0";
            $zero_all_is_featured_result = mysqli_query($con, $zero_all_is_featured_query);
        }

        $thumbnail_to_insert = $thumbnail_name ?? $previous_thumbnail_name;

        $query = "update posts set title='$title', body='$body', thumbnail='$thumbnail_to_insert', category_id='$category_id', is_featured='$is_featured' where id='$id' limit 1";
        $result = mysqli_query($con,$query);
    }

    if(!mysqli_errno($con))
    {
        $_SESSION['editpost-success']="Post edited successfully.";
    }


}
header('location: '.'index.php');
die();



?>