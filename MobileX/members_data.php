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

$query="SELECT * FROM `members`"; 
$result=mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Members</title> 
    <!-- Linking the css stylesheet -->
    <link type="text/css" href="styling/memdata-style.css" rel="stylesheet">
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
   
<div class="membdata-part1">
    
    <br>
    <p class="membdatapart1-text">
        Registered Members : 
    </p>
    
    <img src="images/logo.png" class="membdatapart1-image">
    <br>
    
</div>
    
<div class="membdata-section-container">
    
    <br><br>
    <table> 
        <tr>
			  <th> Name </th>  
              <th> Email </th> 
              <th> Address </th> 
              <th> City </th> 
              <th> State </th> 
              <th> Country </th> 
              <th> Zip </th> 
			  <th> Phone </th> 
			  <th> Date of birth </th> 	    	  
			  <th> Gender </th> 	    	  
			  <th> Registration Date and Time</th> 	    	  
			  <th> Modify data</th> 	    	  
		</tr> 
        
        <?php while($rows=mysqli_fetch_assoc($result)) 
    
            { 
    
        ?> 
            <tr>
                <td><?php echo $rows['name']; ?></td> 
                <td><?php echo $rows['email']; ?></td> 
                <td><?php echo $rows['address']; ?></td> 
                <td><?php echo $rows['city']; ?></td> 
                <td><?php echo $rows['state']; ?></td> 
                <td><?php echo $rows['country']; ?></td> 
                <td><?php echo $rows['zip']; ?></td> 
                <td><?php echo $rows['phone']; ?></td> 
                <td><?php echo $rows['dob']; ?></td> 
                <td><?php echo $rows['gender']; ?></td> 
                <td><?php echo $rows['reg_date']; ?></td> 
                <td>
                <a href="delete.php?id=<?php echo $rows['id']; ?>"><button>DELETE</button></a>
                </td> 
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