<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $User = $_POST["user"];
        $Password = $_POST["Password"];
        
        $servername = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "Airline";
        
        
        //Create PDO Instance
        try{
            $pdo = new PDO("mysql:host=$servername;dbname=$dbName",$dbUserName, $dbPassword);
            
            $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            
            $sql = 'SELECT * FROM Users WHERE User_ID = :User && Password = :Password';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['User'=>$User, 'Password'=>$Password]);
            $users = $stmt->fetchAll();
            $userCount = $stmt -> rowCount();
            
            
            if($userCount == 1)
            {
                SESSION_START();
                $_SESSION ["User"] = $User;
                if($User=='Admin@Mail.com')
                {
                 $_SESSION ["User"] = 'Admin';
                 header("Location: AdminHome.php");  
                }
                else
               header("Location: Home.php");
                     
            }
                
                else
                    
                    echo"<h3 class= 'loginMsg'> Incorrect Username or password </h3>";
                    echo"...........";
                
            
        }
        catch(PDOException $e)
        {
            echo "<h3 class='loginMsg'>" .$sql ."<br>" .$e->getMessage();
        }
        $stmt = null;
        $pdo = null;
        
    }
?>