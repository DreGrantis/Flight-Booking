<?php
     

$User = $_SESSION['User'];

$db = mysqli_connect('localhost', 'root', '' ,'Airline');

 $user = "";
 $Password = "";
 $Fname = "";
 $Lname = "";
 $Pnumber = "";
 $update = false;

 if(isset($_POST['update'])) 
     
    {
        
        $User = $_POST["user"];
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
            
            $sql = "UPDATE Users SET FirstName ='$FName', LastName='$LName', Phone_Number='$PNumber' WHERE User_ID='$User'";
            
            $conn->exec($sql);
            header('location: Profile.php');
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
    header('location: Profile.php');
    
    }

     if(isset($_POST['save'])){
    $update = false;
    header('location: Profile.php');
    
    }



        
    
        $results = mysqli_query($db,"SELECT User_ID, FirstName, LastName, Phone_Number FROM Users WHERE User_ID = '$User'");


?>