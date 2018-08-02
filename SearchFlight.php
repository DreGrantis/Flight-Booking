<?php

SESSION_START();
$User = $_SESSION['User'];

?>
<html>
    <head>
	  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
    
    <body>
<ul class = "topnav" id="myTopnav">
    <li><a href = "Home.php" >Home</a></li>
    <li><a href = "SearchFlight.php"> Search Flight  </a></li>
    <li><a href = "Register.php"> SignUp </a></li>
    <li class = "dropdown">Account: <?php echo "$User"?></a>
        <div class = "dropdown-content" >
            <a href ="ChangePassword.php">Change Password</a>
            <a href = "log_out.php">Log Out</a>
    </div>
    </li>
    </ul> 
</body>
   
    
    <form action="SearchResults.php" method = "POST">
        
        <h3 align="center">Flight Search</h3>
        
        <h1><a href="Home.php"><img src= "images/image.png"></a></h1> 
        <table cellpadding="5" cellspacing="10" align="center">
            <tr>
                <td>Trip:</td>
            <td>
               <select name="Trip">
                <option value="OneWay">One Way</option>
                   <option value="RoundTrip">Round Trip</option>
                </select>
            </td>
            </tr>
       <tr> 
           <td>Depart From:</td>
           <td>Destination:</td>
           
        </tr>
            <tr>
             
                <td><input type="text" name="Flyfrom"></td>
                <td><input type="text" name="Flyto"></td>
            </tr>
            <tr>
                <td>Departure Date:</td>
                <td> Return Date: </td>
                
            </tr>
            <tr>
                <td><input type="date" name="depart"></td>
                <td><input type="date" name="return"></td>
            </tr>
            <tr>
                <td>Number of passengers:</td>
                <td> <input type ="text" name="passengers"></td>
            </tr>
            <tr>
                <td><input type="submit" Value="Search"></td>
                <td><input type="reset" Value="Cancel"></td>
                
            </tr>
        </table>
        </form>
    <div class='footer'>
  <p>YR Booking &copy;</p>
</div>
           
</html>