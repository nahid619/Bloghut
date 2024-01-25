<?php 
    include'partials/header.php';


?>


    <section class="admin">
        <div class="dashboard">

        <?php if(isset($_SESSION['addpost-success'])) : ?>
        <div class="alert-message success container">
            <p>
                <?= $_SESSION['addpost-success'] ;
                    unset($_SESSION['addpost-success']);
                ?>
            </p>
        </div>
        <?php endif?>

        <?php if(isset($_SESSION['editpost-success'])) : ?>
        <div class="alert-message success container">
            <p>
                <?= $_SESSION['editpost-success'] ;
                    unset($_SESSION['editpost-success']);
                ?>
            </p>
        </div>
        <?php endif?>

        <?php if(isset($_SESSION['editpost'])) : ?>
        <div class="alert-message error container">
            <p>
                <?= $_SESSION['editpost'] ;
                    unset($_SESSION['editpost']);
                ?>
            </p>
        </div>
        <?php endif?>

        <?php if(isset($_SESSION['deletepost-success'])) : ?>
        <div class="alert-message success container">
            <p>
                <?= $_SESSION['deletepost-success'] ;
                    unset($_SESSION['deletepost-success']);
                ?>
            </p>
        </div>
        <?php endif?>

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
                    <a href="index.php" class="active"><i class="uil uil-postcard"></i>
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
                    <a href="manage-users.php" ><i class="uil uil-users-alt"></i>
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

           <main class="admin-dashboard">
            <h2>Manage Posts</h2>
            <table>
                <thead>
                    <th>Post Title</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>

                <tbody>

                <?php if(isset($_SESSION['user_is_admin'])): ?>

                        <?php                 
                                $query = "select id, title, category_id from posts order by id";
                                $posts = mysqli_query($con, $query); 
                        ?>

                            <?php while ($post= mysqli_fetch_assoc($posts)): ?>
                                    <?php 
                                        $category_id = $post['category_id'];
                                        $category_query = "select title from categories where id=$category_id";
                                        $category_result = mysqli_query($con,$category_query);
                                        $category = mysqli_fetch_assoc($category_result);
                                        
                                        ?>
                                        <tr>
                                            <td><?= $post['title']?></td>
                                            <td><?= $category['title']?></td>
                                            <td><a href="edit-post.php?id=<?= $post['id']?>" class="btn sm">Edit</a></td>
                                            <td><a href="delete-post.php?id=<?= $post['id']?>" class="btn sm danger">Delete</a></td>
                                        </tr>
                            <?php endwhile ?>
                 
                            
                    <?php else: ?>
                        <?php 
                            
                            $current_admin_id = $_SESSION['user-id'];
                            $query = "select id, title, category_id from posts where author_id='$current_admin_id' order by id";
                            $posts = mysqli_query($con, $query); 
                            ?>

                        <?php while ($post= mysqli_fetch_assoc($posts)): ?>
                            <?php 
                                $category_id = $post['category_id'];
                                $category_query = "select title from categories where id=$category_id";
                                $category_result = mysqli_query($con,$category_query);
                                $category = mysqli_fetch_assoc($category_result);
                                
                                ?>
                        <tr>
                            <td><?= $post['title']?></td>
                            <td><?= $category['title']?></td>
                            <td><a href="edit-post.php?id=<?= $post['id']?>" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php?id=<?= $post['id']?>" class="btn sm danger">Delete</a></td>
                        </tr>
                        <?php endwhile ?>
                    

                    <?php endif ?>

                </tbody>
            </table>
           </main> 
        </div>
        </div>
    </section>

    <!-------------------footer strart----------------->
<?php 
    include'../partials/footer.php';
?>


