<!DOCTYPE html>
<html>
    <head>
        <title>
            Student Information Signup
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
        <form action="#" method="POST"> 
            <h1><b><i>Sign Up</i></b></h1>
            <p>Please fill the details to create an account</p>
            <hr>
            <label>Name:</label>
            
            <input id="a1" type="text" placeholder="Name" name="username" required>
            <br>
            <label>Email Id:</label>
            
            <input id="a2" type="email" placeholder="EmailID" name="emailid" required>
            <br>
            <label>Password:</label>
            
            <input id="a3" type="password" placeholder="Password" name="password" required>
            <br>
            <label>Confirm Password:</label>
           
            <input id="a4" type="password" placeholder="ConfirmPassword" name="confirmpass" required>
            <br>
            <button type="submit" name="submit" formaction="#" class="registerbtn">Sign Up</button>
            <br>
           <?php
                  if(isset($_GET['error'])==true)
                  {
                     echo "<p style='color:red;'>SignUp Unsuccessful</p>"; 
                  }
            ?>
            <div class="login">
            <p>Already have an account?<a href="loginpage.php">Login</a></p>
        </form>
    </div>
    </div>
    </body>
</html>


<?php

require_once __DIR__ . '/vendor/autoload.php';
$con= new MongoDB\Client("mongodb://localhost:27017");
$db=$con->studentmanagment;
$tb1=$db->table;
  if(isset($_POST['submit']))
   {
    $email=$_POST["emailid"];
    $pass=$_POST["password"];
    $name=$_POST["username"];
    $conf=$_POST["confirmpass"];
    if($pass==$conf)
        {
            $tb1->insertOne(["username"=>"$name","emailid"=>"$email","password"=>"$pass"]);
            header("location:loginpage.php");
        }
    else
    {
        header("location:signin.php?error=1");
    }    
    }
?>