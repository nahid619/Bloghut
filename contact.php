
<?php 
    include'./partials/header.php';
?>
   <link rel="stylesheet" href="./contact.css">
    <!---------------END NAV---------------->

  <div class="ct-container">     
    <span class="big-circle"></span>
      <img src="./images/contact/shape.png" class="square" alt="">
        
      <div class="form">

          <div class="contact-form">

            <form action="index.html" autocomplete="off">
              <h3 class="title">Contact us</h3>

              <div class="input-container">
                <input type="text" placeholder="Enter your Username.." name="name" class="input" />
                <span>Username</span>
              </div>

              <div class="input-container">
                <input type="email" placeholder="Enter your Email.." name="email" class="input" />
                <span>Email</span>
              </div>

              <div class="input-container">
                <input type="tel" placeholder="Enter your Phone.." name="phone" class="input" />       
                <span>Phone</span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" placeholder="Type your Message.." class="input"></textarea>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
            
          </div>


          <div class="contact-info">
            <span class="circle one"></span>
            <span class="circle two"></span>
            
            <h2 class="title">Let's get in touch</h2>
            <p class="text">
              <h3>Hi, This is Nahid hasan and Team</h3><br>
              You can add your travel experience and also read other users vlog. 
              Send us your Thoughts to improve.
            </p><br>
  
            <div class="info">
              <div class="information">
                <img src="./images/contact/location.png" class="icon" alt="" />
                <p>Paba ,Rajshahi, Darusha-6210</p>
              </div>
              <div class="information">
                <img src="./images/contact/email.png" class="icon" alt="" />
                <p>nahidhasan00619@gmail.com</p>
              </div>
              <div class="information">
                <img src="./images/contact/phone.png" class="icon" alt="" />
                <p>01756867148</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <ul class="social-icons">
                <li><a href="#"> <img src="./images/contact/fb.png"></a></li>
                <li><a href="#"> <img src="./images/contact/insta.png"></a></li>
                <li><a href="#"> <img src="./images/contact/li.png"></a></li>
                <li><a href="#"> <img src="./images/contact/twitter.png"></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>

<!-------------------footer strart----------------->
<?php 
    include'./partials/footer.php'
?>

