
<!DOCTYPE HTML>



<?php
   

     $user = "";
     $Password = "";
     $Fname = "";
     $Lname = "";
     $Pnumber = "";
     $update = false;
    
      
    $db = mysqli_connect('localhost', 'root', '' ,'Airline');
        
    if(isset($_POST['save']))
    {
        $User = $_POST["user"];
        $Password = $_POST["Password"];
        $FName = $_POST["FName"];
        $LName = $_POST["LName"];
        $Phone = $_POST["PNumber"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
       
        
        
        
        try{
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO Users (User_ID, Password, FirstName, LastName, Phone_Number) VALUES ('$User','$Password', '$FName', '$LName', '$Phone')";
            
            $conn->exec($sql);
            $_SESSION['msg'] = "Record created succesfully";
            header('location: ManageCustomer.php');
//            echo "Record Created Succesfully <br>";
//            echo "...........";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        
    }

    //if(isset($_POST['update']))
        if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $User = $_POST["User"];
        $FName = $_POST["FName"];
        $LName = $_POST["LName"];
        $PNumber = $_POST["PNumber"];
        
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
           try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "UPDATE Users SET FirstName ='$FName', LastName='$LName', Phone_NUmber='$PNumber' WHERE User_ID='$User'";
            
            $conn->exec($sql);
            
            header('location: ManageCustomer.php');
           
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
    }

    if(isset($_POST['cancel'])){
    $update = false;
    header('location: ManageCustomer.php');
    
    }



        
    
        $results = mysqli_query($db,"SELECT User_ID, FirstName, LastName, Phone_Number FROM Users");
       // $conn->exec($results);
?>
