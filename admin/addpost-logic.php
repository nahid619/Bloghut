<?php 

session_start();
include'config/database.php';

if(isset($_POST['submit']))
{
    $author_id=$_SESSION['user-id'];
    $title = $_POST['title'];
    $body = filter_VAR($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $category_id = $_POST['category'];
    $is_featured = $_POST['is_featured'];
    $thumbnail = $_FILES['thumbnail'];

    //set featured to 0 if unchecked
    $is_featured = $is_featured == 1 ?: 0;

    if(!$title)
    {
        $_SESSION['addpost']="Enter post title.";
    }
    else if(!$category_id)
    {
        $_SESSION['addpost']="Select post category.";
    }
    elseif(!$body)
    {
        $_SESSION['addpost']="Enter post body.";
    }
    elseif(!$thumbnail['name'])
    {
        $_SESSION['addpost']="Choose post thumbnail.";
    }
    else
    {
        //work on thumbnail
        // rename image
        $time=time();
        $thumbnail_name = $time.$thumbnail['name'];
        $thumbnail_temp_name = $thumbnail['tmp_name'];
        $thumbnail_destination_path = '../images/'. $thumbnail_name ;

        //make sure file s image
        $allowed_files = ['png','jpg','jpeg'];
        $extension = explode('.',$thumbnail_name);
        $extension = end($extension);
        if(in_array($extension, $allowed_files))
        {
            //make suer image is not very big(3mb+)
            if($thumbnail['size'] < 3_000_000)
            {
                move_uploaded_file($thumbnail_temp_name, $thumbnail_destination_path);
            }
            else
            {
                $_SESSION['addpost'] = "Image size exceeds 3mb.";
            }
        }
        else
        {
            $_SESSION['addpost'] = "Image should be png, jpg or jpeg.";
        }

    }

    //if any problem is set go back to the add post page
    if(isset($_SESSION['addpost']))
    {
        $_SESSION['addpost-data']=$_POST;
        header('location: '. 'add-post.php');
        die();
    }
    else
    {
        //setting featured to 0 if the new one is 1
        if($is_featured==1)
        { 
            $zero_all_is_featured_query = "update posts set is_featured=0";
            $zero_all_is_featured_result = mysqli_query($con,$zero_all_is_featured_query);
        }
        //insert post into database
        $query = "insert into posts (title, body, thumbnail, category_id, author_id, is_featured) values 
            ('$title', '$body', '$thumbnail_name', '$category_id', '$author_id', '$is_featured')";

        $result = mysqli_query($con,$query);

        if(!mysqli_errno($con))
        {
            $_SESSION['addpost-success'] = "New post added successfully.";
            header('location: '.'index.php');
            die();
        }
    }

}

header('location:'.'add-post.php');
die();


?>