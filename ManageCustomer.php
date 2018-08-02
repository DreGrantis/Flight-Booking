
<!DOCTYPE HTML>
<?php

SESSION_START();

$User = $_SESSION["User"];

include('ManageData.php');
include('AdminMenu.php');


//Fetch record to be updated

    if (isset($_GET['edit'])){
    $user = $_GET['edit'];
    $update = true;
    
    $rec = mysqli_query($db, "Select * FROM Users WHERE User_ID = '$user'");
    
    
    if(count($rec) == 1){
        
     $record = mysqli_fetch_array($rec);
        
     $user = $record['User_ID'];
     $Password = $record['Password'];
     $Fname = $record['FirstName'];
     $Lname = $record['LastName'];
     $Pnumber = $record['Phone_Number'];
    }
}


if(isset($_GET['delete'])){
    $user = $_GET['delete'];
    
    mysqli_query($db, "DELETE FROM Users WHERE User_ID = '$user'");
    
    header('location: ManageCustomer.php');
}

?>




<table>
    <tr>
        <th>User</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
    </tr>
    <?php while($row= mysqli_fetch_array($results)) {?>
    <tr>
        <td><?php echo $row['User_ID']; ?></td>
        <td><?php echo $row['FirstName']; ?></td>
        <td><?php echo $row['LastName']; ?></td>
        <td><?php echo $row['Phone_Number']; ?></td>
        <td>
            <a href="ManageCustomer.php?edit=<?php echo $row['User_ID']; ?>">Edit</a>
        </td>
        <td>
            <a href="ManageCustomer.php?delete=<?php echo $row['User_ID']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>


<form method="post" action="ManageData.php">
    
    <div class="input-group">
        <label>Email</label>
        <input type="text" name="User" value="<?php echo $user ?>">
    </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="Password" value="<?php echo $Password ?>">
    </div>
      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="FName" value="<?php echo $Fname ?>">
    </div>
      <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="LName" value="<?php echo $Lname ?>">
    </div>
      <div class="input-group">
        <label>Phone Number</label>
        <input type="text" name="PNumber" value="<?php echo $Pnumber ?>">
    </div>
      <div class="input-group">
          <?php if ( $update == true): ?>
        <button type="submit" name="update" class="btn">Update</button>
          <button type="submit" name="cancel" class="btn">Cancel</button>
          <?php else: ?>
          <button type="submit" name="save" class="btn">Save</button>
          <?php endif ?>
          
    </div>

  
</form>

<?php



?>