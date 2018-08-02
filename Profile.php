<?php
SESSION_START();
$User = $_SESSION['User'];

include('ManageProfileData.php');

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

?>
<html>
    <head>
	  <link rel="stylesheet" type="text/css" href="Style2.css">
</head>
    
    <body>
<ul class = "topnav" id="myTopnav">
    <li><a href = "Home.php" >Home</a></li>
    <li><a href = "SearchFlight.php"> Search Flight  </a></li>
    <li><a href = "Register.php"> SignUp </a></li>
    <li class = "dropdown">Account: <?php echo "$User"?></a>
        <div class = "dropdown-content" >
            <a href ="ChangePassword.php">Change Password</a>
            <a href = "log_out.php">Log Out</a>
    </div>
    </li>
    </ul> 

    </body>
</html>



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
            <a href="Profile.php?edit=<?php echo $row['User_ID']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>

 <form action= "ManageProfileData.php" method="POST">
     <h1><a href="Home.php"><img src= "images/image.png"></a></h1> 
<h3 align="center"> Profile</h3>
     
     
     
      <div class="input-group">
        <label>Email</label>
        <input type="text"  name="user" value="<?php echo $user ?>">
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

<div class='footer'>
  <p>YR Booking &copy;</p>
</div>