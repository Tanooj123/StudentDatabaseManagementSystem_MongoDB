<html>
    <head>
        <title>
            Forgot Password
        </title>
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
                background-color: rgb(218, 231, 230);
    
            }
        </style>
    </head>
    <body>
        <div class="model">
        <form action="#" method="POST" class="modelcontent">
            <h1><b><i>Student Information Forgot Password Page</i></b></h1>
            <p>Fill the details to Reset password</p>
            <hr>
            <div class="mouni">
            <img src="images/loginim.png" class="arshi">

        </div>
        <div class="container">
            <br>
            <label>EmailID:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="EmailID" placeholder="EmailID" required>
            <br>
            <label>New Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="password" name="Password" placeholder="New Password" required>
            <br>

            <label>Confirm New Password:</label>

            <input type="password" name="newPassword" placeholder="Confirm New Password" required>
            <br>
   
            <button type="submit" name="submit" class="registerbtn">Reset</button>
            <br>
            <?php
                  if(isset($_GET['error'])==true)
                  {
                     echo "<p style='color:red;'>Email or Passwords doesn't match</p>"; 
                  }
            ?>
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
 if(isset($_POST['submit']))
  {
   $emailid = $_POST['EmailID'];
   $password = $_POST['Password'];
   $confi=$_POST['newPassword'];
   if($password == $confi )
   {
    $criteria = array("emailid"=> $emailid);
    $data_info=$tb1->find($criteria); 
    foreach($data_info as $b)
    {
     if($b[$emaild]=$emailid)
     {
        $tb1->updateOne(array("emailid"=>$emailid),
        array('$set'=>array("password"=>"$password"))); 
        header("location:loginpage.php");
     }
   }
  }
   else
   {
       header("location:forgotpassword.php?error=1");
   }    
 }
   ?>