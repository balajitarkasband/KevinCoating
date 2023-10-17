<?php

    //Include constants.php for URL
    include('constants.php');

    //Destroy the session
    session_destroy(); //unsets $_SESSION['user']

    //Redirect to login page
    header('location:login.php');
?>