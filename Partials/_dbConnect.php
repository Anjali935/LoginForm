<?php

$server="localhost:3307";
$username="root";
$password="1234";
$database="users210";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    die("Error");
}



?>