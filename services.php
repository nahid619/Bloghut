<?php 
    include'./partials/header.php';
?>
   
   
   <style>

.wrapper{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.background-container{
    width: 100%;
    min-height: 100vh;
    display: flex; 
}
.bg-2{
    flex: 1;
    background-color: #1abc9c;;
}
.bg-1{
    flex: 1;
    background-color: #5854c7;
}
.about-container{
    width: 90%;
    min-height: 90vh;
    position: absolute;
    background-color: white;
    box-shadow: 24px 24px 30px #6d8dad;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    border-radius: 5px;
}
.image-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.image-container img {
    width: 500px;
    height: 500px;
    margin: 20px;
    border-radius: 10px;
}
.text-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    font-size: 16px;
}
.text-container h1{
    font-size: 60px;
    padding: 20px 0px;
}
.text-container a{
    text-decoration: none;
    padding: 12px;
    margin: 50px 0px;
    background-color: rebeccapurple;
    border: 2px solid transparent;
    color: white;
    border-radius: 5px;
    transition: .3s all ease;
}
.text-container a:hover{
    background-color: #0c0c43;
    color: white;
    border: 2px solid rebeccapurple;
}

@media screen and (max-width: 1400px){
    .about-container
    {
        width: 90%;
        margin-top: 3rem;
    }
    .image-container img{
        width: 400px;
        height: 400px;
    }
    .text-container h1
    {
        font-size: 50px;
    }
}

@media screen and (max-width: 1024px){
    .about-container{
        flex-direction: column;
        margin-top: 3rem;
    }
    .image-container img{
        width: 300px;
        height: 300px;
    }
    .text-container {
        align-items: center;
    }
}
   </style>
   <!---------------END NAV---------------->

   <section>
    <div class="container wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>
    
        </div>

        <div class="about-container">
            
            <div class="image-container">
                <img src="images/service.jpg" alt="">
                
            </div>

            <div class="text-container">
                <h1>Services</h1>
                <p> BLOGHUT enables the users to create innovative and attractive post with a suitable thumbnail.
                    <br> We ensure that no vulger content is being added to the website browser. We have the power to remove any blog as well as the writter of the blog.</p>
                <a href="contact.php" class="btn">Send us your request</a>
            </div>
            
        </div>
    </div>
</section>

<!-------------------footer strart----------------->
<?php 
    include'./partials/footer.php';
?>