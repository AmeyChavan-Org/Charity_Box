<? php

session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Box</title>
   
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="s.css"> 
    <!-- font awesome cdn link -->
    <script src="https://kit.fontawesome.com/ea36725fe9.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/jpeg" href="travel1.jpeg">
</head>
<body>
    

<!-- header section starts -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="https://github.com/AmeyChavan-Org/Charity_Box" class="logo"><h2 style="color:floralwhite;font-family:algerian;">Charity Box</h2></a>

    <nav class="navbar">
        <a href="#home">HOME</a>
        <a href="#book">VOLUNTEER US</a> 
        <!-- <a href="#packages">PACKAGES</a> -->
        <a href="#services">SERVICES</a>
        <a href="#gallery">GALLERY</a>
        <a href="#review">TEAM</a>
        <a href="#contact">CONTACT</a>
  <a href="a.html">LOG OUT</a>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                    <a class="nav-link" href="#"><?php echo"Welcome "//.$_SESSION["firstName"] ?></a>
            <ul>
        </div>
        <!-- <a href="#location">LOCATION</a> -->
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search here....">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container -->

<div class="login-form-container">

    <i class="fas fa-user" id="form-close"></i>
            <p><h1>Already login</h1></p>
<!-- <form action="login.php" method="post">
    <h3>Login</h3>
    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="box" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="box" name="password" />
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Login" name="">
    <input type="checkbox" id="remember">
    <label for="remember">Remember me</label> -->
    <!-- <p>Admin Login:<a href="http://localhost/College-main/admin/admin_login.php">Click Here</a></p>
    <p>Don't have an account? <a href="registration.html">Register now</a></p>
</form> --> -->

</div>

<!-- home section start -->

<section class="home" id="home">

    <div class="content">
        <h3>BRING SMILE</h3>
        <p>Charity is Supreme Virtue</p>
        <a href="https://www.canva.com/design/DAFemLfkeMQ/F_DdpPYxmPexBAX9O1XVxw/edit?utm_content=DAFemLfkeMQ&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn">Take a short Tutorial</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="V5.mp4"></span>
        <span class="vid-btn" data-src="v1.mp4"></span>
        <span class="vid-btn" data-src="v2.mp4"></span>
        <span class="vid-btn" data-src="v3.mp4"></span>
        <span class="vid-btn" data-src="v4.mp4"></span>

    </div>

    <div class="video-container">
        <video src="video1.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>

<!-- home section ends -->

<!-- book section starts -->

<section class="book" id="book">

    <h1 class="heading">
        <span>B</span>
        <span>e</span>
        <span class="space"></span>
        <span>a</span>
        <span class="space"></span>
        <span>M</span>
        <span>e</span>
        <span>m</span>
        <span>b</span>
        <span>e</span>
        <span>r</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="main.jpg" alt="">
        </div>

        <form action="Member.php" method="post">
            <div class="inputbox">
                <h3>Name</h3>
                <label for="firstName">First Name_Father Name_Surname Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name_Father Name_Surname Name"/>
            </div>
            <div class="inputbox">
                <h3>Phone Number</h3>
                <input type="number" class="form-control" id="number" name="number" placeholder="Enter your phone number"/>
            </div>
            <div class="inputbox">
                <h3>Membership in</h3>
                <input type="text" class="form-control" id="Membership" name="Membership" placeholder="Tree plantation, Donation, Waste management" />
            </div>
            <div class="inputbox">
                <h3>Duration</h3>
                <input type="text" class="form-control" id="Duration" name="Duration" placeholder="Enter your duration" /> 
            </div>
            <input type="SUBMIT" class="btn" value="Volunteer us!" >
        </form>
    </div>
</section>

<!-- book section ends -->



<!-- services section starts -->

<section class="services" id="services">

    <h1 class="heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span>
    </h1>
    
    <div class="box-container">

        <div class="box">
            <i class="fas fa-trash"></i>
            <a href="garbage.html"><h3>GARBAGE</h3></a>
            <p>Show us the garbage and we are there to collect</p>
        </div>
        <div class="box">
            <i class="fas fa-hands"></i>
            <a href="Donation.html"><h3>DONATION</h3></a>
            <p>Nothing is better than giving a little to the ones who needs</p>
        </div>
        <div class="box">
            <i class="fas fa-leaf"></i>
            <a href="tree.php"><h3>TREE PLANTATION</h3></a>
            <p>Plant to breathe purity</p>
        </div>
        
</section>
<!-- services section ends -->

