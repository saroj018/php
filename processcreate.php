<?php

// server and db details

$server="localhost";
$database="web_database";
$user="root";
$password="";

// save connection instance in a variable

$connect=new mysqli($server,$user,$password,$database);

// // check the connection

// if($connect->connect_error)
// {
//     die("not connected");
// }



// save user to variables


$fullname=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];

// echo "$fullname.<br/>";
// echo "$address.<br/>";
// echo "$contact.<br/>";
// echo "$password.<br/>";
// echo "$email.<br/>";
//

$sql="INSERT INTO users(`name`,`password`, `address`,`email`,`contact`)
VALUES('$fullname','$password','$address','$email','$contact')";

if($connect->query($sql)===TRUE){
    echo "Data Entered Successfully";
    ?>
    <br>
    <a href="index.php">User List</a>
    <?php
    header('Location:index.php');
    exit();
}
else{
    echo "Error:".$connect->error;
}

?>