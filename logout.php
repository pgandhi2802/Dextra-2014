<?php
    session_start();
    if($_SESSION['logged_in'])
    {
         session_destroy();
         $_SESSION['loggedin']=false;
         $_SESSION['name']=null;
         $_SESSION['user']=0;
    }
        header("location:login.php");
?>