<?php 

include'partials/header.php';

if(isset($_GET['search']) && isset($_GET['submit']))
{
    $search = filter_var($_GET['search'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "select * from posts where title like '%$search%' order by date_time desc";
    $posts = mysqli_query($con,$query);
}
else{
    
    header('location:'.'blog.php');
    die();
}
?>

<?php if (mysqli_num_rows($posts) > 0): ?>
<section class="posts section_extra_margin">
    <div class="container posts_container">
    <?php while($post = mysqli_fetch_assoc($posts)) :?>
        <article class="post">
            <div class="post_thumbnail">
                <img src="./images/<?= $post['thumbnail']?>">
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
                    <a href="post.html?id=<?= $post['id']?>"><?= $post['title']?></a> 
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
<?php else :?>
    <div class="alert-message error section_extra_margin container c-title">
        <p>No posts foound for this title. </p>
    </div>
<?php endif ?>


<!------------------------end of posts--------------------->
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
