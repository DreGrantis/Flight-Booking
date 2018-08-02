<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $User = $_POST["user"];
        $Password = $_POST["Password"];
        $Pword = $_POST["Password2"];
        $FName = $_POST["FName"];
        $LName = $_POST["LName"];
        $error = 0;
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
        if(empty($_POST['user']))
        {
            echo"<br> Username Required<br>";
                $error=1;
        }
        
        if(empty($_POST['Password']))
        {
            echo"<br> Password Required<br>";
                $error=1;
        }
        
        if(empty($_POST['FName']))
        {
            echo"<br> First Name Required<br>";
                $error=1;
        }
        
          if(empty($_POST['LName']))
        {
            echo"<br> Last Name Required<br>";
                $error=1;
        }
        
        if (strlen($Password) < 8)
        {
            echo"<br>Password too short<br>";
            $error=1;
        }
        
        if($error==0)
        {
        try{
            if($Password == $Pword)
            {
            $conn = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = "INSERT INTO Users (User_ID, Password, FirstName, LastName) VALUES ('$User','$Password', '$FName', '$LName')";
            
            $conn->exec($sql);
            echo "Record Created Succesfully";
            header('location:Home.php');
            }
            echo"Passwords do not match";
        }
        catch(PDOException $e)
        {
            echo $sql ."<br>" . $e->getMessage();
        }
        $conn = null;
        }
        
        echo"<br><a href='Register.php'>Back</a>";
    }
    
    
?>