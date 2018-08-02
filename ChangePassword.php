<?php
SESSION_START();
$User = $_SESSION['User'];
include('CustomerMenu.php');
?>


<form action="ChangePassword.php" method="post">
    
    <h1><a href="Home.php"><img src= "images/image.png"></a></h1> 
    <h3 align="center">Change Password</h3>
        <table cellpadding="5" cellspacing="10" align="center"> 
            
        
        <tr>
        <td>Old Password</td>
        <td><input type="password" name="OldPassword"></td>
        </tr>
        <tr>
            <td>New Password</td>
            <td><input type="password" name="NewPassword"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
            <td><input type="reset" value="Cancel"></td>
        </tr>
    </table>

</form>

<div class='footer'>
  <p>YR Booking &copy;</p>
</div>

<?php
    

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $OldPassword = $_POST["OldPassword"];
        $NewPassword = $_POST["NewPassword"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
        
        
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "UPDATE Users SET Password ='$NewPassword' WHERE User_ID='$User'";
            
            $conn->exec($sql);
            echo"<h3 class= 'loginMsg'> updated succesfully </h3>";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        
    }
?>