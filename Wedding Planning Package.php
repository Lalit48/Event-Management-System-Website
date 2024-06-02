 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Event Page</title> 
     
    <style> 
        body { 
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start; 
            flex-wrap: wrap; 
            padding: 20px; 
        } 
 
        header { 
            flex: 1 1 100%; 
            margin-bottom: 20px; 
        } 
 
        main { 
            flex: 1 1 60%; 
            margin-right: 20px; 
        } 
 
      .event{ 
            flex: 1 1 30%; 
        } 
 
        .logo { 
            text-align: center; 
            margin-bottom: 20px; 
            background-size: 25px; 
            display: flex; 
            display: flex; 
            justify-content: right; 
            align-items: right; 
            background-repeat: no-repeat; 
            background-size: 70%; 
 
        } 
 
        .social-links { 
            display: flex; 
            /* justify-content: space-around; */ 
             
        } 
 
        .social-links img { 
            width: 30px; 
            height: auto; 
            margin: 10%; 
        } 
 
        .pricing, 
        .event-overview { 
            background-color: #f9f9f9; 
            padding: 20px; 
            margin-bottom: 20px; 
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
  color: #007bff;
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
      
      
.btn{
  display: inline-block;
  margin-top: 1rem;
  background:#007bff; /* Blue background color */
  color: #fff;
  padding: .8rem 3rem;
  border: .2rem solid #007bff; /* Blue border color */
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  background: rgba(0, 123, 255, .2); /* Blue hover background color */
  color: #007bff; /* Blue hover text color */
}


    </style> 
</head> 
 
<body>
    <header> 
      <section class="services" id="services">

    <h1 class="heading">
        <span>EVENT</span> &nbsp;
        <span>DETAILS</span>
        
    </h1>
    
    </section>
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTHBP8pbIfCJaDfCX-QfWzd5ZqlqDd67s-cbeNaS2H7wcqRXwX9" alt="Event Image" hight="30%" width="100%"> 
    </header> 
    <main> 
          
      
        <section class="event"> 
            
            <h1>Wedding Planning Package</h1> 
          
          <h2>Pricing & Tickets</h2> 
            <p><B>Price: $90 per ticket</B></p> 
            <h2>Event Overview</h2> 
            <h2 style="font-style:Cookie;">EVENT IS A PART OF 
HAPPINESS...</h2> 
            <div class="pic" align="left"> 
 
                <p style="font-size: 23px;">A graduation party is a more 
traditional, formal 
                    <b>Event</b>.<br><br><b>Venue:</b>Sayaji 
Hotel,Kolhapur<br> 
                    <br><b>Invitations:</b> Card Invitation,Online 
Invitation.<br><br> <b>Decorations:</b>Presentation Materials, table 
                    Training Manuals and Handouts,Seating Arrangements, 
Branding and Signage, Tech Equipment, Feedback Tools, Professional Decor: <br> 
decorative 
                    elements.<br><br><b>Refreshment:</b>Food,Drink<br> 
                     
                     
                    <a href="Wpayments.php" class="btn">Register</a>
                </p> 
            </div> 
             
 
        </section> 
    </main> 

    <section class="event-overview"> 
         
        <div class="logo"> 
          
  
          
              <a href="https://imgbb.com/"><img src="https://i.ibb.co/9qNpgz6/evento-logo.png" alt="evento-logo" border="0" width="300"></a>
        </div> 
        <div class="info"> 
            <h3 style="font-size: 23px;"><b>Location</b></h3> 
            <p style="font-size: 20px;">Sayaji Hotel,Kolhapur</p> 
        </div> 
 
        <div class="infor"> 
            <h3 style="font-size: 23px;"><b></b>Share With Friends<br></h3> 
        </div> 
        <div class="social-links"> 
 
            <a href="https://www.facebook.com"><img src="data:image/jpeg;base64,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" 
alt="Facebook" width="30"></a> &nbsp;&nbsp;
            <a href="https://twitter.com"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAADMCAMAAABp5J6CAAAAclBMVEUdm/D///8Alu8Al+8AlO8VmfD4/P/7/v/t9/7y+f7i8v2z2vnK5fui0fjc7/38///U6/xWsPOVy/fA4PpHqvIinfA3pfGIxfa22/ltufR2vfXQ6fxgtPMtofF+wPVDqfKOyPap1ficzvfE4/tstfNfsfPWKkv6AAALw0lEQVR4nOWd6YKqNhiGIQsCAoICioqKztz/LRZ0VMISErIAp++fttZBH7N9WxLD/J/KmPoLMMk+7daF7/vFehfach45d3DLu2cpQAi8hRC+Hn3PEn3wnMFX4TaGAEKjKQgRjO7BSuTh8wUPbimCuAX9FoYo3brjHz9TcGsdAdAL/Wl58Lvj7PPr9281S3DHT0F/WxPtDtKCA/0Upe93zxDc8vPhxv6qRGcc7EEG0P39H/MD3115sJ/oscfwXPeIoZF8ZoW5gdsZYyevC4Pj0OoeHI3y94Q/nxc6wIWXSAGtE97mfgnmO9pjvTN+LhDw2zXa4F4sn4dRq+M47Epg3/dUp4jByxbA0ffVNvgVXJRQDctO27YKB3nc2d3DS/IZPODxfb0FvkMG8NXBUeRh/tFdF0zC5iPdewq/RlC9wdvgaTVXHJQSduswvpt/0ImB7vpX0tyFp9r/bYJ7qPpp8MnULR+JtXclDNZ/T9s8bjloGLwgq39eEzx6vTkJ9OB+VIi395t85fkRahu82HDqH9gAd9Hfu3JJbi+j5HBXfTVLUbOpX/r0hpca4Nv3F4CpY+rTjuKG8aL3vA7P5Ec2wPPvG2N95KEsaoqShl1Ggoe1HgdjXSacnUtr716B5nRNgm/rQw1Gesg3Z0kDnMbdMk1I8JR4tybyrQbutjFKgNuNLqelt59E7FRG7nP7YwnwXfO31zC3W1flA7yz5xLg+1ang6nq9Vx9Rwdt7mBLgsftHx8rtuFceSt4H/e5wW3tfkFIgG+Sjr/DCUtcZ7Qy1SMcHEnucJ9D5JNd3e3+U0zaelJ1QmqxMdjWPy4o3VRQjnmTBPe6f30M7qYqRWo7OoY1B/t0S19uamI3wFuT+lvgqIg7VNvgIH0HVd11ZvzFnwzwHLt18HvveAOKDPez0hEObtVnrE7+2ah5bOhlxNXB26vZRzBREZqwlTb41XMP95eXWhtQ8C8cUQc/0n5/UMgHvylt8ASgdqr1Y4zWwelLC8qk26+9zrMy4bwraTiwpsK0FcUUk+q1rEufEcsBXq5rhVTwi3r3pAFQC8PygJfd/SzTdNfd04mGY57cXoIJNUfFpVC9H06KiEYwLme1vx5MTLLK19zTSeuVzYAh/j6XlGdRbK62vjfBTYCzJnFgJlB081WiFRyR3KSTwjroYCIhrRho7emo6WjVwQPmx2CYCnvpvS6RAmFUND++Dm5xdD4MM8FJjm1GkSPQXouGQk/9gvAmVFrIsHhKUmfylwDnNKWgUQiAa5vUQd41FxPgvLl5DJLxS1s+/HwpAlFnxyTAXe5GwCAdi94V2VSgvqIgMoU0phVK9M0Ibp6ZdLxwr4lNgjMZrS2B1OePTNk6wHHca2qR4MwmTEMgufEaczrAcd7fII3CgLHfBkOYeVyrm63DKWUH349fXCG4+hw2jQ5wnPR/oQZ4IBINKle3zGMd7Y6Orp70D8BmuZdY0hZDkO9PbEFJDcsZD7h4fSEA6Y2FXYMBwwMuxUuGMD0+hvo8l2MwTlzgkkrtIEx+C2pqXYOTwgUub+xhYORZP7wGt5QPfC0zzA8BTs53r2tV0RCI4FjOKsmuximNG5ict7uANOk1hJ44wZVkdsqFDoAk2hffXbEaFnJ2y+2pi6pOiCt8hBBOo/Nlq6GQM+9fVrvALfVfqez+I7ZZcSvtdx86952ddCd3VCnt5e7ZcKehvFSHMGUnWc9OQw0FxRqEO2pYB8Cdq+7ctQpBSrVW397SQMOcq1z9uw8pm2pPenN6SgQpKb4auEXO/d7UX1tcHZmjLvAgJt/nLb7NIaU4rw5ugJgIkYeLJ6f4xTVwN8EY5H7Nk3PTRa9qNB+lDv6KdAPjfPi83zpPUIomT3k/dx3ceUXBymbHsX/6m+nuCyanGW7EcvbdfFW50NdL8QissrtP+NXFRLNfCHAy/Pf0oBFK0sXOcNQDAAYL/AS38U8p+OjFHlPntiDRorx18MeiF6+WcHMDcS94zy6kxYoShmg4KbrKUvSIOqmT4Mp3v2kVvbqeAJd1UsM81Nor3w+ut7xUtTA1ZUvbOL9wUee25lEJ/1CTQ/qRVSR48A8N8oFzmxoxN/Xb97UJ0AvQGuD/zryOEyp3K8qqfAO/LtHNlza42u2eGjV0NFsT3FlwxIUQGig2bCUUBGob56ShId4GdxYceagJUrJH3eCm/09M7Ghol1RH7my5Qbaa4AB3F/jYovU5CWZtrkFwdcU/+jR8zmgXuLP8zg4Gq8c78+Ph0u034uhZDvDFm+xg+JSmnoqIhQ/z4Z7eB776XbIBVztGnRfcdOIFk7OcHd1b/CN25vekwgbDzpD+qwSWSz7kig+Al8v5Qmc4xHIgF+3yiE20TPIry5ZH+q0ZFx211bLFduDgwHUhxfLIscG00XPonpRgcQOdaWpjuCBms1+Y4U7PFbKDly5LvKRGxzHb+QVMVwKtF9TfGfwTdvDnhVQL6fAp4wGLrJdAPe/VWQA78+G57LdfrbxjMn92Wt3uSPBSziFLaPcMTq/BcPo48FJWeM80HV0zQrTtwzzgTiuQsQket3hqvH6xNzgdPATpee8fdg/Pe+wOxS27JpjhcsnJhA3202joXT1/ljADWKn658zzahwNPgCu+yBNMTG6Jyzgzoz7dVvwxs49NKsvqsiTWq3MCS50EpBm8d1IOLSOaz41VkS0PUf84IpvOZAoxHcq9KDlpvaaA3liyBPygbsLmdgHChn5wc3bIshpW8VHgms4I0SCEt7DcRm8syVsTuKc2djAR57dqVPDtT6jwK25p4y5jHQO8NlvSGsfIi4JXOtZ6Pxq3sUqEdz0Z2zAjeno7DG3Ga/maNRFdMzBxtnWQY2Y0bnA50pOO19ZDnjZ22dowmE48hYLnrj6HCvZR9+3yJVQ2Om/oGxAo1YyfnDTvc6r0XE++s4SzhTSaj+ngd55D4ga8NJXm1GRgMjFc9zgpnNr3ZA4kTpuFVcJbppBBuaADjmjbOLgpnn6nR4dU06bVQZumuFx4rQphmKXro0FN037nqIJm52pUlcJeKnwVl2AOw236KWSQuCl7PUxR9VVuBjrNOvGxFzkgldahYf75Ryn+g4Oal3UNw34n2xtxTGAJxHeI3nga23GrJDh8pYscOu4LG5Z4J6+nTtyuOWAWzd95Y6SuKWAexodNu6saJ/EwW19o9vAjQuGBSQKvikSfaYbhoUM5qcEwR9aY1FQ0j3YlcRs9bPOQBQ2BP0SQgLgQaY1FAM7L5wdrdHgQYa1+mUgEoo7tDQS3DtrdkeRpOX7ozHgmyLVHWQWd0PFwYM91h10gkkom5sX3PFTpD2lAKJxCVFp4HYRIf0RRonW2hjwVXiP9Le1UV2bLnP15gO3guKYT7TfDB7lrmKs4Ja922b5VKFUQ+RG+0Fw2+74TS3HDnb3yzmttiBNA11xZ6OzwAzgQZZGP8f97X73i8K/b7f748/vNTeeMePJmI3KRhWNndPBTfNQDmAI4HeLGZ7B/jIMLgoWMRLcdPbG5DnAhkCsZjInwU3TzeZU6VCuYQVv/flI8NLtmM9JEBDvlfZyEtzcHOZR5AFBJtXxHgSvvK7pT4LA6CzfIRkCLw1TP5m01TGK9GB3WG7r6dAhihRP5TTwcllPp7BQMUAZ9YZ69eCmeTrrLnDBwNirM0+Zwct1fZ/os1cxBNdCkRPWq17vbHWI9JhzGCRHfUP7I5pb6m5TqLjLY2hEa719/E8D/vhpnysb7rgc2PFd54RW12AExvL2KVRwHEjZl6LJqE3G0FN4ixOJSxwuZ7P8Z63DMO0Xa7DR3V2qaIxww5f9GyS/N2+ScV0XR3jZcteXGI4PRVUNjfLf22Ny6EqcCYUq+PiTAs62L5FL5iS6FIF6f5NRY3Jnlu35l98coNcP0PsT4OeNt+Xb8ui43bkO22GKmjQ+P25ZwaO4ZdE1AQhVv8ErZPf3L9VLSRpl+/v6ZFuzQn5JQtXTauW4obc7rNdF4ZcqisPucXKdlerokZAk1rIuS/9b8P8ABQeukkyIrV0AAAAASUVORK5CYII=" 
alt="Twitter" width="30"></a> &nbsp;&nbsp;
            <a href="https://www.linkedin.com"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEUKZsL///8AZME7eMgAWb7i6fUAXL/Az+oAYsFjj9B1m9QAYMBGgswAVr0AXb8AWr5ZjdBWh80ZbMTO3PCzx+drl9T2+f2Ssd7G1u0dbsXF1e3w9fs2dsfl7ffV4fIocsaApNmowOSMrNyrw+Wbt+AAUryFqNr2AL+0AAADz0lEQVR4nO3ca1+qMACAcZiA5ATMW+a98vT9P+LROkXiNruMLXae/2v1xyOy6QCjCAAAAAAAAAAAAAAAAAAAALBGnPjeiPbkZSJ36/W4qmSQlbIYTTfxyXx72CXBNYpkv4o/mAwDayx7m7hhWoWUWM2afUebcTiJ5UAReDweo1AS5VAZeNyLgXxQhZxrCo/Hou+NsyJ70AXGcS+EnSgifWC8SHxvngXyzlAYhzCeJqmp8FH63r4fE8IUGC+6P9YI3VTxatP9AzFXz/bvCt8b+GNyT2HX5aov3UEVip4xMO3+SBNlxsJp6Xv7fq5amApn3Z/xzQfivAzgW1tUrPSFDwF8SM1zfiDLisUk5KPwREjN5/QpgKnilbhXrmP0uz/bvxPR9jLwEFDgacm7+Ut/c5v53ijLSvHw4WhMB0Xue4usE2U1vOtv03Qy3e+S8PpeCJlVSZKVgcyCAIDfT+SyrI6Ok0+As4+QVbGbHabLxWTRf7qb7YrMa6XIdZpbpX3k2QPzSuyXjV8rk8dd4i1SjG90bs+3SQx1D7yvH5gnt0vlr830ufK06mNYMW2cl8nUm370/laIYmQ4W3covSwaGAob68FZ/1phudOuiLyYDwoPu9FeoSiejX0nE+H+Z4u1QiHNO/DVfOh8hdJWYT42LLx+NHN9XtlSoVxrL8tpGjheILFTqFmvU7txO6RaKZT5Jz+ir9xeiWSl8M9nBpnayunVqzYKh9eniXNTl8vpVvbhFwOP74nDadFG4RdGmbeXdriibqPwG2budqKnQofXQHgqjIfOhlNfhX1nX958FcaZq53ordDZOXRvhVNXX8DtF87TNP3EDLlyNZpaLlwOxkWSJIWYXX20q4vIrRY+jat/S4tCVmPjBWXuDkSLhave2V02ojDeBxAfHK1n2CvcZs1vYhcXQJxZOhpqrBWqvofpr7fSPOE3F84vTgKcXvze9AxHvy9sFY6U40Zleo6jMxmWChfqHWK8n8PRdGGpULe4lBiWqHZdKtzqRg3TkxwtudkpfNbN3tKwSNWpQu0hJQyrVF0q3GgHftPNcV0qXOp/sBdhFBou6jcMpl0qNNxrmlz8XUMnC/fBFw7067uGG40ptITCGoVqFLaPwhqFahS2j8IahWoUto/CGoVqFLaPwhqFahS2j8IahWoUto/CGoVqFLaPwhqFahS2j8IahWoUto/CGoVqFLaPwlqAhc1/4NHfx2Qq9H7lXhT1dNaNf1HqDc/djt4YrroXa+3rtx1Wb4PWlQfq/zPrWy8PAAAAAAAAAAAAAAAAAAAA4D/0F5lQSZ+5G/qbAAAAAElFTkSuQmCC" 
alt="LinkedIn" width="30"></a> &nbsp;&nbsp;
            <a href="https://www.instagram.com"><img src="data:image/jpeg;base64,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" 
alt="Instagram" width="30"></a> 
        </div> 
    </section> 
</body> 
 
</html>