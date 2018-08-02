<?php

SESSION_START();
$User = $_SESSION['User'];
include('CustomerMenu.php');
      
     $Flight_Number = $_SESSION['Flight_Number'];
     $Airline = $_SESSION['Airline'];
     $FlyFrom = $_SESSION['FlyFrom'];
     $FlyTo = $_SESSION['FlyTo'];
     $Date = $_SESSION['Date'];
     $FlightTime = $_SESSION['FlightTime'];
     $Price = $_SESSION['Price'];
        
        $Fname = $_SESSION['Fname'];
        $Lname = $_SESSION['Lname'];
        $Phone = $_SESSION['Phone'];

?>



   
    
    <form action="CompleteBooking.php" method="post">
         <h1><a href="Home.php"><img src= "images/image.png"></a></h1>
       
        <h3 align="center"> Complete Booking</h3>
        <table cellpadding="5" cellspacing="5" align="center">
            <td><legend><h4>Flight Info</h4></legend></td>
            <tr>
                <td>Flying To</td>
                <td>Flying From</td>
            </tr>
            <tr>
                <td><input type="text" name="FlyTo" value="<?php echo $FlyTo ?>" disabled></td>
                <td><input type="text" name="FlyFrom" value="<?php echo $FlyFrom ?>" disabled></td>
            </tr>
            <tr>
                <td>Cost Of Trip</td>
                <td><input type="text" name="FlyFrom" value="<?php echo '$'.$Price ?>" disabled></td>
            </tr>
            
            
             <td><legend><h4>Personal Information</h4></legend></td>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
            </tr>
       <tr> 
           <td>
              <input type="text" name="FirstName" value="<?php echo $Fname ?>">
            </td>
           <td>
           <input type="text" name="LastName" value="<?php echo $Lname ?>">
           </td> 
        </tr>
            
            <tr>
                <td>Phone Number:</td>
                <td>
                    <input type="text" name="Phone" value="<?php echo $Phone ?>">
                </td>
            </tr>
            <tr>
                <td>Passport:</td>
                <td>
                    <select name="Passport">
                        <option value="Jamaica">Jamaica</option>
                        <option value="USA">USA</option>
                        <option Value="Canada">Canada</option>
                    </select>
                </td>
            </tr>
             <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female</td>
            </tr>
            <tr>
            <td><h4>Payment</h4></td>
            </tr>
            <tr>
                <td>Cardholder Name:</td>
                <td> <input type ="text" name="NameOnCard" placeholder="Name on card"></td>
            </tr>
            <tr>
                <td>Card Number</td>
                <td><input type="text" name="CardNumber" placeholder="Card Number"></td>
            </tr>
            <tr>
            <td>Expiration date:</td>
            </tr>
            <tr>
                <td><input type="text" name="day" placeholder="Day"></td>
                <td><input type="text" name="month" placeholder="Month"></td>
            </tr>
            <tr>
                <td><input type="submit" Value="Complete Booking"></td>
                 <td><input type="reset" Value="Cancel"></td>
            </tr>
        </table>
        </form>
    
     <div class='footer'>
  <p>YR Booking &copy;</p>
</div>

</html>