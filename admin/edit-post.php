<?php 
    include'partials/header.php';

    //fetch categories
    $category_query= "select * from categories";
    $categoriess = mysqli_query($con, $category_query);

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "select * from posts where id=$id";
        $result = mysqli_query($con,$query);
        $post = mysqli_fetch_assoc($result);
    }
    else 
    {
        header('location: '.'index.php');
        die();
    }

?>


    <section class="area-form">
        <div class="form-section">
    <div class="container form-section-container">
        
        <h2>Edit Post</h2>

        <form action="edit-post-logic.php" method="POST" enctype="multipart/form-data">
            
        <input type="hidden" name="id" value="<?= $post['id']?>">
        <input type="hidden" name="previous_thumbnail_name" value="<?= $post['thumbnail']?>">

            <input type="text" name="title" value="<?= $post['title']?>" placeholder="Title">

            <select name="category" >
                <?php while($category = mysqli_fetch_assoc($categoriess)): ?>
                    <option value="<?=$category['id']?>"><?= $category['title']?></option>
                <?php endwhile?>
            </select>
           
            <textarea rows="10" name="body" placeholder="Body"> <?= $post['body']?> </textarea>

            <?php if(isset($_SESSION['user_is_admin'])): ?>
            <div style="color: azure;" class="form_control inline">    
                <label for="is-featured" > Featured</label>
                <input type="checkbox"  name="is_featured" id="is-featured" value="1" checked>         
            </div>         
            <?php endif ?>
            <div style="color:azure;"  class="form_control">
                <label for="thumbnail">Change Content thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div> 

            <button class="btn" name="submit" type="submit">Update Post</button>
           
        </form>
    </div> 
    </div>
</section>

<!-------------------footer strart----------------->
<?php 
    include'../partials/footer.php';
?>

