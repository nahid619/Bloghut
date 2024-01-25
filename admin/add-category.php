<?php 
    include'partials/header.php';

    $title = $_SESSION['addcategory-data']['title'] ?? null ;
    $description = $_SESSION['addcategory-data']['description'] ?? null ;

    unset($_SESSION['addcategory-data']);


?>

<section class="area-form">
    <div class="form-section">
    <div class="container form-section-container">
        <h2>Add Category</h2>
        <?php if(isset($_SESSION['addcategory'])): ?>
            <div class="alert-message error">
                    <?= $_SESSION['addcategory'];
                    unset($_SESSION['addcategory']); ?>
            </div>
            <?php endif ?>
        <form action="addcategory-logic.php" method="POST">
            
            <input type="text" name="title" value="<?= $title ?>" placeholder="Title">
            <textarea rows="4"  name="description" aria-valuetext="<?= $description ?>" placeholder="Description"></textarea>
            <button class="btn" name="submit" type="submit">Add Category</button>
           
        </form>
    </div>
    </div>
</section>

<!-------------------footer strart----------------->
<?php 
    include'../partials/footer.php'
?>