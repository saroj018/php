<?php

// server and db details

$server="localhost";
$database="web_database";
$user="root";
$password="";

// save connection instance in a variable

$connect=new mysqli($server,$user,$password,$database);

// check the connection

// if($connect->connect_error)
// {
//     die("not connected");
// }
// else{
    
// echo('connected');
// }

// setup insert sql_regcase

$sql="SELECT *FROM `users`";

// save executable sql in a variable

$exesql=$connect->query($sql);

?>
<table border="1" cellspacing='0' cellpadding='10'  >
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Email</th>
            <th colspan='3'>Action</th>
        </tr>

        <?php while($result=$exesql->fetch_assoc()){ ?>
            <tr>
                <td></td>
                <td><?php echo $result['name'];?></td>
                <td><?php echo $result['address'];?></td>
                <td><?php echo $result['email'];?></td>
                <td><?php echo $result['contact'];?></td>
                <td><a href="show.php?id=<?php echo $result['uid'];?>">Show</a></td>
                <td><a href="update.php?id=<?php echo $result['uid'];?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $result['uid'];?>">Delete</a></td>
            </tr>
            <?php } ?>


            <br><br>
            <a href="create.php">Create New Users</a>