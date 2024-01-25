<?php 

    session_start();
    include'config/database.php';

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $update_query = "update posts set category_id=7 where category_id=$id";
        $update_result = mysqli_query($con,$update_query);
        
        //delete user
        $query = "delete from categories where id='$id'";
        $result = mysqli_query($con,$query);
        $_SESSION['deletecategory-success']="Category deleted succesfully.";


    }

    header('location: '.'manage-categories.php');
    die();

?>