<!DOCTYPE html>
<html>
<head>
    <title>Evento</title>
 <style>
 @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
  transition: all .2s linear;
}

:root {
  --blue: #007bff;
}


*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top: 6rem;
  scroll-behavior: smooth;
}

.heading {
  text-align: center;
  padding: 2.5rem 0;
}

.heading span {
  font-size: 3.5rem;
  background: rgba(0, 123, 255, .2);
  color: var(--blue);
  border-radius: .5rem;
  padding: .2rem 1rem;
}

.heading span.space {
  background: none;
}

.btn {
  display: inline-block;
  margin-top: 1rem;
  background: var(--blue);
  color: #fff;
  padding: .8rem 3rem;
  border: .2rem solid var(--blue);
  cursor: pointer;
  font-size: 1.7rem;
}


header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background: #333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 2rem 9%;
}

header .logo {
  font-size: 2.5rem;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
}

header .logo span {
  color: var(--blue);
}

header .navbar a {
  color: #fff;
  font-size: 2rem;
  margin: 0 .8rem;
}

header .navbar a:hover {
  color: var(--blue);
}

header .search-bar-container {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  padding: 1.5rem 2rem;
  background: #333;
  border-top: .1rem solid rgba(255, 255, 255, .2);
  display: flex;
  align-items: center;
  z-index: 1001;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active {
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .search-bar-container #search-bar {
  width: 100%;
  padding: 1rem;
  text-transform: none;
  color: #333;
  font-size: 1.7rem;
  border-radius: .5rem;
}

header .search-bar-container label {
  color: #fff;
  cursor: pointer;
  font-size: 3rem;
  margin-left: 1.5rem;
}

header .search-bar-container label:hover {
  color: var(--blue);
}

#menu-bar {
  color: #fff;
  border: .1rem solid #fff;
  border-radius: .5rem;
  font-size: 3rem;
  padding: .5rem 1.2rem;
  cursor: pointer;
   display: none;
}

.home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  position: relative;
  z-index: 0;
}

.home .content {
  text-align: center;
}

.home .content h3 {
  font-size: 4.5rem;
  color: #fff;
  text-transform: uppercase;
  text-shadow: 0 .3rem .5rem rgba(0, 0, 0, .1);
}

.home .content p {
  font-size: 2.5rem;
  color: #fff;
  padding: .5rem 0;
}

.home .video-container video {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.home .controls {
  padding: 1rem;
  border-radius: 5rem;
  background: rgba(0, 0, 0, .7);
  position: relative;
  top: 10rem;
}

.home .controls .vid-btn {
  height: 2rem;
  width: 2rem;
  display: inline-block;
  border-radius: 50%;
  background: #fff;
  cursor: pointer;
  margin: 0 .5rem;
}

.home .controls .vid-btn.active {
  background: var(--blue);
}

.book .row {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  align-items: center;
}

.book .row .image img {
  width: 100%;
}

.book .row form {
  flex: 1 1 40rem;
  padding: 2rem;
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
  border-radius: .5rem;
}

.packages .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}

.packages .box-container .box {
  flex: 1 1 30rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
}

.packages .box-container .box img {
  height: 25rem;
  width: 100%;
  object-fit: cover;
}

.packages .box-container .box .content {
  padding: 2rem;
}

.services .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.services .box-container .box {
  flex: 1 1 30rem;
  border-radius: .5rem;
  padding: 1rem;
  text-align: center;
}

.services .box-container .box i {
  padding: 1rem;
  font-size: 5rem;
  color: var(--blue);
}

.services .box-container .box h3 {
  font-size: 2.5rem;
  color: #333;
}

.services .box-container .box p {
  font-size: 1.5rem;
  color: #666;
  padding: 1rem 0;
}

.services .box-container .box:hover {
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
}

.gallery .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.gallery .box-container .box {
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
  border: 1rem solid #fff;
  border-radius: .5rem;
  flex: 1 1 30rem;
  height: 25rem;
  position: relative;
}

.gallery .box-container .box img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.gallery .box-container .box .content {
  position: absolute;
  top: -100%;
  left: 0;
  height: 100%;
  width: 100%;
  text-align: center;
  background: rgba(0, 0, 0, .7);
  padding: 2rem;
  padding-top: 5rem;
}

.gallery .box-container .box:hover .content {
  top: 0;
}

.gallery .box-container .box .content h3 {
  font-size: 2.5rem;
  color: var(--blue);
}

.gallery .box-container .box .content p {
  font-size: 1.5rem;
  color: #eee;
  padding: .5rem 0;
}

.footer {
  background: #333;
}

.footer .box-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.footer .box-container .box {
  padding: 1rem 0;
  flex: 1 1 25rem;
}

.footer .box-container .box h3 {
  font-size: 2.5rem;
  padding: .7rem 0;
  color: #fff;
}

.footer .box-container .box p,
.footer .box-container .box a {
  font-size: 1.5rem;
  padding: .7rem 0;
  color: #eee;
}

.footer .box-container .box a:hover {
  color: var(--blue);
  text-decoration: underline;
}

.footer .credit {
  text-align: center;
  padding: 2rem 1rem;
  margin-top: 1rem;
  font-size: 2rem;
  font-weight: normal;
  color: #fff;
  border-top: .1rem solid rgba(255, 255, 255, .2);
}

.footer .credit span {
  color: var(--blue);
}

/* media queries */

@media (max-width: 1200px) {
  html {
    font-size: 55%;
  }
}

