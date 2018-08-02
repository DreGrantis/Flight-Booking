
<!DOCTYPE HTML>



<?php
     
    
      
    $db = mysqli_connect('localhost', 'root', '' ,'Airline');



        
    
        $results = mysqli_query($db,"SELECT * FROM Bookings");
       // $conn->exec($results);
?>
