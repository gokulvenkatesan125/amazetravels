<?php
  
$host="localhost";
$uname="root";
$pass="goodday123";
$dbname="amaze";


$con=mysqli_connect($host,$uname,$pass,$dbname);

if(!$con){
   die("connection failed".mysqli_connect_error());
}