<?php 

session_start();
include'config/database.php';

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];

    if(!$title)
    {
        $_SESSION['addcategory']= "Enter Title";
    }
    elseif(!$description)
    {
        $_SESSION['addcategory']= "Enter description";
    }


    if(isset($_SESSION['addcategory']))
    {
        $_SESSION['addcategory-data']= $_POST;
        header('location: '.'add-category.php');
        die();
    }
    else 
    {
        $query = "insert into categories (title,description) values ('$title','$description')";
        $result = mysqli_query($con,$query);
        if(mysqli_errno($con))
        {
            $_SESSION['addcategory'] = "Could not add category";
            header('location: '.'add-category.php');
            die();
        }
        else
        {
            $_SESSION['addcategory-success'] = "category $title added Successfully.";
            header('location:'.'manage-categories.php');
            die();
        }
    }

}



?>