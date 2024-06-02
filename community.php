<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community page</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root{
      --blue: #007bff; 
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
      background: rgba(0, 123, 255, .2); 
      color: var(--blue);
      border-radius: .5rem;
      padding: .2rem 1rem;
    }

    .heading span.space{
      background: none;
    }

    .btn{
      display: inline-block;
      margin-top: 1rem;
      background: var(--blue); 
      color: #fff;
      padding: .8rem 3rem;
      border: .2rem solid var(--blue); 
      cursor: pointer;
      font-size: 1.7rem;
    }

    .btn:hover{
      background: rgba(0, 123, 255, .2); 
      color: var(--blue); 
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
      color: var(--blue); 
    }

    header .navbar a{
      color: #fff;
      font-size: 2rem;
      margin: 0 .8rem;
    }

    header .navbar a:hover{
      color: var(--blue); 
    }

    header .icons i{
      font-size: 2.5rem;
      color: #fff;
      cursor: pointer;
      margin-right: 2rem;
    }

    header .icons i:hover{
      color: var(--blue); 
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
      color: var(--blue); 
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
      border-color: var(--blue); 
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
      color: var(--blue); 
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

    .home{
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-flow: column;
      position: relative;
      z-index: 0;
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
      background: var(--blue); 
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
      color: var(--blue); 
    }

    .packages .box-container .box .content p{
      font-size: 1.7rem;
      color: #666;
      padding: 1rem 0;
    }

    .packages .box-container .box .content .stars i{
      font-size: 1.7rem;
      color: var(--blue);
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
      color: var(--blue); 
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
      color: var(--blue); 
    }

    .gallery .box-container .box .content p{
      font-size: 1.5rem;
      color: #eee;
      padding: .5rem 0;
    }

    .review .review-slider{
      padding-bottom: 2rem;
      padding-top: 2rem;
    }

    .review .box{
      padding: 2rem;
      text-align: center;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .review .box img{
      height: 30rem;
      width: 100%;
      border-radius: 100%;
      object-fit: cover;
      margin-bottom: 1rem;
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
      color: var(--blue); 
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
      color: var(--blue); 
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
            body { 
                font-family: Arial, sans-serif; 
                margin: 0; 
                
            } 
            
            .container { 
                max-width: 800px; 
                margin: 0 auto; 
            } 
            
            h1 { 
                text-align: center; 
            } 
            
            button { 
                padding: 10px 20px; 
                background-color: #007bff; 
                color: white; 
                border: none; 
                cursor: pointer; 
            } 
            
            .modal { 
                display: none; 
                position: fixed; 
                z-index: 1; 
                left: 0; 
                top: 0; 
                width: 100%; 
                height: 100%; 
                background-color: rgba(0, 0, 0, 0.5); 
            } 
            
            .modal-content { 
                background-color: #fefefe; 
                margin: 15% auto; 
                padding: 20px; 
                border: 1px solid #888; 
                width: 80%; 
            } 
            
            .close { 
                color: #aaa; 
                float: right; 
                font-size: 28px; 
                font-weight: bold; 
            } 
            
            .close:hover, 
            .close:focus { 
                color: black; 
                text-decoration: none; 
                cursor: pointer;
            }

            /* Additional CSS for the scrollable container */
            .form-container {
                max-height: 400px; 
                overflow-y: auto; 
            }
        

          

            
            .form-container {
                max-width: 400px;
                margin: auto;
            }

            label {
                display: block;
                margin-bottom: 8px;
                color: #333;
            }

            input, textarea {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                box-sizing: border-box;
            }

            .radio-container {
                display: flex;
                justify-content: space-between;
                margin-bottom: 16px;
            }

            .radio-label {
                display: inline-block;
                margin-right: 10px;
            }

            .location-container {
                margin-bottom: 16px;
            }

          

            button:hover {
                background-color: #45a049;
            }

            .hidden {
                display: none;
            }
      
            
            .container { 
                max-width: 800px; 
                margin: 0 auto; 
            } 
            
            h1 { 
                text-align: center; 
            } 
            
            button { 
                padding: 10px 20px; 
                background-color: #007bff; 
                color: white; 
                border: none; 
                cursor: pointer; 
            } 
    .event {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
    }







    .wrapper {
      overflow: hidden;
      max-width: 100%;
      background: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
      margin: 0 auto; 
    }

    .wrapper .slide-controls {
      position: relative;
      display: flex;
      height: 50px;
      width: 100%;
      overflow: hidden;
      margin: 30px 0 10px 0;
      justify-content: space-between;
      border: 1px solid lightgrey;
      border-radius: 5px;
    }

    .slide-controls .slide {
      height: 100%;
      width: 100%;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      text-align: center;
      line-height: 48px;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
    }

    .slide-controls label.signup {
      color: #007bff; /* Blue shade */
    }

    .slide-controls .slider-tab {
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      z-index: 0;
      border-radius: 5px;
      background: -webkit-linear-gradient(left, #007bff, #00bfff); 
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type="radio"] {
      display: none;
    }

    #signup:checked ~ .slider-tab {
      left: 50%;
    }

    #signup:checked ~ label.signup {
      color: #fff;
      cursor: default;
      user-select: none;
    }

    #signup:checked ~ label.login {
      color: #007bff; 
    }

    .wrapper .form-container {
      width: 100%;
      overflow: hidden;
    }

    .form-container .form-inner {
      display: flex;
      width: 200%;
    }

    .form-container .form-inner form {
      width: 50%;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

</style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<i class="fas fa-times" id="form-close"></i>
<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>e</span>vento</a>

    

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>
<br><br><br><br><br><br>






  <section class="packages" id="packages">

    <h1 class="heading">
        <span>e</span>
        <span>v</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
        <span>s</span>
        
    </h1>



    <?php
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password is set
$database = "emsdatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query for offline_events
$sql_offline = "SELECT * FROM offline_events";
$result_offline = mysqli_query($conn, $sql_offline) or die("Query Failed for offline events");

echo '<div class="box-container">';

while ($row = mysqli_fetch_assoc($result_offline)) {
    // Process each row for offline events
    echo '<div class="box">';
    echo '<div class="content">';
    echo '<h3> Offline Events </h3>';
    echo '<p><strong>Event Title:</strong> ' . $row['eventTitle'] . '</p>';
    echo '<p><strong>Description:</strong> ' . $row['eventDescription'] . '</p>';
    echo '<p><strong>Organizer:</strong> ' . $row['organizer'] . '</p>';
    echo '<p><strong>Place:</strong> ' . $row['place'] . '</p>';
    echo '<p><strong>Date & Time:</strong> ' . $row['dateTime'] . '</p>';
    echo '<a href="payment.php?event_id=' . (isset($row['Event_id']) ? $row['Event_id'] : '') . '" class="btn btn-primary">Book Now</a>';
    echo '</div>'; // Close content div
    echo '</div>'; // Close box div
}

// Query for online_events
$sql_online = "SELECT * FROM online_events";
$result_online = mysqli_query($conn, $sql_online) or die("Query Failed for online events");

while ($row = mysqli_fetch_assoc($result_online)) {
    // Process each row for online events
    echo '<div class="box">';
    echo '<div class="content">';
    echo '<h3> Online Events </h3>';
    echo '<p><strong>Event Title:</strong> ' . $row['eventTitle'] . '</p>';
    echo '<p><strong>Description:</strong> ' . $row['eventDescription'] . '</p>';
    echo '<p><strong>Organizer:</strong> ' . $row['organizer'] . '</p>';
    echo '<p><strong>Meeting Link:</strong> ' . $row['meetingLink'] . '</p>';
    echo '<p><strong>Date & Time:</strong> ' . $row['dateTime'] . '</p>';
    echo '<a href="payment.php?event_id=' . (isset($row['Event_id']) ? $row['Event_id'] : '') . '" class="btn btn-primary">Book Now</a>';
    echo '</div>'; // Close content div
    echo '</div>'; // Close box div
}

echo '</div>'; // Close box-container div

// Close connection
mysqli_close($conn);
?>





</section>
  
<br><br><br><br><br><br>
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
           
           
            <a href="#packages">Events</a>
          
            
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js">
  
  let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
searchBtn.addEventListener('click', () =>{ searchBtn.classList.toggle('fa-times'); searchBar.classList.toggle('active');
});
  
  </script>
</body>
</html>