<?php 

    include'partials/header.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "select * from users where id='$id'";
        $result = mysqli_query($con, $query);
        $user = mysqli_fetch_assoc($result);
    }
    else
    {
        header('location: '. 'manage-users.php');
        die();
    }


?>

    <section class="area-form">
        <div class="form-section">
    <div class="container form-section-container">
        <h2>Edit User</h2>

        <form method="POST" action="edituserlogic.php">
            <input type="hidden" value="<?= $user['id']?>" name="id">
            <input type="text" value="<?= $user['firstname']?>" name="firstname" placeholder="First Name">
            <input type="text" value="<?= $user['lastname']?>" name="lastname" placeholder="Last Name">
            
            <select name="userrole" >
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
                       
            <button class="btn" name="submit" type="submit">Update User</button>
        </form>
    </div>
    </div>
</section>

<!-------------------footer strart----------------->

<?php 
    include'../partials/footer.php'
?>
