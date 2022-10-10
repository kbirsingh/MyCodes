<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="SELECT * FROM `feedback`"; 
$result=mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title> 
    <!-- Linking the css stylesheet -->
    <link type="text/css" href="styling/feeddata-style.css" rel="stylesheet">
</head>
    
<body>

<div class="navbar">
    
    <div class="topnav" id="myTopnav">
        <a href="index.html" style="padding: 0; margin: 0; margin-right: 44%">
            <img src="images/logo.png" height="64px" width="100px"></a>
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="products.html">Products</a>
        <a href="services.html">Our Services</a>
        <a href="login.html" style="margin: 0; padding: 13px;">
            <img src="images/login-avatar.png" height="40px" width="50px"></a>
    </div>
    
</div>
   
<div class="feeddata-part1">
    
    <br>
    <p class="feeddatapart1-text">
    Customer feedbacks: 
    </p>
    
    <img src="images/logo.png" class="feeddatapart1-image">
    <br>
    
</div>
    
<div class="feeddata-section-container">
    
    <br><br>
    <table> 
        <tr>
			  <th> Name </th> 
              <th> Email </th> 
			  <th> How would you rate your overall experience with our service? </th> 
			  <th> How satisfied are you with our products? </th> 
			  <th> How would you rate our prices? </th> 	  
			  <th> How satisfied are you with the timeliness of order delivery? </th> 	  
			  <th> How satisfied are you with the customer support? </th> 	  
			  <th> What should we change in order to live up to your expectations? </th> 	    	  
		</tr> 
        
        <?php while($rows=mysqli_fetch_assoc($result)) 
    
            { 
    
        ?> 
            <tr>
                <td><?php echo $rows['name']; ?></td> 
                <td><?php echo $rows['email']; ?></td> 
                <td><?php echo $rows['experience']; ?></td> 
                <td><?php echo $rows['satisfied']; ?></td> 
                <td><?php echo $rows['price']; ?></td> 
                <td><?php echo $rows['delivery']; ?></td> 
                <td><?php echo $rows['support']; ?></td> 
                <td><?php echo $rows['message']; ?></td> 
            </tr> 
        
        <?php 
    
            }
        
        ?> 

	</table> 
    <br><br>
    
</div>
    
<footer class="footer">
  
    <ul class="footer__nav">
       
        <li class="nav__item" style="margin-left: 1%">
        <h2 class="nav__title">About us</h2>
            <ul class="nav__ul">
                <li>
                    <a href="history.html">History</a>
                </li>
                
                <li>
                    <a href="mission.html">Mission</a>
                </li>
            
                <li>
                    <a href="ourteam.html">Our Team</a>
                </li>
                
                <li>
                    <a href="achievements.html">Achievements</a>
                </li>
            </ul>
        </li>
    
        <li class="nav__item " style="margin-left: 20%; text-align: center">
        <h2 class="nav__title">Products</h2>
            <ul class="nav__ul">
                <li>
                    <a href="store.html">Visit Store</a>
                </li>
                
                <li>
                    <a href="feedback.html">Products Feedback</a>
                </li>
                
                <li>
                    <a href="order-form.html">Place Order</a>
                </li>

            </ul>
        </li>
        
        <li class="nav__item" style="margin-left: 20%; margin-right: 2%; text-align: right">
        <h2 class="nav__title">Our Services</h2>
            <ul class="nav__ul">
                <li>   
                    <a href="membership-form.html">Membership form</a>
                </li>
                
                <li>
                    <a href="contact.html">Contact-Us</a>
                </li>
                
            </ul>
        </li>
        
  </ul>
    
</footer>
  
</body>
</html>