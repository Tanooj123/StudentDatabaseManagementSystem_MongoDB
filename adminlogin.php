<!DOCTYPE html>
<html>
    <head>
        <title>
            Authoritise Login
        </title>
        <link rel="icon" type="image/x-icon" href="images/logo.png" sizes="32x32"/>
        <style>
            body{
                font-family: Arial, Helvertica, sans-serif;               
                /*background-color: rgb(149, 228, 228);*/
                background-image: url("images/3.jpg");

            }
            label{
                display: inline-block;
                width: 110px;
                
            }
            *{
                box-sizing: border-box;  
                
            }
            .container{
                padding: 8px;
                background-color: rgb(252, 251, 250);
                margin: 3% auto 15% auto;
                border: 5px solid #888;
                text-align: center;
                width:80%;
                
                
            }   

            input[type=text],input[type=email],input[type=password]{
                width: 45%;
                height: 40px;
                padding: 16px 20px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                outline: none;
                background: whitesmoke ;
                
            }
            input[type=text]:focus,input[type=email]:focus,input[type=password]:focus{
                background-color: #ddd;
                outline:none;


            }
            .registerbtn{
                background-color: rgb(72, 137, 153);
                color:black;
                padding: 10px 10px;
                margin: 50px;
                cursor: pointer;
                width: 18%;
                opacity: 0.9;
                
            }
            .registerbtn:hover{
                opacity: 1;
            }
            a{
                color: rgb(101, 180, 134);
            }

            .login{
                background: whitesmoke;
                text-align: center;
            }
            
        </style>    
    </head>
    <body>
        <div class="container">
            <form method="POST" action="#">
            <h1><b><i>Authoritise Login</i></b></h1>
            <p>Welcome Admin,Please fill to Continue</p>
            <hr>
            <br><br>
            <label>Admin UserID:</label>
            <input id="a1" type="text" placeholder="Admin" name="Name" required>
            <br>
            <label>Password:</label>
            <input id="a3" type="password" placeholder="Password" name="Password" required>
             <br>
             <button type="submit" name="submit"  class="registerbtn">Autherise</button>
            <br>
        </form>
        </body>
        </html>
    
        <?php
        

        if(isset($_POST['submit']))
        {
            $name=$_POST["Name"];
            $pass=$_POST["Password"];
            if($name=="Admin" && $pass=="Admin1234"){
                header("location:signin.php");
            }
            else{
                header("location:loginpage.php");
            }
        }

        ?>