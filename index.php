<?php 
    include'partials/header.php';

    //fetch featured
    $featured_query = "select * from posts where is_featured=1";
    $featured_result = mysqli_query($con,$featured_query);
    $featured = mysqli_fetch_assoc($featured_result);

    //fetch posts
    $query = "select * from posts order by date_time desc limit 9";
    $posts = mysqli_query($con,$query);
?>

<?php if(mysqli_num_rows($featured_result) == 1) :?>
    <section class="featured">
        <div class="container featured_container">   
            <div class="post_thumbnail">
            <a href="post.php?id=<?= $featured['id']?>">
            <img src="./images/<?= $featured['thumbnail']?>"></a>
            </div>
            <div class="post_info">
                <?php 
                    $category_id = $featured['category_id'];
                    $category_query = "select * from categories where id=$category_id";
                    $category_result = mysqli_query($con,$category_query);
                    $category = mysqli_fetch_assoc($category_result);

                ?>
                <a href="category-posts.php?id=<?= $featured['category_id']?>" class="category_button"><?=  $category['title']?></a>
                <h2 class="post_title">
                    <a href="post.php?id=<?= $featured['id']?>"><?= $featured['title']?></a>
                </h2>
                <p class="post_body">
                    <?= substr($featured['body'],0,300 )?>......
                </p>
                <div class="post_author">
                    <?php
                        $author_id = $featured['author_id'];
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
                            <?= date("M d, Y - H:i", strtotime($featured['date_time']))?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<!-------------------------End Of Featured----------------->

<section class="posts <?= $featured ? '':'section_extra_margin'?>">
    <div class="container posts_container">
    <?php while($post = mysqli_fetch_assoc($posts)) :?>
        <article class="post">
            <div class="post_thumbnail">
            <a href="post.php?id=<?= $post['id']?>"><img src="./images/<?= $post['thumbnail']?>"></a>
            </div>
            <div class="post_info">
            <?php 
                    $category_id = $post['category_id'];
                    $category_query = "select * from categories where id=$category_id";
                    $category_result = mysqli_query($con,$category_query);
                    $category = mysqli_fetch_assoc($category_result);
                ?>
                <a href="category-posts.php?id=<?= $post['category_id']?>" class="category_button">
                    <?= $category['title']?></a>

                <h3 class="post_title">
                    <a href="post.php?id=<?= $post['id']?>"><?= $post['title']?></a> 
                </h3>
                <p class="post_body">
                    <?= substr($post['body'],0,200 )?>......
                </p>
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
            </div>
        </article>
        <?php endwhile ?>
    </div>
</section>

<!------------------------end of posts--------------------->

<!------------------category start------------------>

<section class="category_buttons">
    <div class="container category_buttons-container">
        <?php 
            $all_categories_query = "select * from categories";
            $all_categories = mysqli_query($con,$all_categories_query);
        ?>
        <?php while ($category = mysqli_fetch_assoc($all_categories)):  ?>
            <a href="category-posts.php?id=<?= $category['id']?>" class="category_button"><?= $category['title']?></a>
        <?php endwhile ?>
    </div>
</section>

<!------------------category end------------------>
<?php 
    include'partials/footer.php';
?>
