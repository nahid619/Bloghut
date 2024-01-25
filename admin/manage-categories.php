<?php 

    include'partials/header.php';

    $query = "select * from categories order by title";
    $categories = mysqli_query($con,$query);

?>

    <!---------------END NAV---------------->

    <section class="admin">
        <div class="dashboard">

        <?php if(isset($_SESSION['addcategory-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['addcategory-success'];
                    unset($_SESSION['addcategory-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['addcategory'])): ?>
            <div class="alert-message error container">
                <p>
                    <?=$_SESSION['addcategory'];
                    unset($_SESSION['addcategory']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['editcategory'])): ?>
            <div class="alert-message error container">
                <p>
                    <?=$_SESSION['editcategory'];
                    unset($_SESSION['editcategory']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['editcategory-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['editcategory-success'];
                    unset($_SESSION['editcategory-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['deletecategory-success'])): ?>
            <div class="alert-message success container">
                <p>
                    <?=$_SESSION['deletecategory-success'];
                    unset($_SESSION['deletecategory-success']);
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
                    <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                        <h5>Manage Users</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php"><i class="uil uil-edit"></i>
                        <h5>Add category</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-categories.php" class="active"><i class="uil uil-list-ul"></i>
                        <h5>Manage Categories</h5>
                    </a>
                </li>
                <?php endif ?>

            </ul>
           </aside>
           <main>
            <h2>Manage Categories</h2>
            <?php if(mysqli_num_rows($categories)>0): ?>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($categories)): ?>
                    <tr>
                        <td><?= $category['title']?></td>
                        <td><a href="edit-category.php?id=<?=$category['id']?>" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php?id=<?=$category['id']?>" class="btn sm danger">Delete</a></td>
                    </tr>
                    <?php endwhile?>
                </tbody>
            </table>

            <?php else : ?>
                <div class="alert-message error"><?= "No categories added."?></div>
                <?php endif ?>
           </main> 
        </div>
        </div>
    </section>

    <!-------------------footer strart----------------->
    <?php 
    include'../partials/footer.php'
?>


    