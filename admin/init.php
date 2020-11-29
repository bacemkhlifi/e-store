<?php 


    //Routes 

$tpl ="./includes/templates/"; // templates directory
$lang ="includes/languges/" ; 
$func ="includes/functions/";
// includes the imporatnt file
include 'connect.php';
include  $lang . "english.php";
include $func . "functions.php";
include $tpl . "header.php";
include $tpl . "footer.php";


// include navbar in page expect the one with variable $nonavbar

if (!isset($nonavbar)){include $tpl . 'navbar.php';}


