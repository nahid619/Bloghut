<?php 
    include'partials/header.php';

    //fetch catgeories
    $query = "select * from categories";
    $categories = mysqli_query($con,$query);

    $title = $_SESSION['addpost-data']['title'] ?? null;
    $body = $_SESSION['addpost-data']['body'] ?? null ;

    unset($_SESSION['addpost-data']);

?>

    <section class="area-form">
        <div class="form-section">
    <div class="container form-section-container">
        
        <h2>Add Post</h2>

        <?php if(isset($_SESSION['addpost'])) : ?>
        <div class="alert-message error container">
            <p>
                <?= $_SESSION['addpost'] ;
                    unset($_SESSION['addpost']);
                ?>
            </p>
        </div>
        <?php endif?>

        <form action="addpost-logic.php" method="POST" enctype="multipart/form-data">
            
            <input type="text" name="title" value="<?= $title?>" placeholder="Title">

            <select name="category" >
                <?php while($category = mysqli_fetch_assoc($categories)): ?>
                    <option value="<?=$category['id']?>"><?= $category['title']?></option>
                <?php endwhile?>
            </select>
           
            <textarea rows="10" name="body" placeholder="Body"><?= $body?></textarea>

            <?php if(isset($_SESSION['user_is_admin'])): ?>
                <div style="color: azure;" class="form_control inline">    
                    <label for="is-featured" > Featured</label>
                    <input type="checkbox" name="is_featured" value="1" id="is_featured" checked>         
                </div>        
            <?php endif ?>

            <div style="color:azure;"  class="form_control">
                <label for="thumbnail">Upload Content thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>

            <button class="btn" name="submit" type="submit">Add Post</button>
           
        </form>
    </div>
    </div>
</section>

<!-------------------footer strart----------------->
<?php 
    include'../partials/footer.php'
?>

