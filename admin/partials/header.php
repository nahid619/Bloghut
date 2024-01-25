
<?php

    include'../partials/header.php';
    
    if(!isset($_SESSION['user-id']))
    {
        header('location: '.'/signin.php');
    }


?>
