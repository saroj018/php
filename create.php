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

        <form action="processcreate.php" method="post">
        <div class='contaner'>
            <div>
                <label htmlFor="">Name</label>
                <input name="name" type="text" placeholder="Enter your Name" />
            </div>
            <div class='password'>
                <label htmlFor="">Address</label>
                <input name="address" type="text" placeholder="Enter your Address" />
            </div>
            <div class='password'>
                <label htmlFor="">Email</label>
                <input name="email" type="email" placeholder="Enter your Email" />
            </div>

            <div class='password'>
                <label htmlFor="">Password</label>
                <input name="password" type="password" placeholder="Enter your Password" />
            </div>
            <div class='password'>
                <label htmlFor="">Contact</label>
                <input name="contact" type="number" placeholder="Enter your Number" />
            </div>

            <button class='btn'>Add</button>


        </div>
        </form>
    </fieldset>

</div>
</body>