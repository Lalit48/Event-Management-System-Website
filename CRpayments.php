<?php
if(isset($_POST['submit'])){
    $full_name = $_POST['Full_Name'];
    $email = $_POST['Email_Address'];
    $phone_number = $_POST['Phone_Number'];
    $payment_date = $_POST['Payment_Date'];
    $payment_amount = $_POST['Payment_Amount'];
    $payment_method = $_POST['Payment_Method'];
    $transaction_id = $_POST['Transaction_ID'];
    

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'emsdatabase';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO CRpayments(full_name, email_address, phone_number, payment_date, payment_amount, payment_method, transaction_id) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssssdss", $full_name, $email, $phone_number, $payment_date, $payment_amount, $payment_method, $transaction_id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if(mysqli_stmt_affected_rows($stmt) > 0) {
        // Close the statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
        // Redirect to customer.php with a success message
        header("Location: homepage.php?registration=success");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>


<?php
// Check if a registration success message is present in the URL
if(isset($_GET['registration']) && $_GET['registration'] == 'success') {
    echo "Your registration for this event is done.";
}
?>



<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Online Payment-Page</title> 
  <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

          * {
            padding: 0;
            box-sizing: border-box;
            border: none;
            outline: none;
            text-transform: capitalize;
            transition: all 0.2s linear;
        }

        body, html {
            height: 100%;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            background: #d6eef1;
        }

        .container form {
            width: 700px;
            padding: 20px;
            background: #fff;
            box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
        }

      .container form img {
          max-width: 180px; 
          height: auto; 
          display: flex;
          justify-content: center;
          align-items: center;
      }

      .container form .row {
          display: flex;
          flex-wrap: wrap;
          gap: 15px;
      }

      .container form .row .col {
          flex: 1 1 250px;
      }

      .col .title {
          font-size: 20px;
          color: #337ab7; /* Blue shade */
          padding-bottom: 5px;
      }

      .col .inputBox {
          width: 100%;
          margin-right: 15px;
          position: relative;
      }

      .col .inputBox label {
          margin-bottom: 5px;
          display: block;
      }

      .col .inputBox input,
      .col .inputBox select {
          width: 100%;
          border: 1px solid #ccc;
          padding: 10px 15px;
          font-size: 15px;
      }

      .col .inputBox input:focus,
      .col .inputBox select:focus {
          border: 1px solid #000;
      }

      .col .flex {
          display: flex;
          gap: 15px;
      }

      .col .flex .inputBox {
          flex: 1 1;
          margin-top: 5px;
      }

      .container form .submit_btn {
          width: 100%;
          padding: 12px;
          font-size: 17px;
          background: #337ab7; /* Blue shade */
          color: #fff;
          margin-top: 5px;
          cursor: pointer;
          letter-spacing: 1px;
      }

      .container form .submit_btn:hover {
          background: #7ab8e4; /* Lighter blue shade on hover */
      }

      input::-webkit-inner-spin-button,
      input::-webkit-outer-spin-button {
          display: none;
      }

  </style>
    <link rel="stylesheet" href="payform.css"> 
</head> 

<body> 
    <div class="container"> 
        <!-- Add images here -->
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >

        
            <div class="row"> 

                <div class="col"> 
                   <img src="https://i.ibb.co/wWtkkRJ/evento-logo.png" altmethod="post"="logo">
                    <h3 class="title"> 
                        Payment Form 
                    </h3> 

                    <div class="inputBox"> 
                        <label for="Title"><b style="font-family: 'Times New Roman', Times, serif;">Full Name</b></label>
                        <input type="text" placeholder="Enter Name" name="Full_Name" id="Full_Name" required>
                    </div> 

                    <div class="inputBox"> 
                        <label for="Title"><b style="font-family: 'Times New Roman', Times, serif;">Email Address</b></label>
                        <input type="email" placeholder="Email Address" name="Email_Address" required class="name">
                    </div> 

                    <div class="inputBox"> 
                        <label for="Title"><b style="font-family: 'Times New Roman', Times, serif;">Phone Number</b></label>
                         <input type="number" placeholder="Phone Number" name="Phone_Number" required class="name"> 
                    </div > 
                    <div class="inputBox">
                        <label for="Title"><b style="font-family: 'Times New Roman', Times, serif;">When Did You Make This Payment</b></label>
                        <input type="date" placeholder="Enter the Date" name="Payment_Date" required>
                    </div>
                </div>

                <div class="col"> 
                    <div class="inputBox">
                        <label for="Title"><b style="font-family: 'Times New Roman', Times, serif;">Payment Amount</b></label>
                        <input type="number" placeholder="Payment Amount" name="Payment_Amount" required class="name"> 
                    </div>
                    <div class="inputBox"> 
                        <label for="cardName"> 
                            <b>Payment on</b>
                        </label> 
                        <input type="text" placeholder="phonepay/paytm/googlepay" name="Payment_Method" required> 
                    </div>
                    <div class="inputBox"> 
                        <label for="cardName"> 
                            <b>Provide your transaction id for verification</b>
                        </label> 
                        <input type="text" placeholder="Transaction id" name="Transaction_ID" required> 
                    </div> 
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAC6CAMAAAAu0KfDAAAAZlBMVEX///8AAADz8/NLS0vBwcHLy8v6+vrY2NiBgYE0NDR+fn7v7+9oaGiLi4skJCSQkJCkpKSsrKydnZ12dna5ubldXV0pKSkJCQlvb2/S0tI+Pj4vLy8aGhqWlpZGRkZjY2NVVVXk5OQW1EUGAAAM/0lEQVR4nO2d6YKyOgyGZ5BFQWRXUHG5/5s8TbCNzbQIMqMz3+H9RSnLI9ItScvHx6xZs2bNmjVr1qxZs2bN+nflPJavH4xJX8/4UPvYGbTPYUmrBpPXp8UD7T11dCwOXjWwlYitvatfK9vLM3K1r1nd9p0SSHp7212kTvVQduf0+VBEWEMSf0kBW6V+rVSdEat9ntoXQtJ9fLfTYPTFGPRCoYc/hr74GXR66r8FfXdYWXTU0bunDuUwFKdsMMOPHCfyFfpRnLVNZIbjbSCtox9tdzvsRqMfysCi2vDUF1VVXTLIjWBfdqmqRanQw6vM8ODAJSQzHb223a08jEZfBbbspeGps5cogWSq0FuV0WHCVqOjL213C1bfh+4z9PoxeqKjF7DlMXTWHvyv0Z1Ik29AX4rCuT/a0LMNlFB5GccVyUPhwJYB3dfv5kxBd9rz+k51Y0APvKYJzjb0SOQ2qbpKLFJNCcmLAb2p7+92bp0J6NFZq16PrgEdVdjQUZm6Ar4rjUoydPeo3e4cTUFfa9faTEZHVlOT1KFvtNutZ3QTOnRHu0aTGlJCz1VvNtuKkkzNZyObzm38NvSsKIoaa6LAE4p09FNY3NSKzCZX6JHr3RS8DR37W57hCol2WlevU23I9PvRyxn9e9Dj43a7I3RflVpCPx6222MCOaU4eBP6X0eab0EPXCEqnFkRhnWjo4eeOCQVGUULB8MhRarf7s31OorGpoTedWRgiyrC+veh0wCP0HMDevH70E1P/X3o9XFzpxVD96W6K4fi4M9SJD8SsbU9cnSRU/ajr+7vdqynoPuNqynS0bNw2am4QhJLbQvpVGx4oY5+ikVG1Yse6Xdr/AnoJvF6HXVnDINkBlu5jk6yops0o/8ddN8oJ9TRd0KfHuQ8QN/hkQrdl6d0/TLHfLdn0I/10qxwr6PnUKISUWDDphd9jYVYoQeFOCNT6PvQcrv6OBr9gQgdgdGiUfaiU8/XZMzo1w+hk33a7UVnTdKMztH3o9EHvDCIjq1pPRp9PxTd99yHihT6GgpTKXaVV4V+ES1nfJFby66/C8fFsFXC1lqhR703Qnm2qvNpUb3eqH2x4aGxEspMSG+RtUkyodMAj9lh3qI/jE5eAXphlr0vzEvQnTa8KdZ7M34m9hVkOMJ+7Bn2NWof2dxDSKYit+vvkgkpVcmgkHfKsJcbw9ZgJ69B0UXefaubK3zqw6Do0ZPzrlX7WPeLHjNzyHS5ytxbTEF3KnnBFUMf6tXoRzfV691QafsydKsb7Pehc8/uAHTy+74D3UlrqUxZdbO6qIuVjp7BIWnjeQ2NTa9g6W1HowdLect41C/h6KaHS/U6ZZj6MChmcxyA7h1kxuDwBiO6wty9DL1Rf+jgnuNfR49Up32DLsehLwzuQ0sjvtzkY0f0tQG9ZOgwfi3QF6mMYePQ/UB6TbykLoqibO6TnUHXhI6nYff3qra8tTijbaQHhqFH6K7ZSfQIingZijNiyMi2o9FJWELJx+UziwBDN4mGGiRCR7kKvcuFEroe7/I1oW8J3WSH+XZ0AH7CXPrvoEfQS9mZXpjlGHQW8dLo+7yd9uuwhFaIDlvDx6ZJERbLq0o2peZ3gWQZQ08Vh99gQup6viZ0twZfDAx2qUsfrMW5GH2wl93dsAL0vez+FgkMYXFE6uDgdOjYFIMFD9YoJBQ9cGbMYGLxMCgaalj1bB/mQQDVjP6D6NfeYwidGicTev4G9GORxD3K3LJ0sXDWIpWcbOjXUigXhyxdfV9rAK7EfrfdSPRrK85LR1mPBtscJ1eOTDFgYkPadXqhD3CJTFecjD65SWIy9Ryrcf3dGb0X3fTCIPDdKAne+suT6Js4y7L0ol1/B/uyNhFKYYt+J0P34iSJPR09WCY3tZkUDk4q2PL0p36FfSneaHBrqmhwNoCvP9wdlVCq0k3oNNRg9nUUxTiwmF5mEQig1A7uwzD0uxG1Cd1kQkJZvRrdy8HQ1XPl6OM9eIPRrU/9LejKIbMBuIieKxFSp51y2YSBXL0wqUKneoWh3/XcAT1Uv2Qcup+lN2UYz+CmmnIUbGBfQeXm1HXwWnlIZ/3N5Wn0F53EjhZ/+1Xmtq4qpidxgbYcH97wQNb+CgkrDRYnRSWUxB49VY6oavIoickeykNKBqKbBniEPn2A9++gD3lhED17jH5Xm6skWRq7FwZ+yeB6nclUTNuuhOZaCXXVFqKvM1lMUUGrFVPUJbu/KBbsbAleDSqmERTn7Em/qbFyRBEIc1mTfb3Vr2UdZXTWx51Kfo+P19gkoZjz0RosSLI61VnE3STXwD+Bbn9hBqCzasb6wmAJpbka9aixEckvVYcUCp2fxcm9cuiKYmmEjHbfi76ma4GwYj3l4jT8K0+t3KpUBxcUY7m8qtPKwZ1evQ/DZfLgWdFNohiHrjbUHz3JU+/Ps51eJqPzcTy61atBesKrMQ7dNN/0F6AfTOisNTWhm4wsA9BDndBTXYKRwYJoQsrAqIM93wbsPlhqy+XNhFTeyioYekppUYrFVhfeUEkbVIJW3QUk1wo9gKu0aDPCXLAyYWlEAxOOUsGElBTjgwXRcOfATe/GG3eTBg2Pnon6MNh9SdSzpq4ulVCyF2CTSpXjdUr8OjkfNwyd6p+Cc39+mQ1mil+/q1y+cWz6R9GVa6BDbx6jm14YKzrZMe7ikXTnXfgkOjlkEH0LLpcSyuCxldF76JApMhXN1yr/DAkmx5SBjt6s5VyZbtBaSw8MGomueCm0eZXSIfPsUIPN1bgTM9yZPMAoZkJCYUO6NtyOdc4mjU0Ho3t6ksTsMCh8TWrD7aZPM3kJemG43XeiOy9G1ycod452KLWD42F8FcnggpH3WMl5owUUxB0ka4h2aCDQIcSORgqhCzQR+wIHo5NmGYiMWKFDKIOHZrGKwidUGEQAM1Qr4N/XMryhhLvFgzu9K+3H7/WA3W6+oMnmSKI1J0jM0stUsMpRBZVcpviSKGwNO412cymJQnkYev8AD/WdXo0/ha6vyvMA3drzGoeu7j4NPa6LuoZAwPog0bugJKhwdnlz2/pMb2X1FjEoym+NJfkzhoz8dpW6WCj0Zi3KX2VAX8vy2uSbCegkv5bo3CxAooYU/wSTMYBVjoHtUqTp6KznaJRpmkk/+lBH+/8WHVqZLYsuZTJNqTKhU4zDS9CdXIbeO1n4RUsskikGEKrQezouVU0l/pxaLdcAsfbLLgppqV3vvPuKviih7H77DBkWWcLEKkcU9RdZ7BfK022OZMx41r5ul2maST+6KTCW5NrQv8ur8Y+hD31h2Ijaio5j00a5ZoaPTYdOZFPTwnEiGxfVSYtYzlUl28xdTC8cHOjoFVwwi8fPNx06fZBkbWtRreEmzHBXGNYROD+5jNM4dGutj0oMNzGt+/VNSyDM6FZ0NqUqtL4wo8amg6eFdwwqpvcsD4nxt9OkU0S/lrI0RrBFSyN1E8R1dJwlnsiyGrajopCGTMa/PXA5yb5UM+hvjnaxRdGlpThOTh+UZ3SVI03Lp3o9Enu81efus4rUPP8R6GY9uzwfrfRhnfloapKeGJv+DHr/pM1fg54pdLJjMPQB3a9n0R8ssoKiygUtuBTesIRGOYclWEob+llrt70WrUewEEQ2Gf3B0jYMHY698+BBcpeLQtgtjGxC3200od0OSmh3xjT0AQsKsT6ANUbAhG4SeQV+HJ21RjP6S9DxhTnL8SVfssyKvgq1aTJkVkL0SJRfL92+4ql7culGvlCcFb2GJeNuq9rAMnIUgISVy2mzPWx2r3jqbIA3AJ3a1S4URkf31Nju55/6aHRaruR96KanTuENZEci9OYXoIP1t0nUKqAonAJOtU7YSG8Lop8hCT6WIgFjcPoY/eSOMSENX89xu1ptPFU4uwcOS6zSkGGzX622uUI/iuQBF3XElcwPj9F3cNjgRz9pFc3+lUpQrOfbj456zQKgvwa9f2FnWjyrH50570zjjbvpBPoSAqhxY9Mhy2l3s9ebpvHo0oh+qsXBOIbdi60Ke+5eJa6w0NFXIveMlVCjbhLDAtyZvrD2cjz6g0XMEX0Lnx9gayFlsEx5N0PGkauRwwrlDhvlFVput3J5eYKSfP26nPlIdIOeWJ6PZFr3i8lVbrAn9Gb0KSuVDP5MgsnSS8PS1obOGlImmvn4LPqQj1O0l6o6YzBiJjOvhUKHL1Rc8qvMoY9TtAp9DbnY1jrq8pn+1DGjf9ouRx/ySRAnchx0rWJZvctFdPz8Rypz6JMgXaFD9COtZK5ut91p6MHiMLY1fSDrKOlToaNMH2L5UOif6oVnHng2B+8nvyEzBZ21phx9fLDg69CNT11Fl4609I7+1BPPpdl4pk89odT3nvZdxKz+bSda/OhajfnU0xMf2LLmmj6wZcrwbRf4GPWBrVmzZs2aNWvWrFmzZs2a9Qf1H/BoHso0HZ9NAAAAAElFTkSuQmCC" alt="Image 2">
                </div> 

            </div> 
            
            <input type="submit" name="submit" value="Proceed to Checkout" class="submit_btn"> 
        </form> 

    </div> 
    <script type="text/javascript" src="payform.js">
	let cardNumInput = 
	document.querySelector('#cardNum') 

cardNumInput.addEventListener('keyup', () => { 
	let cNumber = cardNumInput.value 
	cNumber = cNumber.replace(/\s/g, "") 

	if (Number(cNumber)) { 
		cNumber = cNumber.match(/.{1,4}/g) 
		cNumber = cNumber.join(" ") 
		cardNumInput.value = cNumber 
	} 
})

    </script> 
</body> 

</html>