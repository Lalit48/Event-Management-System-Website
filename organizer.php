

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'emsdatabase';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO contact(name, email, number, subject, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssdss", $name, $email, $number, $subject, $message);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    if(mysqli_affected_rows($conn) > 0) {
        echo "Your message has been delivered.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>organizer homepage</title>
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
      color: #fff;
      cursor: pointer;
      margin-right: 2rem;
    }

    header .icons i:hover{
      color: var(--blue); /* Blue hover color */
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

    .home{
      
      background-image: url('https://wallpapercave.com/wp/wp2349395.jpg'), 
                        url('https://i.pinimg.com/originals/16/18/34/161834a84fbb0106d5366fdfd6acea4e.jpg'), 
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
</head>
<body>
   <header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>E</span>vento</a>

    <nav class="navbar">
        <a href="#home">home</a>
        
        <a href="#packages">packages</a>

        <a href="#gallery">Event</a>
        
        <a href="#contact">contact</a>
    </nav>

    <div class="navbar">
        
        <a href="eventcreate.php">create event</a>
        <a id="logoutBtn" href="">log out</a>
    </div>


</header>
  
  <i class="fas fa-times" id="form-close"></i>
  
  <section class="home" id="home">

    <div class="content">
        <h3> Evento is not event planner its a feeling which we feel</h3>
        
        
    </div>

</section>

<section class="packages" id="packages">

<h1 class="heading">
    <span>p</span>
    <span>a</span>
    <span>c</span>
    <span>k</span>
    <span>a</span>
    <span>g</span>
    <span>e</span>
    <span>s</span>
</h1>

<div class="box-container">

    <div class="box">
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTHBP8pbIfCJaDfCX-QfWzd5ZqlqDd67s-cbeNaS2H7wcqRXwX9" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Wedding Planning Package </h3>
            <p>Comprehensive wedding planning services tailored to your unique vision and needs.</p>
            
            <div class="price"> 40,000 Rs <span>70,000 Rs</span> </div>
            <a href="Wedding Planning Package.php" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTfcxlVYtNv9xH659nrKDHeVDwBtIeh8qnXnRvF3cjJxeKINwu0" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i>  Birthday Celebration Package </h3>
            <p>Unforgettable birthday party planning services to make your special day truly memorable.</p>
            
            <div class="price"> 10,000 Rs <span>30,000 Rs</span> </div>
            <a href="Birthday Celebration Package.php" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPCbVfckQoWtg3tie51-XVOoVWebUV-CX4FD1bJ0i0j613GA1V" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Anniversary Package </h3>
            <p>Romantic anniversary celebration planning to honor your love and milestone together.</p>
            
            <div class="price"> 10,000 Rs <span>30,000 Rs</span> </div>
             <a href="Anniversary Package.php" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTeKP-VitmvZ_tw2PNYVVpc-R0H2BrRPV7KA8IyoZ_1rbGP5-m" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Graduation Party Package </h3>
            <p>Exciting graduation party planning services to celebrate your academic achievements</p>
           
            <div class="price"> 5,000 Rs <span>15,000 Rs</span> </div>
            <a href="Graduation Party Package.php" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSRUH5SvjoEORvKWazN0Zn-i07s0GmfgtISkQRngsoRJEvynGd3" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Virtual Conference Package </h3>
            <p>Engaging webinar series planning to showcase your expertise and connect with your audience.</p>
            
            <div class="price"> 5,000 Rs <span>10,000 Rs</span> </div>
            <a href="Virtual Conference Package.php" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSMGdegTqWggYCaWA8izYdC82opSlvyxaYNGdOv1C27MSwsb9wt" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Corporate Retreat Package </h3>
            <p>Productive and rejuvenating corporate retreats to inspire teamwork and innovation.</p>
           
            <div class="price"> 10,000 Rs <span>50,000 Rs</span> </div>
            <a href="Corporate Retreat Package.php" class="btn">read more</a>
        </div>
    </div>
    <div class="box">
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTx6tEJHDJFnIg8T3q-qvbIAdhiVb4xJ7B-F4gPnrs8IgeDRGCq" alt="">
        <div class="content">
            <h3> <i class="fas fa-map-marker-alt"></i> Corporate Training Workshop Package </h3>
            <p>Informative and engaging corporate training workshops to develop skills and enhance productivity.</p>
           
            <div class="price"> 10,000 Rs <span>90,000 Rs</span> </div>
            <a href="CORPORETE TRANINNG WORKSHOP.php" class="btn">read more</a>
        </div>
    </div>

</div>
</section>

  <section class="gallery" id="gallery">

    <h1 class="heading">
      <span>t</span>
        <span>y</span>
      <span>p</span>
        <span>e</span>
      <span>s</span>
      <br> <br>
      <span>o</span>
      <span>f</span>
      <br> <br>
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
  
  
  
<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="https://i.ibb.co/wWtkkRJ/evento-logo.png" alt="">
        </div>

        <form method="post">
            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="number">
                <input type="text" placeholder="subject" name="subject">
            </div>
            <textarea placeholder="message" name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" name="submit">
        </form>

    </div>
    
</section>
  
  
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
           
            <a href="#packages">packages</a>
          
            <a href="#gallery">Event</a>
           
            <a href="#contact">contact</a>
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
  window.location.href = "homepage.php"; // Change this to the actual login page URL
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

var swiperReview = new Swiper(".review-slider", {
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

var swiperBrand = new Swiper(".brand-slider", {
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
</body>
</html>
