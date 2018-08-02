

<?php

session_start();
    
   
    $error = 0;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
         $_SESSION['goTo'] = $_POST['Flyto'];
    $_SESSION['departDate'] = $_POST['depart'];
    $_SESSION['Passengers'] = $_POST['passengers'];
        
        if(empty($_POST['Flyto']))
        {
            echo"<br>Destination Required<br>";
            $error = 1;
        }
        
        if(empty($_POST['Flyfrom']))
        {
            echo"<br>Flying From Required<br>";
            $error = 1;
        }
        
        if(empty($_POST['depart']))
        {
            echo"<br>Departure date Required<br>";
            $error = 1;
        }
        
        if(empty($_POST['passengers']))
        {
            echo"<br>Number of passengers Required<br>";
            $error = 1;
        }
    

 
    
    if($error == 0)
    {
    header('location: ShowResults.php');
    }
        else{
                echo "<br>This page cannot be submitted<br>";
        
                echo"<br><a href='SearchFlight.php'>Back</a>";  
           }
    }
    $To = $_SESSION['goTo'];
    $depart = $_SESSION['departDate'];
    
        
    $db = mysqli_connect('localhost', 'root', '' ,'Airline');
    
    $results = mysqli_query($db,"SELECT * FROM Flights WHERE FlyTo = '$To' && Date ='$depart'");
    
    
   

 ?>