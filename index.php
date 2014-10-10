<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<?php require ('logic1.php') ?>

<!DOCTYPE html
<?php include('header.php')?>
<html>	
 <body class='text'>
<?php include('content.php')?>
 </body>
</html>