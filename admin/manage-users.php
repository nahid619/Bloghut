<?php 

    include'partials/header.php';

    //fetch all the users
    $current_admin_id = $_SESSION['user-id'];
    $query = "select * from users where not id='$current_admin_id'";
    $users = mysqli_query($con, $query);


     
?>

    <!---------------END NAV---------------->


    <section class="admin">
        <div class="dashboard ">

        <?php if(isset($_SESSION['adduser-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['adduser-success'];
                    unset($_SESSION['adduser-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['edituser-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['edituser-success'];
                    unset($_SESSION['edituser-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['deleteuser-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['deleteuser-success'];
                    unset($_SESSION['deleteuser-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['delete-user'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['delete-user'];
                    unset($_SESSION['delete-user']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <div class="container dashboard-container">

        
            <button id="show-sidebar-btn" class="sidebar-toggle">
                <i class="uil uil-angle-right-b"></i>
            </button>
            <button id="hide-sidebar-btn" class="sidebar-toggle">
                <i class="uil uil-angle-left-b"></i>
            </button>
           
           <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php"><i class="uil uil-postcard"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>

                <?php if(isset($_SESSION['user_is_admin'])): ?>
                <li>
                    <a href="add-user.php"><i class="uil uil-user-plus"></i>
                        <h5>Add User</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                        <h5>Manage Users</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php"><i class="uil uil-edit"></i>
                        <h5>Add category</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-categories.php" ><i class="uil uil-list-ul"></i>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
                <?php endif ?>

            </ul> 
           </aside>

           <main>
            <h2>Manage Users</h2>
            <?php if(mysqli_num_rows($users)>0): ?>
            <table>
                <thead>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Admin</th>
                </thead>
                <tbody>
                    <?php while($user = mysqli_fetch_assoc($users)): ?>
                    <tr>
                        <td><?= "{$user['firstname']}{$user['lastname']}" ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><a href="edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php?id=<?= $user['id'] ?>" class="btn sm danger">Delete</a></td>
                        <td><?= $user['is_admin']? 'YES':'NO' ?></td>
                    </tr>
                    <?php endwhile ?>

                </tbody>
            </table>
            <?php else : ?>
                <div class="alert-message error"><?= "No users found."?></div>
                <?php endif ?>
           </main> 
        </div>
        </div>
    </section>

    <!-------------------footer strart----------------->
    <?php 
    include'../partials/footer.php'
?>

