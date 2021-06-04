<html>
    <head>
        <title>
            Student Information Login Page
        </title>
        <link rel="icon" type="image/x-icon" href="images/logo.png" sizes="32x32"/>
        <style>
            body{
                font-family: Arial, Helvertica, sans-serif;
                background-image: url("images/4.jpg");
            }
            input[type="email"],input[type="password"]{
                width: 45%;
                height: 40px;
                padding: 16px 20px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                outline: none;
                background: whitesmoke ;
            }
            input[type=email]:focus,input[type=password]:focus{
                background-color: #ddd;
                outline:none;
                }
            button{
                background-color: rgb(72, 137, 153);
                color:black;
                padding: 10px 10px;
                margin: 50px;
                cursor: pointer;
                width: 18%;
                opacity: 0.9;
            }
            button:hover{
                opacity: 0.8;
            }
            .mouni{
                text-align: center;
                margin: 12px 0 12px 0;
                position: relative;
            }
            img.arshi{
                width: 7%;
                border-radius:5%;
            }
            .model{
            
                overflow: auto;
                padding-top: 4px;
                width: 100%;
                height:100%;
                top: 0%;
                left: 0%;
                z-index: 1;
                position: fixed;
                
            }
            .modelcontent{
                
                background-color: rgb(252, 251, 250);
                margin: 3% auto 15% auto;
                border: 5px solid #888;
                width:80%;
                text-align: center;
            }
            .container{
                padding:0px;

            }
            span.psw{
                float: right;
                padding-top: 16px;
            }
            #a{
                background-color: rgb(45, 93, 155);;
            }
        </style>
    </head>
    <body>
        <div class="model">
        <form action="#" method="POST" class="modelcontent">
            <h1><b><i>AM Institute of Technology Login Page</i></b></h1>
            <p>Fill the details to Login</p>
            <hr>
            <div class="mouni">
            <img src="images/loginim.png" class="arshi">

        </div>
        <div class="container">
            <br>
            <label>Email ID:</label>&nbsp;&nbsp;&nbsp;
            <input type="email" name="emailid" placeholder="EmailID" required>
            <br>
            <label>Password:</label>

            <input type="password" name="password" placeholder="Password" required>
            <br />
            
            <input type="checkbox">Remember me
            <br>    
            <button type="submit"  name="login" class="registerbtn">Login</button>
            <br>
            <?php
                  if(isset($_GET['error'])==true)
                  {
                     echo "<p style='color:red;'>Login Unsuccessful</p>"; 
                  }
            ?>
            <label><p><a href="forgotpassword.php">ForgotPassword</a></p>
            </label>
            <label><p>Do not have an account?<a href="adminlogin.php">Sign Up</a></p>
            </label>
        </div>
        </form>
    </div>
    </body>
</html>

<?php
require_once __DIR__ . '/vendor/autoload.php';
$con= new MongoDB\Client("mongodb://localhost:27017");
$db=$con->studentmanagment;
$tb1=$db->table;
if(isset($_POST['login']))
{
$username = ($_POST['emailid']);
$password = ($_POST['password']);
  $result = $tb1->find(array('emailid'=>$username,'password'=>$password));
  foreach($result as $b)
    {
     if($b=$password)
     {
      header("location:home.php");
     } 
   }
} 
?>