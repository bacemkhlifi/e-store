<?php
session_start(); //start the session
session_unset(); // unset the data
session_destroy(); // Destroy the data
header('Location: index.php');
exit();
