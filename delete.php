<?php
include 'config.php';

// Getting ID from the URL
$id = $_GET['id'];

// Erasing data from the table
$connection->query("DELETE FROM apartment WHERE id=$id");

//Going back to the main menu
header("Location: display.php");
?>