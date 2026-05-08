<?php
$connection = new mysqli("localhost","root","","hotelDatabase");

if ($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}

?>