<html>

<head>
	  <link rel="stylesheet" type="text/css" href="Style2.css">
</head>
    
    
        
<body>
    
<ul class = "topnav" id="myTopnav">
    <li><a href = "AdminHome.php" >Home</a></li>
    <li class= "dropdown">Manage Customer </a>
            <div class = "dropdown-content" >
            <a href ="ManageCustomer.php">View Customer Info</a>
    </div>
    
      <li class= "dropdown">Manage Flights </a>
            <div class = "dropdown-content">
            <a href ="ManageFlights.php">View Flight Info</a>
            <a href ="ViewBookings.php">View Booking Info</a>
    </div>

    <li class = "dropdown">Account: <?php echo "$User"?> </a>
        <div class = "dropdown-content" >
            <a href ="ChangePassword.php">Change Password</a>
            <a href ="Profile.php">Profile</a>
            <a href = "log_out.php">Log Out</a>
    </div>
    </li>
    </ul> 
</body>

</html>