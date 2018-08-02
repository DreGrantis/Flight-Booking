
<!DOCTYPE HTML>



<?php
     
     $Flight_Number = "";
     $Airline = "";
     $FlyFrom = "";
     $FlyTo = "";
     $Date = "";
     $FlightTime ="";
     $ArriveTime ="";
     $Price ="";
     $update = false;
    
      
    $db = mysqli_connect('localhost', 'root', '' ,'Airline');
        
    if(isset($_POST['save']))
    {
        $FlightId = $_POST["Flight_Number"];
        $Airline = $_POST["Airline"];
        $FlyFrom = $_POST["FlyFrom"];
        $FlightDate = $_POST["Date"];
        $FlyTo = $_POST["FlyTo"];
        $FlightTime = $_POST["FlightTime"];
        $ArriveTime = $_POST["ArrivalTime"];
        $Price = $_POST["Price"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
        
        try{
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO Flights (Flight_Number, Airline, FlyFrom, FlyTo, Date, FlightTime, ArrivalTime, Price) VALUES ('$FlightId','$Airline', '$FlyFrom', '$FlyTo', '$FlightDate', '$FlightTime', '$ArriveTime', '$Price')";
            
            $conn->exec($sql);
            header('location: ManageFlights.php');
            echo "Record Created Succesfully <br>";
            echo "...........";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        
    }

    if(isset($_POST['update']))
    {
        
        $FlightId = $_POST["Flight_Number"];
        $Airline = $_POST["Airline"];
        $FlyFrom = $_POST["FlyFrom"];
        $FlightDate = $_POST["Date"];
        $FlyTo = $_POST["FlyTo"];
        $FlightTime = $_POST["FlightTime"];
        $ArriveTime = $_POST["ArrivalTime"];
        $Price = $_POST["Price"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
           try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "UPDATE Flights SET Flight_Number ='$FlightId', Airline='$Airline', FlyFrom='$FlyFrom', FlyTo='$FlyTo', Date='$FlightDate', FlightTime='$FlightTime', ArrivalTime='$ArriveTime', Price='$Price' WHERE Flight_Number='$FlightId'";
            
            $conn->exec($sql);
            header('location: ManageFlights.php');
           // echo "Record Updated Succesfully <br>";
           // echo "...........";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
    }

    if(isset($_POST['cancel'])){
    $update = false;
    header('location: ManageFlights.php');
    
   }



        
    
        $results = mysqli_query($db,"SELECT * FROM Flights");
       // $conn->exec($results);
?>
