
<!DOCTYPE HTML>
<?php

SESSION_START();

$User = $_SESSION["User"];

include('ManageFlightData.php');
include('AdminMenu.php');


//Fetch record to be updated

    if (isset($_GET['edit'])){
    $flight = $_GET['edit'];
    $update = true;
    
    $rec = mysqli_query($db, "Select * FROM Flights WHERE Flight_Number = '$flight'");
    
    
    if(count($rec) == 1){
        
     $record = mysqli_fetch_array($rec);
        
     $Flight_Number = $record['Flight_Number'];
     $Airline = $record['Airline'];
     $FlyFrom = $record['FlyFrom'];
     $FlyTo = $record['FlyTo'];
     $Date = $record['Date'];
     $FlightTime = $record['FlightTime'];
     $ArriveTime = $record['ArrivalTime'];
     $Price = $record['Price'];
        
    }
}


if(isset($_GET['delete'])){
    $flight = $_GET['delete'];
    
    mysqli_query($db, "DELETE FROM Flights WHERE Flight_Number = '$flight'");
    
    header('location: ManageFlights.php');
}


?>



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
            <a href="ManageFlights.php?edit=<?php echo $row['Flight_Number']; ?>">Edit</a>
        </td>
        <td>
            <a href="ManageFlights.php?delete=<?php echo $row['Flight_Number']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>


<form method="post" action="ManageFlightData.php">
    
    <div class="input-group">
        <label>Flight ID</label>
        <input type="text" name="Flight_Number" value="<?php echo $Flight_Number ?>">
    </div>
      <div class="input-group">
        <label>Airline</label>
        <input type="text" name="Airline" value="<?php echo $Airline ?>">
    </div>
      <div class="input-group">
        <label>Fly From</label>
        <input type="text" name="FlyFrom" value="<?php echo $FlyFrom ?>">
    </div>
      <div class="input-group">
        <label>Fly To</label>
        <input type="text" name="FlyTo" value="<?php echo $FlyTo ?>">
    </div>
      <div class="input-group">
        <label>Flight Date</label>
        <input type="date" name="Date" value="<?php echo $Date ?>">
    </div>
      <div class="input-group">
        <label>Departure Time</label>
        <input type="text" name="FlightTime" value="<?php echo $FlightTime ?>">
    </div>
       <div class="input-group">
        <label>Arrival Time</label>
        <input type="text" name="ArrivalTime" value="<?php echo $ArriveTime ?>">
    </div>
      <div class="input-group">
        <label>Flight Cost</label>
        <input type="text" name="Price" value="<?php echo $Price ?>">
    </div>
      <div class="input-group">
          <?php if ( $update == true): ?>
        <button type="submit" name="update" class="btn">Update</button>
          <button type="submit" name="cancel" class="btn">Cancel</button>
          <?php else: ?>
          <button type="submit" name="save" class="btn">Add New</button>
          <?php endif ?>
          
    </div>


</form>

