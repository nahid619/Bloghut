<?php 
    include'partials/header.php';

    //fetch post from database
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "select * from posts where id=$id";
        $result = mysqli_query($con,$query);
        $post = mysqli_fetch_assoc($result);
    }
    else
    {
        header('location:'.'blog.php');
        die();
    }



?>
    <!---------------END NAV---------------->

    <section class="singlepost">
        <div class="container singlepost_container">
                <h2 class="post_title">
                    <?= $post['title']?>
                </h2>
                
                <div class="post_author">

                <?php
                        $author_id = $post['author_id'];
                        $author_query = "select * from users where id=$author_id";
                        $author_result = mysqli_query($con,$author_query);
                        $author = mysqli_fetch_assoc($author_result);
                    ?>

                    <div class="post_author-avatar">
                            <img src="./images/<?= $author['avatar']?>">
                    </div>
                    <div class="post_author-info">
                        <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                        <small>
                            <?= date("M d, Y - H:i", strtotime($post['date_time']))?>
                        </small>
                    </div>
                </div>
                <div class="singlepost_thumbnail">
                    <img src="images/<?= $post['thumbnail']?>">
                </div>
                <p>
                    <?= $post['body']?>
                </p>

            </div>
     
    </section>
<!--------------------end of single post--------------------------------->


<!-------------------footer strart----------------->
<?php 
    include'./partials/footer.php'
?>
