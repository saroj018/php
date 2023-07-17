<?php

// server and db details

$server="localhost";
$database="web_database";
$user="root";
$password="";

// save connection instance in a variable

$connect=new mysqli($server,$user,$password,$database);

// // check the connection

if($connect->connect_error)
{
    die("not connected");
}

// save user to variable

$id=$_GET['id'];

// setup insert SQL

$sql="DELETE from `users` where `uid`=$id";

// run the sql to insert data into database

if($connect->query($sql)===TRUE){
    header('Location:index.php');
    exit();
}
else{
    echo "Error:".$connect->error;
}

?>