<!-- gallery section starts -->
<!--we are here-->
<section class="gallery" id="gallery">
    
    <h1 class="heading">
        <span>G</span>
        <span>A</span>
        <span>L</span>
        <span>L</span>
        <span>E</span>
        <span>R</span>
        <span>Y</span>
    </h1>

    <div class="box-container">
        
        <div class="box">
            <img src="donation.jpg" alt="">
            <div class="content">
                <h3>DONATION DRIVES</h3>
                <p>Exploring Self is Way awesome</p>
                <a href="#" class="btn">See more.</a>
            </div>
        </div>
        <div class="box">
            <img src="tree.jpg" alt="">
            <div class="content">
                <h3>PLANTATION CAMPAIGN</h3>
                <p>Love to be in embrass of nature</p>
                <a href="gallery2.html" class="btn">See more.</a>
            </div>
        </div>
        <div class="box">
            <img src="garbage.jpg" alt="">
            <div class="content">
                <h3>ROAD TO BIN</h3>
                <p>Travel can always be there for you</p>
                <a href="gallery3.html" class="btn">See more.</a>
            </div>
        </div>
       
        <div class="box">
            <img src="hunger.jpg" alt="">
            <div class="content">
                <h3>NO MORE HUNGER</h3>
                <p>Memories are made to be preserved.</p>
                <a href="gallery5.html" class="btn">See more.</a>
            </div>
        </div>
    </div>
</section>
<!-- gallery section ends -->

<!-- review section starts -->

<section class="review" id="review">

    <h1 class="heading">
        <span>T</span>
        <span>E</span>
        <span>A</span>
        <span>M</span>
        
    </h1>


    <div class=" swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="Amey.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/amey-chavan-8b5b19190">Amey Chavan</h3></a>
                    <p>computer science graduate ,persuing Masters in Computer Application in Fergusson, Mainly Contributing towards database management and Presentation </p>
                    </div>
            </div>
            
            <div class="swiper-slide">
                <div class="box">
                    <img src="Tejas.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/tejas-madane-5a548a188">Tejas Madane</h3><a>
                    <p>Computer science graduate from SP college,persuing Masters in Computer Application in Fergusson, Working on the frontend of the website</p>
                   
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Chetana.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/chetana-n-20205a1aa">Chetana Nannaware</h3></a>
                    <p>computer science graduate ,persuing Masters in Computer Application in Fergusson, Manages the Documentaion and keep eye on project growth . </p>
                    </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Arti.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/arati-nimgaonkar-561622125">Mrs.Arati Nimgaonkar</h3><a>
                    <p>Our Guide,Mrs.Arati Nimgaonkar Ma'am, has done M.C.S,M.Phil(Computer Science) , helps us to improve and suggest changes in the website</p>
                   
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- review section ends -->
<!--Contribute section starts-->
<!-- <section class="review" id="review">

    <h1 class="heading">
        <span>O</span>
        <span>U</span>
        <span>R</span>
                <span class="space"></span>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>R</span>
        <span>I</span>
        <span>B</span>
        <span>U</span>
        <span>T</span>
        <span>O</span>
        <span>R</span>
        <span>S</span>
        
    </h1>


    <div class=" swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="Amey.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/amey-chavan-8b5b19190">Amey Chavan</h3></a>
                    <p>computer science graduate ,persuing Masters in Computer Application in Fergusson, Mainly Contributing towards database management and Presentation </p>
                    </div>
            </div>
            
            <div class="swiper-slide">
                <div class="box">
                    <img src="Tejas.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/tejas-madane-5a548a188">Tejas Madane</h3><a>
                    <p>Computer science graduate from SP college,persuing Masters in Computer Application in Fergusson, Working on the frontend of the website</p>
                   
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Chetana.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/chetana-n-20205a1aa">Chetana Nannaware</h3></a>
                    <p>computer science graduate ,persuing Masters in Computer Application in Fergusson, Manages the Documentaion and keep eye on project growth . </p>
                    </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Arti.jpeg"  alt="">
                    <h3><a href="https://www.linkedin.com/in/arati-nimgaonkar-561622125">Mrs.Arati Nimgaonkar</h3><a>
                    <p>Our Guide,Mrs.Arati Nimgaonkar Ma'am, has done M.C.S,M.Phil(Computer Science) , helps us to improve and suggest changes in the website</p>
                   
                </div>
            </div>
            </div>
        </div>
    </div>
</section> -->

<!--another way is-->
<section class="gallery" id="gallery">
    
