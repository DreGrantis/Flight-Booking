<?php

    SESSION_START();
    
 $Flight_Number = $_SESSION['Flight_Number'];
 $Airline = $_SESSION['Airline'];
 $FlyFrom = $_SESSION['FlyFrom'];
 $FlyTo = $_SESSION['FlyTo'];
 $Date = $_SESSION['Date'];
 $FlightTime = $_SESSION['FlightTime'];
 $Price = $_SESSION['Price'];
 $Passengers = $_SESSION['Passengers'];
        
 $Fname = $_SESSION['Fname'];
 $Lname = $_SESSION['Lname'];
 $Phone = $_SESSION['Phone'];


echo"<html>

<head>
	  <link rel='stylesheet' type='text/css' href='Style2.css'>
</head>
</html>

<form method='post' action='Home.php'>
    
    <div class='input-group'>
        <label>Name</label>
        <input type='text' name='User' value='$Fname $Lname' disabled>
    </div>
      <div class='input-group'>
        <label>Flying To</label>
        <input type='text' name='Password' value='$FlyTo' disabled>
    </div>
      <div class='input-group'>
        <label>Flying From</label>
        <input type='text' name='FName' value='$FlyFrom' disabled>
    </div>
      <div class='input-group'>
        <label>Date</label>
        <input type='text' name='LName' value='$Date' disabled>
    </div>
      <div class='input-group'>
        <label>Time</label>
        <input type='text' name='PNumber' value='$FlightTime' disabled>
    </div>
      <div class='input-group'>
        <label>Passengers</label>
        <input type='text' name='PNumber' value='$Passengers' disabled>
    </div>
      <div class='input-group'>
        <label>Cost of Trip</label>
        <input type='text' name='PNumber' value='$Price' disabled>
    </div>
      <div class='input-group'>
         
          <button type='submit' name='save' class='btn'>Home</button>
          
          
    </div>


</form>"
?>