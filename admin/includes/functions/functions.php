<?php

/*
** title function that echo the page title in case the page 
** has the variable $title and echo default title for other pages

*/

function Title() {
    
    global $title;
    if (isset($title)) {
        echo $title;
    } else {
        echo "eStore";
    }
}
