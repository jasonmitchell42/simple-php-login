<?php session_start();
include_once 'request.php';

// display the header html
include 'header.php';

// contains the page code
include "$page.php";

// displays the footer html
include 'footer.php';
?>