@media (max-width: 991px) {
  header {
    padding: 2rem;
  }

  section {
    padding: 2rem;
  }
}

@media (max-width: 768px) {
  #menu-bar {
    display: initial;
  }

  header .navbar {
    position: absolute;
    top: 100%;
    right: 0;
    left: 0;
    background: #333;
    border-top: .1rem solid rgba(255, 255, 255, .2);
    padding: 1rem 2rem;
    clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  }

  header .navbar.active {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
  
  header .navbar a {
    display: block;
    border-radius: .5rem;
    padding: 1.5rem;
    margin: 1.5rem 0;
    background: #222;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }

  .heading span {
    font-size: 2.5rem;
  }

  .contact .row form .inputBox input {
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
    </nav>
</header>
 
  
  <section class="services" id="services">
<br><br><br><br><br><br>
    <h1 class="heading">
        <span>A</span>
        <span>B</span>
        <span>O</span>
        <span>U</span>
        <span>T</span>
            &nbsp;
        <span>U</span>
        <span>S</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Description about Evento</h3><br><br>
            <p>Event management is the process of creating and maintaining an event.This process spans frm the very beginning of planning all the way to post-event strategizing.At EVENTO, we believe that every event is a unique celebration, and organizing it should be a seamless and enjoyable experience. Our platform is designed to empower users with the tools and information they need to create memorable events effortlessly. Our mission is to simplify the event planning process, providing users with a one-stop solution for all their event management needs. We strive to bring people together by offering a platform that is intuitive, efficient, and tailored to individual preferences. As we continue to evolve, we invite you to join us on our journey. Whether you're planning a birthday party, wedding, engagement, or corporate event, EVENTO is here to make your experience unforgettable. Thank you for choosing evento for your event management needs!
<br>
At Evento, we pride ourselves on being the catalysts behind unforgettable experiences. With a passion for perfection and an unwavering commitment to excellence, we strive to turn your vision into reality, one event at a time.
<br>
Our team is comprised of seasoned professionals who bring creativity, innovation, and meticulous attention to detail to every project we undertake. From conceptualization to execution, we handle every aspect of event planning with precision and flair, ensuring that each event is a seamless success.
<br>
With years of experience in the industry, we have forged strong relationships with top vendors, venues, and service providers, enabling us to offer our clients access to the best resources available. Whether you're planning a corporate conference, a gala fundraiser, a wedding, or any other special occasion, you can trust us to deliver results that exceed your expectations.
<br>
At Evento, we understand that no two events are alike, which is why we approach each project with fresh eyes and a customized strategy. Our goal is not just to meet your needs but to surpass them, leaving a lasting impression on you and your guests.
<br>
From intimate gatherings to large-scale productions, we have the expertise, creativity, and resources to bring your vision to life. Let us handle the logistics while you focus on enjoying every moment of your special day.
<br>
Partner with Evento and experience the difference that passion, professionalism, and dedication can make. Let's create memories together that will last a lifetime.</p>
        </div>
        

    </div>

</section>
  <section class="gallery" id="gallery">

    <h1 class="heading">
        <span>T</span>
        <span>E</span>
        <span>A</span>
        <span>M</span>
        <span>M</span>
        <span>A</span>
        <span>T</span>
        <span>E</span>
        <span>S</span>
    </h1>

    <div class="box-container">

        <div class="box">
        <a href="https://ibb.co/wgL1kxn"><img src="https://i.ibb.co/9gvjDCx/Whats-App-Image-2024-04-19-at-11-25-38-3945bec8.jpg" alt="Whats-App-Image-2024-04-19-at-11-25-38-3945bec8" border="0"></a>
            <div class="content">
                <h3>LALIT <br>KHEKALE</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                
            </div>
        </div>
        <div class="box">
            <a href="https://ibb.co/0ysmLpz"><img src="https://i.ibb.co/PGDFysV/Whats-App-Image-2024-04-19-at-10-14-08-d6648c11.jpg" alt="Whats-App-Image-2024-04-19-at-10-14-08-d6648c11" border="0"></a>
            <div class="content">
                <h3>KSHITIJA<br> THORAT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                
            </div>
        </div>
        <div class="box">
            <a href="https://ibb.co/q9kbm3F"><img src="https://i.ibb.co/GkcgC43/Whats-App-Image-2024-04-19-at-10-18-33-8f4166b7.jpg" alt="Whats-App-Image-2024-04-19-at-10-18-33-8f4166b7" border="0"></a>
            <div class="content">
                <h3>DIPEEKA <br>JADHAV</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                
            </div>
        </div>
       <div class="box">
            <a href="https://ibb.co/wBQ6qxK"><img src="https://i.ibb.co/0m9JLdf/Whats-App-Image-2024-04-19-at-10-18-49-9b8dca1b.jpg" alt="Whats-App-Image-2024-04-19-at-10-18-49-9b8dca1b" border="0"></a>
            <div class="content">
                <h3>TANISHQ <br>PANDDHARPATTE</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                
            </div>
        </div>
        
       

    </div>

</section>
  <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">kolhapur</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <br>
            <a href="#">about us</a><br><br>
            <a href="#gallery">teammates</a>
        </div>
        <div class="box">
            <h3>follow us</h3>          <br>  
            <a href="#">instagram</a><br><br>
            <a href="#">twitter</a><br><br>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span href=""> web wizerds  </span> </h1>

</section>
  
</body>
</html>