<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root{
      --blue: #007bff; /* New blue color */
    }

    *{
      font-family: 'Nunito', sans-serif;
      margin:0; padding:0;
      box-sizing: border-box;
      text-transform: capitalize;
      outline: none; border:none;
      text-decoration: none;
      transition: all .2s linear;
    }

    *::selection{
      background: var(--blue);
      color: #fff;
    }

    html{
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-padding-top: 6rem;
      scroll-behavior: smooth;
    }

    section{
      padding: 2rem 9%;
    }

    .heading{
      text-align: center;
      padding: 2.5rem 0;
    }

    .heading span{
      font-size: 3.5rem;
      background: rgba(0, 123, 255, .2); /* Blue background color */
      color: var(--blue); /* Blue text color */
      border-radius: .5rem;
      padding: .2rem 1rem;
    }

    .heading span.space{
      background: none;
    }

    .btn{
      display: inline-block;
      margin-top: 1rem;
      background: var(--blue); /* Blue background color */
      color: #fff;
      padding: .8rem 3rem;
      border: .2rem solid var(--blue); /* Blue border color */
      cursor: pointer;
      font-size: 1.7rem;
    }

    .btn:hover{
      background: rgba(0, 123, 255, .2); /* Blue hover background color */
      color: var(--blue); /* Blue hover text color */
    }

    header{
      position: fixed;
      top: 0; left: 0; right: 0;
      background: #333;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 2rem 9%;
    }

    .home{
      
      background-image: url('https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg'), 
                        url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfcxlVYtNv9xH659nrKDHeVDwBtIeh8qnXnRvF3cjJxeKINwu0'), 
                        url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTeKP-VitmvZ_tw2PNYVVpc-R0H2BrRPV7KA8IyoZ_1rbGP5-m');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; /* Adjust the height as per your requirement */
      
      display: flex;
      align-items: center;
      justify-content: center;
      flex-flow: column;
      position: relative;
      z-index: 0;
    }

    header .logo{
      font-size: 2.5rem;
      font-weight: bolder;
      color: #fff;
      text-transform: uppercase;
    }

    header .logo span{
      color: var(--blue); /* Blue color */
    }

    header .navbar a{
      color: #fff;
      font-size: 2rem;
      margin: 0 .8rem;
    }

    header .navbar a:hover{
      color: var(--blue); /* Blue hover color */
    }

    header .icons i{
      font-size: 2.5rem;
      color: #333;
      cursor: pointer;
      margin-right: 2rem;
    }

    header .icons i:hover{
      color: #333; /* Blue hover color */
    }

    header .search-bar-container{
      position: absolute;
      top: 100%; left: 0; right: 0;
      padding: 1.5rem 2rem;
      background: #333;
      border-top: .1rem solid rgba(255, 255, 255, .2);
      display: flex;
      align-items: center;
      z-index: 1001;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .search-bar-container.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    header .search-bar-container #search-bar{
      width: 100%;
      padding: 1rem;
      text-transform: none;
      color: #333;
      font-size: 1.7rem;
      border-radius: .5rem;
    }

    header .search-bar-container label{
      color: #fff;
      cursor: pointer;
      font-size: 3rem;
      margin-left: 1.5rem;
    }

    header .search-bar-container label:hover{
      color: var(--blue); /* Blue hover color */
    }

    .login-form-container{
      position: fixed;
      top: -120%; left: 0;
      z-index: 10000;
      min-height: 100vh;
      width: 100%;
      background: rgba(0, 0, 0, .7);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-form-container.active{
      top: 0;
    }

    .login-form-container form{
      margin: 2rem;
      padding: 1.5rem 2rem;
      border-radius: .5rem;
      background: #fff;
      width: 50rem;
    }

    .login-form-container form h3{
      font-size: 3rem;
      color: #444;
      text-transform: uppercase;
      text-align: center;
      padding: 1rem 0;
    }

    .login-form-container form .box{
      width: 100%;
      padding: 1rem;
      font-size: 1.7rem;
      color: #333;
      margin: .6rem 0;
      border: .1rem solid rgba(0, 0, 0, .3);
      text-transform: none;
    }

    .login-form-container form .box:focus{
      border-color: var(--blue); /* Blue focus border color */
    }

    .login-form-container form #remember{
      margin: 2rem 0;
    }

    .login-form-container form label{
      font-size: 1.5rem;
    }

    .login-form-container form .btn{
      display: block;
      width: 100%;
    }

    .login-form-container form p{
      padding: .5rem 0;
      font-size: 1.5rem;
      color: #666;
    }

    .login-form-container form p a{
      color: var(--blue); /* Blue color */
    }

    .login-form-container form p a:hover{
      color: #333;
      text-decoration: underline;
    }

    .login-form-container #form-close{
      position: absolute;
      top: 2rem; right: 3rem;
      font-size: 5rem;
      color: #fff;
      cursor: pointer;
    }

    #menu-bar{
      color: #fff;
      border: .1rem solid #fff;
      border-radius: .5rem;
      font-size: 3rem;
      padding: .5rem 1.2rem;
      cursor: pointer;
      display: none;
    }

    

    .home .content{
      text-align: center;
    }

    .home .content h3{
      font-size: 4.5rem;
      color: #fff;
      text-transform: uppercase;
      text-shadow: 0 .3rem .5rem rgba(0, 0, 0, .1);
    }

    .home .content p{
      font-size: 2.5rem;
      color: #fff;
      padding: .5rem 0;
    }

    .home .video-container video{
      position: absolute;
      top: 0; left: 0;
      z-index: -1;
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .home .controls{
      padding: 1rem;
      border-radius: 5rem;
      background: rgba(0, 0, 0, .7);
      position: relative;
      top: 10rem;
    }

    .home .controls .vid-btn{
      height: 2rem;
      width: 2rem;
      display: inline-block;
      border-radius: 50%;
      background: #fff;
      cursor: pointer;
      margin: 0 .5rem;
    }

    .home .controls .vid-btn.active{
      background: var(--blue); /* Blue background color */
    }

    .book .row{
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: center;
    }

    .book .row .image{
      flex: 1 1 40rem;
    }

    .book .row .image img{
      width: 100%;
    }

    .book .row form{
      flex: 1 1 40rem;
      padding: 2rem;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .book .row form .inputBox{
      padding: .5rem 0;
    }

    .book .row form .inputBox input{
      width: 100%;
      padding: 1rem;
      border: .1rem solid rgba(0, 0, 0, .1);
      font-size: 1.7rem;
      color: #333;
      text-transform: none;
    }

    .book .row form .inputBox h3{
      font-size: 2rem;
      padding: 1rem 0;
      color: #666;
    }

    .packages .box-container{
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .packages .box-container .box{
      flex: 1 1 30rem;
      border-radius: .5rem;
      overflow: hidden;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
    }

    .packages .box-container .box img{
      height: 25rem;
      width: 100%;
      object-fit: cover;
    }

    .packages .box-container .box .content{
      padding: 2rem;
    }

    .packages .box-container .box .content h3{
      font-size: 2rem;
      color: #333;
    }

    .packages .box-container .box .content h3 i{
      color: var(--blue); /* Blue color */
    }

    .packages .box-container .box .content p{
      font-size: 1.7rem;
      color: #666;
      padding: 1rem 0;
    }

    .packages .box-container .box .content .stars i{
      font-size: 1.7rem;
      color: var(--blue); /* Blue color */
    }

    .packages .box-container .box .content .price{
      font-size: 2rem;
      color: #333;
      padding-top: 1rem;
    }

    .packages .box-container .box .content .price span{
      color: #666;
      font-size: 1.5rem;
      text-decoration: line-through;
    }

    .services .box-container{
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .services .box-container .box{
      flex: 1 1 30rem;
      border-radius: .5rem;
      padding: 1rem;
      text-align: center;
    }

    .services .box-container .box i{
      padding: 1rem;
      font-size: 5rem;
      color: var(--blue); /* Blue color */
    }

    .services .box-container .box h3{
      font-size: 2.5rem;
      color: #333;
    }

    .services .box-container .box p{
      font-size: 1.5rem;
      color: #666;
      padding: 1rem 0;
    }

    .services .box-container .box:hover{
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
    }

    .gallery .box-container{
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .gallery .box-container .box{
      overflow: hidden;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border: 1rem solid #fff;
      border-radius: .5rem;
      flex: 1 1 30rem;
      height: 25rem;
      position: relative;
    }

    .gallery .box-container .box img{
      height: 100%;
      width: 100%;
      object-fit: cover;
    }

    .gallery .box-container .box .content{
      position: absolute;
      top: -100%; left: 0;
      height: 100%;
      width: 100%;
      text-align: center;
      background: rgba(0, 0, 0, .7);
      padding: 2rem;
      padding-top: 5rem;
    }

    .gallery .box-container .box:hover .content{
      top: 0;
    }

    .gallery .box-container .box .content h3{
      font-size: 2.5rem;
      color: var(--blue); /* Blue color */
    }

    .gallery .box-container .box .content p{
      font-size: 1.5rem;
      color: #eee;
      padding: .5rem 0;
    }

    .review .review-slider{
      padding-bottom: 2rem;
    }

    .review .box{
      padding: 2rem;
      text-align: center;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .review .box img{
      height: 13rem;
      width: 13rem;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    .review .box h3{
      color: #333;
      font-size: 2.5rem;
    }

    .review .box p{
      color: #666;
      font-size: 1.5rem;
      padding: 1rem 0;
    }

    .review .box .stars i{
      color: var(--blue); /* Blue color */
      font-size: 1.7rem;
    }

    .contact .row{
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: center;
    }

    .contact .row .image{
      flex: 1 1 35rem;
    }

    .contact .row .image img{
      width: 100%;
    }

    .contact .row form{
      flex: 1 1 50rem;
      padding: 2rem;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .contact .row form .inputBox{
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .contact .row form .inputBox input, .contact .row form textarea{
      width: 49%;
      margin: 1rem 0;
      padding: 1rem;
      font-size: 1.7rem;
      color: #333;
      background: #f7f7f7;
      text-transform: none;
    }

    .contact .row form textarea{
      height: 15rem;
      resize: none;
      width: 100%;
    }

    .brand-container{
      text-align: center;
    }

    .footer{
      background: #333;
    }

    .footer .box-container{
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
    }

    .footer .box-container .box{
      padding: 1rem 0;
      flex: 1 1 25rem;
    }

    .footer .box-container .box h3{
      font-size: 2.5rem;
      padding: .7rem 0;
      color: #fff;
    }

    .footer .box-container .box p{
      font-size: 1.5rem;
      padding: .7rem 0;
      color: #eee;
    }

    .footer .box-container .box a{
      display: block;
      font-size: 1.5rem;
      padding: .7rem 0;
      color: #eee;
    }

    .footer .box-container .box a:hover{
      color: var(--blue); /* Blue hover color */
      text-decoration: underline;
    }

    .footer .credit{
      text-align: center;
      padding: 2rem 1rem;
      margin-top: 1rem;
      font-size: 2rem;
      font-weight: normal;
      color: #fff;
      border-top: .1rem solid rgba(255, 255, 255, .2);
    }

    .footer .credit span{
      color: var(--blue); /* Blue color */
    }

    /* media queries  */

    @media (max-width: 1200px){

      html{
        font-size: 55%;
      }

    }

    @media (max-width: 991px){

      header{
        padding: 2rem;
      }

      section{
        padding: 2rem;
      }

    }

    @media (max-width: 768px){

      #menu-bar{
        display: initial;
      }

      header .navbar{
        position: absolute;
        top: 100%; right: 0; left: 0;
        background: #333;
        border-top: .1rem solid rgba(255, 255, 255, .2);
        padding: 1rem 2rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      }

      header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      }

      header .navbar a{
        display: block;
        border-radius: .5rem;
        padding: 1.5rem;
        margin: 1.5rem 0;    
        background: #222;
      }

    }

    @media (max-width: 450px){

      html{
        font-size: 50%;
      }

      .heading span{
        font-size: 2.5rem;
      }

      .contact .row form .inputBox input{
        width: 100%;
      }
    }

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>E</span>vento</a>

    <nav class="navbar">
        <a href="#home">home</a>
       
        <a href="#packages">events</a>
        
        <a href="#gallery">gallery</a>
    </nav>

    
  
  <div class="navbar">
        <a href="community.php">community</a>
        <a id="logoutBtn" href="">log out</a>
    </div>

    

</header>

<!-- header section ends -->

<!-- login form container  -->

<i class="fas fa-times" id="form-close"></i>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> evento event management website</h3>
        
        
    </div>
  
   

    

</section>

<!-- home section ends -->

<!-- book section starts  -->

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>e</span>
        <span>v</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
      <br> <br>
        <span>t</span>
        <span>y</span>
        <span>p</span>
       <span>e</span>
        <span>s</span>
        
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz_sWu-QGHxjv-IcIhMQdEhhubfeqHYrbRgQ&s" alt="">
            <div class="content">
                <h3> Personal Events </h3>
                <p> it is for a specific event; includes vivid multi-sensory elements; is usually recalled in detail; and is usually believed by the individual to be an accurate representation of the event.</p>
                
                
                
            </div>
        </div>
        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <div class="content">
                <h3> Virtual Events </h3>
                <p>A virtual event, also known as an online event, virtual conference or livestream experience, is an event that involves people interacting in an online environment on the web, rather than meeting in a physical location.</p>
                
                
                
            </div>
        </div>
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUvtCjMnCRUOMzSBpgRw7Z47__ad7LkAQQKg&s" alt="">
            <div class="content">
                <h3> corporate events </h3>
                <p>A corporate event is an event sponsored by a company and focuses on either its employees or clients. </p>
                
                
                
            </div>
        </div>
       

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   

    <div class="box-container">

        <div class="box">
          <img src="images/p-4.jpg" alt="">
            
            <h3>evento</h3>
            <p>Event Management Is The Process Of Creating And Maintaining An Event.This Process Spans Frm The Very Beginning Of Planning All The Way To Post-Event Strategizing.At EVENTO, We Believe That Every Event Is A Unique Celebration, And Organizing It Should Be A Seamless And Enjoyable Experience. Our Platform Is Designed To Empower Users With The Tools And Information They Need To Create Memorable Events Effortlessly. Our Mission Is To Simplify The Event Planning Process, Providing Users With A One-Stop Solution For All Their Event Management Needs. We Strive To Bring People Together By Offering A Platform That Is Intuitive, Efficient, And Tailored To Individual Preferences. As We Continue To Evolve, We Invite You To Join Us On Our Journey. Whether You're Planning A Birthday Party, Wedding, Engagement, Or Corporate Event, EVENTO Is Here To Make Your Experience Unforgettable. Thank You For Choosing Evento For Your Event Management Needs!</p>
        </div>
        

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>e</span>
        <span>v</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
        <span>s</span>
        
    </h1>

    <div class="box-container">

    <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRKKKDNP04iHw_b8lREzD7ViQ_BKXxzE0T198BLrUOUGEO67qmA" alt="">
                <div class="content">
                    <h3>wedding</h3>
                </div>
            </div>
            <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSfW_I8kJpj19P3gzX7Wtc5qUlgJSkBCMJI7OQpIlQ4lTciej7J" alt="">
                <div class="content">
                    <h3>birthday</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ15YRgmjkL-TcXDXgNEtkIgpMRj_N86b1TwtkPIwyfeuPWBD2z" alt="">
                <div class="content">
                    <h3>Seminars</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRRKDeXYP36eDaDN7rXhKpFzInmkADKho3BNFzFw-BwcF_JWand" alt="">
                <div class="content">
                    <h3>anniversarie</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDyBk8DGZmZ4t3x4tBW57DWKypi7Gl0-kqsopuAFbD0m-RJMK2" alt="">
                <div class="content">
                    <h3>conferance</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSW5Hq9FUgD-tlXY3FS__N9hguEeaS1icOfLIzTbG_BXMjJU1RP" alt="">
                <div class="content">
                    <h3>webner</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSVXoU1_eYd2vHBv7CDoJMr2abzoGF9V-FhAEFr3hnBBwqpiiqg" alt="">
                <div class="content">
                    <h3>meeting</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSFMktL13DYI-kvqtN-7DFHuxKDo8_diOVvrC-NnnL_F8lsEz_3" alt="">
                <div class="content">
                    <h3>family events</h3>
                </div>
            </div>
          <div class="box">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR2qfi1TN5_1KriXjxpsj0ecTawimJTzZA3lqT4ivPekRv7H2ld" alt="">
                <div class="content">
                    <h3>music festivals</h3>
                </div>
            </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->



<!-- review section ends -->

<!-- contact section starts  -->

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>




<!-- footer section  -->
<section class="footer">

    <div class="box-container">

        <div class="box">
        <a href="aboutus1.php"><h3> about us </h3></a>
            <p>A Wedding, Or Any Other Special Occasion, You Can Trust Us To Deliver Results That Exceed Your Expectations.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">kolhapur</a>
            
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
           
            <a href="#packages">events</a>
          
            <a href="#gallery">Event</a>
           
            
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span href=""> web wizerds  </span> </h1>

</section>

<script>
    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');
    let formBtn = document.querySelector('#login-btn');
    let loginForm = document.querySelector('.login-form-container');
    let formClose = document.querySelector('#form-close');
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');
    let videoBtn = document.querySelectorAll('.vid-btn');

    document.getElementById("logoutBtn").addEventListener("click", function(event) {
  event.preventDefault(); // Prevent the default anchor behavior (i.e., navigating to href)
  
  // Perform logout actions here, such as clearing session data or redirecting to a login page
  console.log("Logging out...");
  // For demonstration, let's redirect to a login page
  window.location.href = "login.html"; // Change this to the actual login page URL
});


    window.onscroll = () =>{
        searchBtn.classList.remove('fa-times');
        searchBar.classList.remove('active');
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
        loginForm.classList.remove('active');
    }

    menu.addEventListener('click', () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    });

    searchBtn.addEventListener('click', () =>{
        searchBtn.classList.toggle('fa-times');
        searchBar.classList.toggle('active');
    });

    formBtn.addEventListener('click', () =>{
        loginForm.classList.add('active');
    });

    formClose.addEventListener('click', () =>{
        loginForm.classList.remove('active');
    });

    videoBtn.forEach(btn =>{
        btn.addEventListener('click', ()=>{
            document.querySelector('.controls .active').classList.remove('active');
            btn.classList.add('active');
            let src = btn.getAttribute('data-src');
            document.querySelector('#video-slider').src = src;
        });
    });

    var swiper1 = new Swiper(".review-slider", {
        spaceBetween: 20,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
              slidesPerView: 1,
            },
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
        },
    });

    var swiper2 = new Swiper(".brand-slider", {
        spaceBetween: 20,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            450: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            991: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          },
    });

</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>