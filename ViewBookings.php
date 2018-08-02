
<!DOCTYPE HTML>
<?php

SESSION_START();

$User = $_SESSION["User"];

include('ManageBooking.php');
include('AdminMenu.php');

?>




<table>
    <tr>
        <th>Flight Number</th>
        <th>Customer</th>
    </tr>
    <?php while($row= mysqli_fetch_array($results)) {?>
    <tr>
        <td><?php echo $row['FlightID']; ?></td>
        <td><?php echo $row['Customer']; ?></td>
    </tr>
    <?php } ?>
</table>




