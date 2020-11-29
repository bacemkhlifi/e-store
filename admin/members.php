<?php
/*
====================================================
==  Manage Members Page
== You can add | edit | delete members from here
====================================================
*/
if (isset($_SESSION['Username'])) {
    $title = "Dashborad";
    include 'init.php';
    
    
} 
else {
    header('Location : index.php');
    exit(); 
}

