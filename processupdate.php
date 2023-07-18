<?php

// server and db details

$server="localhost";
$database="web_database";
$user="root";
$password="";

// save connection instance in a variable

$connect=new mysqli($server,$user,$password,$database);

// check the connection

if($connect->connect_error)
{
    die("not connected");
}

// save user to variables

$fullname=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$id=$_GET['id'];

// setup insert SQL



$sql = "UPDATE `users` SET `name`='$fullname', `address`='$address', `password`='$password', `email`='$email', `contact`='$contact' WHERE `uid`=$id";



// run the sql to insert data into database

if($connect->query($sql)===TRUE){
    echo "Data Update Sucessfully";
    header('Location:index.php');
    exit();
}
else{
    echo "Error:".$connect->error;
}

?>