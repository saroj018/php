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

// get id of the necessary users

$id=$_GET['id'];

$sql = "SELECT * FROM `users` WHERE `uid` = $id";



// save executable sql in a variable

$exesql=$connect->query($sql);


// execute sql and save data in an variable

$result=$exesql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='main'>
    <fieldset>
        <legend>Fill the Form</legend>

        <form action="processupdate.php?id=<?php echo $result['uid']; ?>" method="post">

        <div class='contaner'>
            <div>
                <label htmlFor="">Name</label>
                <input name="name" value="<?php echo $result['name']; ?>"  type="text" placeholder="Enter your Name" />
            </div>
            <div class='password'>
                <label htmlFor="">Address</label>
                <input name="address" value="<?php echo $result['address']; ?>" type="text" placeholder="Enter your Address" />
            </div>
            <div class='password'>
                <label htmlFor="">Email</label>
                <input name="email" value="<?php echo $result['email']; ?>" type="email" placeholder="Enter your Email" />
            </div>

            <div class='password'>
                <label htmlFor="">Password</label>
                <input name="password" value="<?php echo $result['password']; ?>" type="password" placeholder="Enter your Password" />
            </div>
            <div class='password'>
                <label htmlFor="">Contact</label>
                <input name="contact" value="<?php echo $result['contact']; ?>" type="number" placeholder="Enter your Number" />
            </div>

            <button class='btn'>Add</button>


        </div>
        </form>
    </fieldset>

</div>
</body>