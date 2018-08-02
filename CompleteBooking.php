<?php


SESSION_START();



    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
     $User = $_SESSION['User'];
     $Flight_Number = $_SESSION['Flight_Number'];
     $Airline = $_SESSION['Airline'];
     $FlyFrom = $_SESSION['FlyFrom'];
     $FlyTo = $_SESSION['FlyTo'];
     $Date = $_SESSION['Date'];
     $FlightTime = $_SESSION['FlightTime'];
     $Price = $_SESSION['Price'];
     $Passengers = $_SESSION['Passengers'];
    
        
      $Fname = $_POST['FirstName'];
      $Lname = $_POST['LastName'];
      $Phone = $_POST['Phone'];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
          try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO Bookings (FlightID, Customer, FirstName, LastName, Origin, Destination, Date, Time, Passengers, Cost) VALUES ('$Flight_Number','$User', '$Fname', '$Lname', '$FlyFrom', '$FlyTo', '$Date', '$FlightTime', '$Passengers', '$Price')";
            
            $conn->exec($sql);
            echo "Record Created Succesfully";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        header('location:Itinerary.php');
    }

?>