<h1 class="heading">
        <span>O</span>
        <span>U</span>
        <span>R</span>
                <span class="space"></span>
                <span>M</span>
                <span>A</span>
                <span>J</span>
                <span>O</span>
                <span>R</span>
                <span class="space"></span>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>R</span>
        <span>I</span>
        <span>B</span>
        <span>U</span>
        <span>T</span>
        <span>O</span>
        <span>R</span>
        <span>S</span>
        
    </h1>

    <div class="box-container">
        
        <div class="box">
  
            <img src="c1.jpeg" alt="">
            <div class="content">
                <h3>Kuldeep E Waste Recycling center</h3>
                <p>Exploring Self is Way awesome</p>
                <a href="https://youtu.be/CmP67zq5hfo" class="btn">See more.</a> -->
            </div>
        </div>

        <div class="box">
            <img src="c2.jpeg" alt="">
            <div class="content">
                <h3>Srcap Collection</h3>
                <p>Love to be in embrass of nature</p>
                <a href="https://youtu.be/KTf_tTVU1m4" class="btn">See more.</a>
            </div>
        </div>
        <div class="box">
            <img src="c3.jpeg" alt="">
            <div class="content">
                <h3>WEY AND DRY WASTE COLLECTION</h3>
                <p>Why it is important to segregate and keep sanitary waste off landfills?
</p>
                <a href="https://youtu.be/75cW3it5acU" class="btn">See more.</a>
            </div>
        </div>
       
        <div class="box">
            <img src="c4.jpeg" alt="">
            <div class="content">
                <h3>E-waste Collection Drive</h3>
                <p>Resource Recycling Centre, Kalyani Nagar, Pune</p>
                <a href="https://youtu.be/-JBbPJJ7RKk" class="btn">See more.</a>
            </div>
        </div>
    </div>
</section>



<!--Contribute section Ends-->




<!-- contacts sections starts -->

<section class="contact" id="contact">

    <h1 class="heading">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
        <span class="space"></span>
        <span>U</span>
        <span>S</span>
    </h1>

      <div class="row" style="  display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;">

        <div class="image" style="   flex: 1 1 35rem;">
            <img src="pl.jpg" alt="" width="100%">
        </div>

        <form action="message.php" method="post" style="flex: 1 1 50rem;">
            <div class="inputbox">
                <input type="text" required placeholder="Name" class="form-control" id="firstName" name="firstName"/>
                <input type="email" required placeholder="Email" class="form-control" id="email" name="email" />
            </div>
            <div class="inputbox">
                <input type="number" required placeholder="Contact no." class="form-control" id="number" name="number" />
                <input type="text" required placeholder="Subject" class="form-control" id="subject" name="subject" />
            </div>
            <textarea placeholder="Message" type="text" class="form-control" id="text" name="text"cols="30" rows="10"></textarea>
            <input type="SUBMIT" class="btn" value="Send Message">
        </form>
<!--            <form action="" method="post">
      <h3>get in touch</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form> -->


      </div>
</section>


<!-- contacts section ends -->



<!-- brand section starts -->
<section class="brand" id="brand">

    <div class="brand-container" style="text-align: center;">
        <!-- <img src="vy.jpg" width="20%"  alt=""><span></span> -->
        <img src="hands.jpg" width="15%"  alt="">
        <!-- <img src="yh.jpg" width="20%"  alt=""> -->
    </div>
</section>

<!-- brand section ends -->

<!-- footer section starts -->

<section class="footer" id="footer">

    <div class="box-container">
        
        <div class="box">
            <h3>ABOUT US</h3>
            <p>The Website is an interface that connects charity, waste management, 
                and donation of various items like clothing, shoes, books, and other 
                related things. It is designed to make it easier for people to donate 
                their unused or unwanted items to charitable organizations or recycling
                centers, thereby promoting sustainability and social responsibility.</p>
        </div>
        <div class="box">
            <h3>BRANCH LOCATION</h3>
            <a href="https://www.fergusson.edu/">Fergusson College</a>
          <!--  <a href="">MUMBAI</a>
            <a href="">SATARA</a>
            <a href="">NASHIK</a>
            <a href="">NAGAR</a>-->
        </div>

       <!--  <div class="box">
            <h3>EASY LINKS</h3>
            <a href="">HOME</a>
            <a href="">MEMBERSHIP</a>
            <a href="">SERVICES</a>
            <a href="">GALLERY</a>
            <a href="">TEAM</a>
            <a href="">CONTACTS</a>
        </div>

        <div class="icons">
            <h3 style="font-size: 1.5rem;">FOLLOW US ON</h3><br>
            <a href="https://m.facebook.com"><i class="fab fa-facebook"></i></a><br><br>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a><br><br>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a><br><br>
            <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a><br><br>
            <a href="https://www.telegram.org"><i class="fab fa-telegram"></i></a><br><br>
            </div>-->
    </div>

        <a href="https://drive.google.com/drive/folders/1GEtl50EfInedxtAnEUS92JZJryLs0CMy?usp=share_link"><h1 class="credit">Created by <span> B4.G1 </span></h1></a>
    <h5>*Click On it For documentation</h5>

</section>
<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="j.js"></script>


</body>
</html>