<?php 
    
    include'partials/header.php';

    $firstname = $_SESSION['adduserdata']['firstname'] ?? null;
    $lastname = $_SESSION['adduserdata']['lastname'] ?? null ;
    $username = $_SESSION['adduserdata']['username'] ?? null ;
    $email = $_SESSION['adduserdata']['email'] ?? null ;
    $createpassword = $_SESSION['adduserdata']['createpassword'] ?? null ;
    $confirmpassword = $_SESSION['adduserdata']['confirmpassword'] ?? null ;

    unset($_SESSION['adduserdata']);



?>


    <section class="area-form">
        <div class="form-section">
    <div class="container form-section-container">
        <h2>Add User</h2>

        <?php if(isset($_SESSION['adduser'])) : ?>
        <div class="alert-message error">
            <p>
                <?= $_SESSION['adduser'] ;
                    unset($_SESSION['adduser']);
                ?>
            </p>
        </div>
        <?php endif?>

        <form action="adduserlogic.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name="username" value="<?= $username ?>" placeholder="UserName">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Enter Password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
            <select name="userrole" >
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div style="color:azure;"  class="form_control">
                <label for="avatar">Upload User Photo</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button class="btn" name="submit" type="submit">Add User</button>
        </form>
    </div>
        </div>
</section>

<!-------------------footer strart----------------->

<?php 
    include'../partials/footer.php'
?>