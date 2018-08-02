<?php

SESSION_START();
$User = $_SESSION['User'];
include('CustomerMenu.php');
?>


<form action = "Registration.php" method="post">
    
    <h1><a href="Home.php"><img src= "images/image.png"></a></h1> 
    
    <h3 align="center">Personal Information</h3>
    <table cellpadding="5" cellspacing="10" align="center">
         <tr>
        <td>Email Address:</td>
        <td><input type="text" name="user"></td>
    </tr>
         <tr>
        <td>Password:</td>
        <td><input type="password" name="Password" placeholder="must be at least 8 characters"></td>
    </tr>
         <tr>
        <td>Re-Enter Password:</td>
        <td><input type="password" name="Password2" placeholder="must be at least 8 characters"></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="FName"></td>
    </tr>
        <tr>
        <td>Last Name</td>
            <td><input type="text" name="LName"></td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" value="Register">
                 <td><input type="reset" Value="Cancel"></td>
            </td>
        </tr>
    
    </table>


</form>

<div class='footer'>
  <p>YR Booking &copy;</p>
</div>