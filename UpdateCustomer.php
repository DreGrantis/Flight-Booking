
<!DOCTYPE HTML>
<?php

SESSION_START();
if($_SESSION["User"]==NULL)
{
    $_SESSION["User"] = "Guest";
}
$User = $_SESSION["User"];

?>

<html>

<head>
	  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
    
    
        
<body>
    
<ul class = "topnav" id="myTopnav">
    <li><a href = "AdminHome.php" >Home</a></li>
    <li class= "dropdown">Manage Customer </a>
            <div class = "dropdown-content" >
            <a href ="CreateCustomer.php">Create Customer</a>
            <a href ="UpdateCustomer.php">Update Customer</a>
            <a href = "DeleteCustomer.php">Delete Customer</a>
    </div>
    
      <li class= "dropdown">Manage Flights </a>
            <div class = "dropdown-content" >
            <a href ="CreateFlight.php">Create Flight</a>
            <a href ="UpdateFlight.php">Update Flight</a>
            <a href = "DeleteFlight.php">Delete Flight</a>
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



<form action="UpdateCustomer.php" method="post">
    <h1><a href="Home.php"><img src= "images/image.png"></a></h1> 
    
    <h3 align="center">Update Customer</h3>
    
    <table cellpadding="5" cellspacing="10" align="center">
         <tr>
        <td>User Name</td>
            <td><input type="text" name="UserName"></td>
        </tr>
        <tr>
        <td>First Name</td>
            <td><input type="text" name="FirstName"></td>
        </tr>
        <tr><td>last Name</td>
        <td><input type="text" name="LastName"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="PhoneNumber"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update"></td>
            <td><input type="reset" Value="Cancel"></td>
        </tr>
    </table>

</form>

<div class='footer'>
  <p>YR Booking &copy;</p>
</div>



<?php
    

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_UserName = $_POST["UserName"];
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Phone = $_POST["PhoneNumber"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
        
        
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "UPDATE Users SET FirstName ='$FirstName', LastName='$LastName', Phone_Number='$Phone' WHERE User_ID='$UserName'";
            
            $conn->exec($sql);
            echo"<h3 class= 'loginMsg'>Record updated succesfully </h3>";
            echo"..............";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        
    }
?>