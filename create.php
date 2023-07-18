
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

<style>
    th{
   
   background: yellow;
   color:green ;
}
td{
   background:aqua;
   text-align:center;
}

table{
   margin-left: 53%;
}

button{
   cursor: pointer;
}

.main{
   height: auto;
   width: 400px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
}

.head{
   text-align: center;
   font-size: 40px;
   margin: 15px 0;
}

label{
   font-size: 20px;
   display: block;
   font-weight: 300;
   margin: 5px 0;
}

.password{
   margin: 20px 0;
}
input{
   height: 40px;
   width: 90%;
   padding: 0 10px;
   font-size: 15px;
}

.btn{
   padding: 5px 10px;
   width: 90%;
   cursor: pointer;
   height: 50px;
   font-size: 20px;
   margin: 15px 0;
}

.contaner{
   padding-left: 22px;
}

.para{
   font-size: 15px;
   color: blue;
   text-align: left;
}

legend{
   font-size: 18px;
}
</style>