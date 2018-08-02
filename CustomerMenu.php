<?php

echo"
<html>

<head>
	  <link rel='stylesheet' type='text/css' href='Style.css'>
</head>
    
    
        
<body>


<ul class = 'topnav' id='myTopnav'>
    <li><a href = 'Home.php' >Home</a></li>
    <li><a href = 'SearchFlight.php'> Search Flight </a></li>
    <li><a href = 'Register.php'> SignUp </a></li>
    <li><a href = 'Login.php'> Login </a></li>
    <li class = 'dropdown'>Account: $User </a>
        <div class = 'dropdown-content' >
            <a href ='ChangePassword.php'>Change Password</a>
            <a href ='Profile.php'>Profile</a>
            <a href = 'log_out.php'>Log Out</a>
    </div>
    </li>
    </ul> 
</body>"

?>