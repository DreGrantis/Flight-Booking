<?php
SESSION_START();
$User = $_SESSION['User'];


?>
<head>
	  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
    
    
        
<body>
<ul class = "topnav" id="myTopnav">
    <li><a href = "Home.php" >Home</a></li>
    <li><a href = "SearchFlight.php">Search Flight </a></li>
    <li><a href = "Register.php"> SignUp </a></li>
    <li><a href = "Login.php"> Login </a></li>
    <li class = "dropdown">Account: <?php echo "$User"?></a>
    </li>
    </ul> 
</body>

<form action="Verify.php" method="post">
    
    <h1><a href="Home.php"><img src= "images/image.png"></a></h1>
    
   <h3 align="center">Log-In</h3>

        <table cellpadding="5" cellspacing="10" align="center">  
         <tr>
        <td>Username:</td>
        <td><input type="text" name="user" placeholder="Eg. Johndoe@email.com"></td>
    </tr>
         <tr>
        <td>Password:</td>
        <td><input type="password" name="Password" placeholder="Password"></td>
    </tr>
    
        <tr>
            <td><input type="submit" value="Log In"></td>
            <td><input type="reset" Value="Cancel"></td>
            </tr>
        <td>Not A Member?<td><a href="Register.php">Register here</a></td>
    
    </table>

</form>
<div class='footer'>
  <p>YR Booking &copy;</p>
</div>