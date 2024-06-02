<i class="fas fa-times" id="form-close"></i><!DOCTYPE html>
<html>
  <head>
    <title>Evento</title>
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

    /* Apply full width and height to the section */
.slider {
  width: 100vw;
  height: 100vh;
}

/* Apply full width to the slide container */
.slide {
  max-width: 100%;
}

/* Apply full width and height to the images */
.mySlides {
  width: 100%;
  height: 100%;
}

/* Remove any default padding and margins */

/* Ensure images are centered within the slide container */
.slide img {
  display: block;
  margin: auto;
  width: 100%;
  height: 100%;
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

    .home{
      
      background-image: url('https://i.pinimg.com/originals/16/18/34/161834a84fbb0106d5366fdfd6acea4e.jpg'), 
                        url('https://c4.wallpaperflare.com/wallpaper/88/545/234/indian-indian-wedding-indian-wedding-stage-wallpaper-preview.jpg'), 
                        url('https://i.pinimg.com/736x/b9/a1/65/b9a165dcaaeab8bef669378d07229e4f.jpg');
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

    

    .home .controls{
      padding: 1rem;
      border-radius: 5rem;
      background: rgba(0, 0, 0, .7);
      position: relative;
      top: 10rem;
    }

    .home .content .img{
      display: flex;

      width: 100%;
      margin: 0;
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

    .mySlides {
      display:none;
      width: 100%;
    }
 </style>
</head>
<body>
 
<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>E</span>vento</a>

    <nav class="navbar">
        <a href="#home">home</a>
        
        <a href="#packages">databases</a>
       
        
        
    </nav>
   
        
    
       

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
     
 <nav class="navbar">


<a id="logoutBtn" href="">log out</a>
    </nav>
</header>
  <div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    

</div>

<section class="home" id="home">


    <div class="content">
        <h3>ADMIN PANEL</h3>
       
        
    
            
     
    </div>

</section>
    
    
    


  <section class="packages" id="packages">

    <h1 class="heading">
        <span>d</span>
        <span>a</span>
        <span>t</span>
        <span>a</span>
        <span>b</span>
        <span>a</span>
      <span>s</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <a href="https://ibb.co/YRBRLS8"><img src="https://i.ibb.co/ngMgLyf/Screenshot-2024-04-04-135835.png" alt="Screenshot-2024-04-04-135835" border="0"></a>
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Event Created By Orgainizer </h3>
                
                
                
                <a href="events.php" class="btn">see more</a>
            </div>
        </div>
        
        <div class="box">
            <img src="data:image/png;base64,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" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Registeration </h3>
                
                
               
                <a href="" class="btn">see more</a>
            </div>
        </div>

        <div class="box">
            <a href="https://ibb.co/GCj4ksM"><img src="https://i.ibb.co/5sVgvYj/Untitled.png" alt="Untitled"></a>
          
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Package Provided </h3>
                 <a href="" class="btn">see more</a>
            </div>
        </div>
      
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwNGbaSl9UxQBk2EBRu7oMlMZv3iq4MFeyyw&s" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Customer problems </h3>
                
                
                
                <a href="" class="btn">see more</a>
            </div>
        </div>
      
        <div class="box">
            <img src="data:image/png;base64,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" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> payments details </h3>
                
                
                
                <a href="" class="btn">see more</a>
            </div>
        </div>

        

    </div>
</section>
  
  
   <section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="aboutus1.php"><h3> about us </h3></a>
            <p> A Wedding, Or Any Other Special Occasion, You Can Trust Us To Deliver Results That Exceed Your Expectations</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">kolhapur</a>
            
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
           
            <a href="#packages">databases</a>
          
            
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

var myIndex = 0;
carousel();
    document.getElementById("logoutBtn").addEventListener("click", function(event) {
  event.preventDefault(); // Prevent the default anchor behavior (i.e., navigating to href)
  
  // Perform logout actions here, such as clearing session data or redirecting to a login page
  console.log("Logging out...");
  // For demonstration, let's redirect to a login page
  window.location.href = "login.html"; // Change this to the actual login page URL
});


function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

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

var swiper = new Swiper(".review-slider", {
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

var swiper = new Swiper(".brand-slider", {
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
