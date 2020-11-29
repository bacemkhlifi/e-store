<?php
session_start();

if (isset($_SESSION['Username'])) {
    $title = "Dashborad";
    include 'init.php';
    
    
} 
else {
    header('Location : index.php');
    exit(); //i'm not sure if i need this line in my code or no 
}


