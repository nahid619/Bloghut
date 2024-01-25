<?php 
    include'partials/header.php';

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "select * from categories where id='$id'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1)
        {
            $category=mysqli_fetch_assoc($result);
        }
    }
    else
    {
        header('location: '. 'manage-categories.php');
        die();
    }


?>

<section class="area-form">
    <div class="form-section">
    <div class="container form-section-container">
        <h2>Edit Category</h2>
        <form action="editcategorylogic.php" method="POST" >
           <input type="hidden" value="<?= $category['id']?>" name="id">
            <input type="text" name="title" value="<?= $category['title']?>" placeholder="Title">
            <textarea rows="4" name="description" placeholder="Description"><?= $category['description']?> </textarea>
            <button class="btn" name="submit" type="submit">Update</button>
           
        </form> 
    </div>
    </div>
</section>

<!-------------------footer strart----------------->
<?php 
    include'../partials/footer.php'
?>

