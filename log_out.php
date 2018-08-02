<?php
    
SESSION_START();
 session_destroy();

SESSION_START();
$_SESSION['User'] = 'Guest';
header("location:Home.php");

?>