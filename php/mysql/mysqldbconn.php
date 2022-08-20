<?php

$server='localhost';
$usr='root';
$pass='';


$conn = mysqli_connect($server,$usr,$pass);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}

echo 'sucessfully connected';
?>