
<?php 
    session_start();
    include'./config/database.php';

    //fetch current user from database
    if(isset($_SESSION['user-id']))
    {
        $id = $_SESSION['user-id'];
            $query = "SELECT * FROM users WHERE id= '$id'";
            $result = mysqli_query($con, $query);
            $user_avatar = mysqli_fetch_assoc($result);
            $avatar = $user_avatar['avatar'];

    }

?>

<!DOCTYPE html>
<html>
    <head>
    <title>BLOGHUT</title>
        <link rel="stylesheet" href="../css/style.css">
        <!--Icons-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!--Google Fonts-->
        <link  rel="stylesheet" href="../css/font.css">              
</head>

<body>   
    <nav>
        <div class="container nav_container">
            <a href="/index.php" class="nav_logo">BLOGHUT</a>
            <ul class="nav_items">
                <li><a href="/blog.php">Blog</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/services.php">Services</a></li>
                <li><a href="/contact.php">Contact</a></li>
                
                <?php if(isset($_SESSION['user-id'])): ?>

                <li class="nav_profile">
                    <div class="avatar">
                        <img src="<?='/images/'.$avatar ?> ">
                    </div>
                    <ul class="account-menu">
                        <li><a href="../admin/index.php" class="activeuser">DashBoard</a></li>
                        <li><a href="/logout.php">Logout</a></li>
                    </ul> 
                </li>

                <?php else :?>
                <li><a href="signin.php">Sigin</a></li>
                
                <?php endif ?>

            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
</body>
</html>
    <!---------------END NAV---------------->