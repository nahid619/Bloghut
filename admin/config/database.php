
<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','blog');

//connecting to database
$con= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_errno($con))
{
    die(mysqli_error($con));
}


?>