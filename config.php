<?php

$host="localhost"; 
$dbname="hotel_management"; 
$user="postgres";
$password="Hello@123";

$conn=new PDO("pgsql: host=$host;dbname=$dbname", "$user", "$password");
session_start();

// if($conn)
//     echo "Good Connection";
// else
//     echo "Bad Connection"; 

// pg_close($conn); 
?>