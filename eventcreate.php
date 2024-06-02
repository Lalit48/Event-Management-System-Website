<!DOCTYPE html>
<html>

<head>
  <title>organizer event create page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root {
      --blue: #007bff;
      /* New blue color */
    }

    .event {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    
    * {
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-transform: capitalize;
      outline: none;
      border: none;
      text-decoration: none;
      transition: all .2s linear;
    }

    *::selection {
      background: var(--blue);
      color: #fff;
    }

    html {
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-padding-top: 6rem;
      scroll-behavior: smooth;
    }

    section {
      padding: 2rem 9%;
    }

    .heading {
      text-align: center;
      padding: 2.5rem 0;
    }

    .heading span {
      font-size: 3.5rem;
      background: rgba(0, 123, 255, .2);
      /* Blue background color */
      color: var(--blue);
      /* Blue text color */
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
      /* Blue background color */
      color: #fff;
      padding: .8rem 3rem;
      border: .2rem solid var(--blue);
      /* Blue border color */
      cursor: pointer;
      font-size: 1.7rem;
    }

    .btn:hover {
      background: rgba(0, 123, 255, .2);
      /* Blue hover background color */
      color: var(--blue);
      /* Blue hover text color */
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
      font-weight: bolder;
      color: #fff;
      text-transform: uppercase;
    }

    header .logo span {
      color: var(--blue);
      /* Blue color */
    }

    header .navbar a {
      color: #fff;
      font-size: 2rem;
      margin: 0 .8rem;
    }

    header .navbar a:hover {
      color: var(--blue);
      /* Blue hover color */
    }

    header .icons i {
      font-size: 2.5rem;
      color: #fff;
      cursor: pointer;
      margin-right: 2rem;
    }

    header .icons i:hover {
      color: var(--blue);
      /* Blue hover color */
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
      /* Blue hover color */
    }

    .login-form-container {
      position: fixed;
      top: -120%;
      left: 0;
      z-index: 10000;
      min-height: 100vh;
      width: 100%;
      background: rgba(0, 0, 0, .7);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-form-container.active {
      top: 0;
    }

    .login-form-container form {
      margin: 2rem;
      padding: 1.5rem 2rem;
      border-radius: .5rem;
      background: #fff;
      width: 50rem;
    }

    .login-form-container form h3 {
      font-size: 3rem;
      color: #444;
      text-transform: uppercase;
      text-align: center;
      padding: 1rem 0;
    }

    .login-form-container form .box {
      width: 100%;
      padding: 1rem;
      font-size: 1.7rem;
      color: #333;
      margin: .6rem 0;
      border: .1rem solid rgba(0, 0, 0, .3);
      text-transform: none;
    }

    .login-form-container form .box:focus {
      border-color: var(--blue);
      /* Blue focus border color */
    }

    .login-form-container form #remember {
      margin: 2rem 0;
    }

    .login-form-container form label {
      font-size: 1.5rem;
    }

    .login-form-container form .btn {
      display: block;
      width: 100%;
    }

    .login-form-container form p {
      padding: .5rem 0;
      font-size: 1.5rem;
      color: #666;
    }

    .login-form-container form p a {
      color: var(--blue);
      /* Blue color */
    }

    .login-form-container form p a:hover {
      color: #333;
      text-decoration: underline;
    }

    .login-form-container #form-close {
      position: absolute;
      top: 2rem;
      right: 3rem;
      font-size: 5rem;
      color: #fff;
      cursor: pointer;
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
      /* Blue background color */
    }

    .book .row {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: center;
    }

    .book .row .image {
      flex: 1 1 40rem;
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

    .book .row form .inputBox {
      padding: .5rem 0;
    }

    .book .row form .inputBox input {
      width: 100%;
      padding: 1rem;
      border: .1rem solid rgba(0, 0, 0, .1);
      font-size: 1.7rem;
      color: #333;
      text-transform: none;
    }

    .book .row form .inputBox h3 {
      font-size: 2rem;
      padding: 1rem 0;
      color: #666;
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

    .packages .box-container .box .content h3 {
      font-size: 2rem;
      color: #333;
    }

    .packages .box-container .box .content h3 i {
      color: var(--blue);
      /* Blue color */
    }

    .packages .box-container .box .content p {
      font-size: 1.7rem;
      color: #666;
      padding: 1rem 0;
    }

    .packages .box-container .box .content .stars i {
      font-size: 1.7rem;
      color: var(--blue);
      /* Blue color */
    }

    .packages .box-container .box .content .price {
      font-size: 2rem;
      color: #333;
      padding-top: 1rem;
    }

    .packages .box-container .box .content .price span {
      color: #666;
      font-size: 1.5rem;
      text-decoration: line-through;
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
      /* Blue color */
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
      /* Blue color */
    }

    .gallery .box-container .box .content p {
      font-size: 1.5rem;
      color: #eee;
      padding: .5rem 0;
    }

    .review .review-slider {
      padding-bottom: 2rem;
    }

    .review .box {
      padding: 2rem;
      text-align: center;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .review .box img {
      height: 13rem;
      width: 13rem;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }

    .review .box h3 {
      color: #333;
      font-size: 2.5rem;
    }

    .review .box p {
      color: #666;
      font-size: 1.5rem;
      padding: 1rem 0;
    }

    .review .box .stars i {
      color: var(--blue);
      /* Blue color */
      font-size: 1.7rem;
    }

    .contact .row {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      align-items: center;
    }

    .contact .row .image {
      flex: 1 1 35rem;
    }

    .contact .row .image img {
      width: 100%;
    }

    .contact .row form {
      flex: 1 1 50rem;
      padding: 2rem;
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, .1);
      border-radius: .5rem;
    }

    .contact .row form .inputBox {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .contact .row form .inputBox input,
    .contact .row form textarea {
      width: 49%;
      margin: 1rem 0;
      padding: 1rem;
      font-size: 1.7rem;
      color: #333;
      background: #f7f7f7;
      text-transform: none;
    }

    .contact .row form textarea {
      height: 15rem;
      resize: none;
      width: 100%;
    }

    .brand-container {
      text-align: center;
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

    .footer .box-container .box p {
      font-size: 1.5rem;
      padding: .7rem 0;
      color: #eee;
    }

    .footer .box-container .box a {
      display: block;
      font-size: 1.5rem;
      padding: .7rem 0;
      color: #eee;
    }

    .footer .box-container .box a:hover {
      color: var(--blue);
      /* Blue hover color */
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
      /* Blue color */
    }

    /* media queries  */
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
      border: 1px solid #000000;
      width: 50%;
      height: 65%;
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
      /* Set the maximum height as per your requirement */
      overflow-y: auto;
      /* Enable vertical scrollbar */
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

    input,
    textarea {
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
  </style>
</head>

<body>
  <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>E</span>vento</a>
    <nav class="navbar">
      <!-- Your navigation links here -->
    </nav>
    <div class="navbar">
      <a onclick="openCreateEventModal()">Create Event</a>
    </div>
  </header>
  <br><br><br><br><br>

  <section class="gallery" id="gallery">
    <h1 class="heading">
      <span>c</span>
      <span>r</span>
      <span>e</span>
      <span>a</span>
      <span>t</span>
      <span>e</span>
      <span>d</span>
      &nbsp;
      <span>e</span>
      <span>v</span>
      <span>e</span>
      <span>n</span>
      <span>T</span>
      <span>s</span>
    </h1>
    <div class="box-container" id="events-list">
      <!-- Existing events will be displayed here -->
    </div>
    <br><br>
    <div id="createEventModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeCreateEventModal()">&times;</span>
        <h3 class="heading"><span>c</span>
          <span>r</span>
          <span>e</span>
          <span>a</span>
          <span>t</span>
          <span>e</span>
          &nbsp;
          <span>n</span>
          <span>e</span>
          <span>w</span>
          &nbsp;
          <span>e</span>
          <span>v</span>
          <span>e</span>
          <span>n</span>
          <span>T</span></h2>
        <?php
if(isset($_POST['eventTitle'])) {
    // Process form submission
    $eventTitle = $_POST['eventTitle'];
    $eventDescription = $_POST['eventDescription'];
    $organizer = $_POST['organizer'];
    $eventMode = $_POST['eventMode'];
    $place = $_POST['place'];
    $meetingLink = isset($_POST['meetingLink']) ? $_POST['meetingLink'] : '';
    $googleLocation = isset($_POST['googleLocation']) ? $_POST['googleLocation'] : '';
    $dateTime = $_POST['dateTime'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "emsdatabase";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into appropriate table based on event mode
    if ($eventMode == "online") {
        $sql = "INSERT INTO online_events (eventTitle, eventDescription, organizer, meetingLink, dateTime) VALUES ('$eventTitle', '$eventDescription', '$organizer', '$meetingLink', '$dateTime')";
    } else {
        $sql = "INSERT INTO offline_events (eventTitle, eventDescription, organizer, place, googleLocation, dateTime) VALUES ('$eventTitle', '$eventDescription', '$organizer', '$place', '$googleLocation', '$dateTime')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Event Registered Successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<form id="eventForm" method="post">
            <div class="form-container">
              <input type="text" id="eventTitle" name="eventTitle" placeholder="Enter event title">
              <textarea id="eventDescription" name="eventDescription" placeholder="Enter event description" rows="4"></textarea>
              <input type="text" id="organizer" name="organizer" placeholder="Enter organizer name">
              <div class="radio-container">
                <label class="radio-label" for="online">Online:</label>
                <input type="radio" id="online" name="eventMode" value="online">
                <label class="radio-label" for="offline">Offline:</label>
                <input type="radio" id="offline" name="eventMode" value="offline">
              </div>
              <div class="location-container" id="placeContainer">
                <input type="text" id="place" name="place" placeholder="Enter place of event">
              </div>
              <div class="location-container hidden" id="linkContainer">
                <input type="text" id="meetingLink" name="meetingLink" placeholder="Meeting Site Link" value="">
              </div>
              <div class="location-container hidden" id="googleLocationContainer">
                <input type="text" id="googleLocation" name="googleLocation" placeholder="Enter Google location">
              </div>
              <input type="datetime-local" id="dateTime" name="dateTime" placeholder="Enter Date and Time">
              <button class="btn" id="submitButton" type="submit" name="submit">Submit</button> <!-- Change type to "submit" -->
            </div>
          </form>
      </div>
    </div>
  </section>
  <br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>about us</h3>
        <p>Evento is a versatile event management platform that simplifies planning and organizing events of any size. With its user-friendly interface and powerful features, Evento enables efficient creation, management, and promotion of events.</p>
      </div>
      <div class="box">
        <h3>branch locations</h3>
        <a href="#">kolhapur</a>
      </div>
      <div class="box">
        <h3>follow us</h3>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
        <a href="#">twitter</a>
        <a href="#">linkedin</a>
      </div>
    </div>
    <h1 class="credit"> created by <span href=""> web wizerds </span> </h1>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      let events = [];
      document.addEventListener("DOMContentLoaded", () => {
      displayEvents();

      const onlineRadio = document.getElementById('online');
      const offlineRadio = document.getElementById('offline');

      onlineRadio.addEventListener('change', toggleEventMode);
      offlineRadio.addEventListener('change', toggleEventMode);
      document.getElementById('eventForm').addEventListener('submit', addEvent);

      // Add event listener for the create event button
      document.getElementById('createEventButton').addEventListener('click', openCreateEventModal);
      });
      function toggleEventMode() {
      const placeContainer = document.getElementById('placeContainer');
      const linkContainer = document.getElementById('linkContainer');
      const googleLocationContainer = document.getElementById('googleLocationContainer');
      const dateTime = document.getElementById('dateTime');
      const onlineRadio = document.getElementById('online');

      if (onlineRadio.checked) {
      placeContainer.classList.add('hidden');
      googleLocationContainer.classList.add('hidden');
      linkContainer.classList.remove('hidden');
      dateTime.required = true;
      } else {
      placeContainer.classList.remove('hidden');
      googleLocationContainer.classList.remove('hidden');
      linkContainer.classList.add('hidden');
      dateTime.required = true;
      }
      }
      function deleteEvent(index) {
      events.splice(index, 1);
      displayEvents();
    }

    function editEvent(index) {
      const newName = prompt("Enter new name for the event:");
      if (newName) {
        events[index].name = newName;
        displayEvents();
      }
    }
    async function joinEvent(index) {
    const confirmed = confirm("Are you sure you want to join this event?");
    if (confirmed) {
        const paymentSuccess = await processPayment();
        if (paymentSuccess) {
            alert("Payment successful! You have joined the event.");
            events[index].joinedStudents += 1; 
            displayEvents();
        } else {
            alert("Payment failed. Please try again later.");
        }
      }
    }
    


      function displayEvents() {
            const eventsList = document.getElementById("events-list");
            eventsList.innerHTML = "";
            events.forEach((event, index) => {
              const eventElement = document.createElement("div");
              eventElement.className = "event";
              eventElement.innerHTML = `
                      <h1>${event.name}</h1><br>
                      <h2>Date: ${event.date || event.dateTime}</h2><br>
                      <h2>Joined Students: ${event.joinedStudents}</h2>
                      <button class="btn" onclick="editEvent(${index})">Edit</button>
                      <button class="btn" onclick="deleteEvent(${index})">Delete</button>
                      <button class="btn" onclick="joinEvent(${index})">Join</button>
                  `;
              eventsList.appendChild(eventElement);
            });
          }

          function addEvent(event) {
          event.preventDefault();

          const formData = new FormData(event.target);

          fetch('eventcreate.php', {
            method: 'POST',
            body: formData
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Failed to add event');
            }
            return response.text();
          })
          .then(responseText => {
            console.log(responseText);

            // Add this line to display the created event
            displayCreatedEvent(formData);

            closeCreateEventModal();
          })
          .catch(error => console.error(error));
        }

        // Function to display the created event
        function displayCreatedEvent(formData) {
          const createdEvent = {
            name: formData.get('eventTitle'),
            description: formData.get('eventDescription'),
            organizer: formData.get('organizer'),
            mode: formData.get('eventMode'),
            place: formData.get('place'),
            meetingLink: formData.get('meetingLink'),
            googleLocation: formData.get('googleLocation'),
            dateTime: formData.get('dateTime')
          };

          const eventsList = document.getElementById("events-list");
          const eventElement = document.createElement("div");
          eventElement.className = "event";
          eventElement.innerHTML = `
                <h1>${createdEvent.name}</h1><br>
                <h2>Date: ${createdEvent.dateTime}</h2><br>
                <h2>Organizer: ${createdEvent.organizer}</h2>
                <button class="btn" onclick="editEvent(${events.length})">Edit</button>
                <button class="btn" onclick="deleteEvent(${events.length})">Delete</button>
                <button class="btn" onclick="joinEvent(${events.length})">Join</button>
            `;
          eventsList.appendChild(eventElement);

          // Add the created event to the events array
          events.push(createdEvent);
        }

        
        function openCreateEventModal() {
            const modal = document.getElementById("createEventModal");
            modal.style.display = "block";
          }
          function closeCreateEventModal() {
            const modal = document.getElementById("createEventModal");
            modal.style.display = "none";
          } 
  </script>
</body>


</html>




            