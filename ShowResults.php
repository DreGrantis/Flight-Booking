
<!DOCTYPE HTML>
<?php

include('SearchResults.php');

//SESSION_START();

$User = $_SESSION["User"];




    if (isset($_GET['select'])){
    $flight = $_GET['select'];
    $update = true;
    
    $rec = mysqli_query($db, "Select * FROM Flights WHERE Flight_Number = '$flight'");
    $customer = mysqli_query($db, "Select * FROM Users WHERE User_ID ='$User'");
    
    if(count($rec) == 1){
        
     $record = mysqli_fetch_array($rec);
     $cus = mysqli_fetch_array($customer);
     $fliers = $_SESSION['Passengers'];
        
     $InitialPrice = $record['Price'];
        
        if($User==Guest)
        {
            $FinalPrice= $InitialPrice * $fliers;
        }
        else
        $FinalPrice = $InitialPrice * 0.8 *$fliers;
        
     $_SESSION['Flight_Number'] = $record['Flight_Number'];
     $_SESSION['Airline'] = $record['Airline'];
     $_SESSION['FlyFrom'] = $record['FlyFrom'];
     $_SESSION['FlyTo'] = $record['FlyTo'];
     $_SESSION['Date'] = $record['Date'];
     $_SESSION['FlightTime'] = $record['FlightTime'];
     $_SESSION['ArriveTime'] = $record['ArrivalTime'];
     $_SESSION['Price'] = $FinalPrice;
        
     $_SESSION['Fname'] = $cus['FirstName'];
     $_SESSION['Lname'] = $cus['LastName'];
     $_SESSION['Phone'] = $cus['Phone_Number'];
        
        header('location: Booking.php');
       // $_SESSION['FlightNumber'] = $Flight_Number;
    }
}


?>

<html>

<head>
	  <link rel="stylesheet" type="text/css" href="Style2.css">
</head>
    
    
        
<body>
<ul class = "topnav" id="myTopnav">
    <li><a href = "Home.php" >Home</a></li>
    <li><a href = "SearchFlight.php"> Search Flight </a></li>
    <li><a href = "Register.php"> SignUp </a></li>
    <li><a href = "Login.php"> Login </a></li>
    <li class = "dropdown">Account: <?php echo "$User"?></a>
        <div class = "dropdown-content" >
            <a href ="ChangePassword.php">Change Password</a>
            <a href ="Profile.php">Profile</a>
            <a href = "log%20_out.php">Log Out</a>
    </div>
    </li>
    </ul> 
</body>

</html>


<table>
    <tr>
        <th>Flight Number</th>
        <th>Airline</th>
        <th>Fly From</th>
        <th>Fly To</th>
        <th>Date</th>
        <th>Depart Time</th>
        <th>Arrival Time</th>
        <th>Flight Cost</th>
    </tr>
    <?php while($row= mysqli_fetch_array($results)) {?>
    <tr>
        <td><?php echo $row['Flight_Number']; ?></td>
        <td><?php echo $row['Airline']; ?></td>
        <td><?php echo $row['FlyFrom']; ?></td>
        <td><?php echo $row['FlyTo']; ?></td>
        <td><?php echo $row['Date']; ?></td>
        <td><?php echo $row['FlightTime']; ?></td>
        <td><?php echo $row['ArrivalTime']; ?></td>
        <td><?php echo $row['Price']; ?></td>
        <td>
            <a href="ShowResults.php?select=<?php echo $row['Flight_Number']; ?>">Select Flight</a>
        </td>
    <?php } ?>
</table>


