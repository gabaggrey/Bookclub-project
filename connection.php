<?php
//session_start();
$link = mysqli_connect("localhost", "root", "", "bookclub");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Close connection
//mysqli_close($link);
?>