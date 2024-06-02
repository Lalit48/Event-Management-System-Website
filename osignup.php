<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'emsdatabase';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO o_register(username,number,email,password) values ('$username','$number','$email','$password')";
    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn) > 0) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>orgainazerpage</title>

<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #FF1F00;
  background-image: linear-gradient(45deg,#FF1F00,#000);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="Sign Up">
          <div class="login-header">
            <h3>SIGN UP FOR ORGINAZER</h3>
            <p>Please enter your details to register.</p>
          </div>
        </div>
        <form method='post'> 
          <input type="email" placeholder="Email" class="signup-form" id="email" name="email"/>
          <input type="text" placeholder="Username" class="signup-form" id="username" name="username"/>
          <input type="number" placeholder="Phone Number" class="signup-form" id="number" name="number"/>
          <input type="password" placeholder="Password" class="signup-form" id="password" name="password"/>
          
          <button type="register" name="register">REGISTER</button>

          <p class="message">Already registered? <a href="ologin.php">Login</a> here</p>
        </form>
      </div>
    </div>
  </body>
</html>
