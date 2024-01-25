<?php 

session_start();
include'config/database.php';

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $title = filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$title || !$description)
    {
        $_SESSION['editcategory'] = "Invalid form input on edit category page. ";
    }
    else
    {
        $query = "update categories set title='$title', description='$description' where id='$id' limit 1";
        $result = mysqli_query($con, $query);

        if(mysqli_errno($con))
        {
            $_SESSION['editcategory'] = "Failed to update category.";
        }
        else
        {
            $_SESSION['editcategory-success']="Category $title updated Successfully.";
        }

    }
}

header('location:'.'manage-categories.php');
die();


?>