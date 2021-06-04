<?php
   require_once __DIR__ . '/vendor/autoload.php';
   $con= new MongoDB\Client("mongodb://localhost:27017");
   $db=$con->studentmanagment;
   $tb1=$db->student;
   ?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Insert Data
        </title>
        <link rel="icon" type="image/x-icon" href="images/logo.png" sizes="32x32"/>


        <style>
            body{
                font-family: Arial, Helvertica, sans-serif;
                background-image: url("images/5.jpg");
            }
            h1{
                text-align: center;
            }
            p{
                text-align: center;
                
            }
            
            #registerbtn{
                background-color: rgb(215, 240, 240);
                color:black;
                padding: 10px 10px;
                margin: 13px;
                cursor: pointer;
                width:43%;
                opacity: 0.9;
                
            }
            #registerbtn:hover{
                opacity: 1;
            }
            .login{
                float: left;
                width: 40%;
                
            }
            #login{
                text-align:left;
            }
            .right{
                float: right;
            }
            .left{
                float: left;
            }
            .mounika{
                float: right;
                width: 60%;
            }
            #homebut{
                margin-left: 30px   ;
                background-color: rgb(45, 93, 155);
                color: whitesmoke;
            }
            #logbtn{
                margin-right: 30px;
                background-color: rgb(45, 93, 155);
                color: whitesmoke;
            }
            img{
                margin-left:500px;
            }
            span{
                font-size:35px;
                font-weight:bold;
                font-style:italic;
            }
            

        </style>
    </head>
    <body>
        <img src="images/logo1.png" alt="logo" width="600" height="110"> 
        <!--<span>AM Institute of Technology</span>-->
        
        <form>
            <button type="submit" formaction="home.php" class="left" id="homebut" style="width: 100px;height: 35px;"><b><i>Home</i></b></button>
            <button type="submit" formaction="loginpage.php" class="right" id="logbtn" style="width: 100px;height: 35px;"><b><i>Logout</i></b></button>
    </form>
        <br>
        <br>
        <hr>
        <div class="login">
        <div id="login">  
        <form>
            <button type="submit" formaction="ADD.php" id="registerbtn">INSERT</button>
            <br>
            <button type="submit" formaction="UPDATE.php" id="registerbtn">UPDATE</button>
            <br>
            <button type="submit" formaction="attendence.php" id="registerbtn">Attendance</button>
            <br>
            <button type="submit" formaction="cgpa.php" id="registerbtn">CGPA</button>
            <br>
            <button type="submit" formaction="clubsnchapter.php" id="registerbtn">Clubs and Chapter</button>
            <br>
            <button type="submit" formaction="transport.php" id="registerbtn">Transport</button>
            <br>
            <button type="submit" formaction="hostel.php" id="registerbtn">Hostel/Day Scholar</button>
            <br>
            <button type="submit" formaction="fees.php" id="registerbtn">Fees</button>
        </form>
        </div>
    </div>
    <div class="mounika">
      <h3>INSERT NEW USER DATA</h3>
      <br>
        <form action="#" method="POST">
            <label>Name : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="Name" placeholder="Name" >
            <br><br>
            <label>Registrarion Number : </label>
            <input type="text" name="Regno" placeholder="Reg No" >
            <br><br>
            <label>Branch :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Branch">
                <option value="">--Select the Branch--</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="MTECH">MTECH</option>
                <option value="MECH">MECH</option>
            </select>
            <br><br>
            <label>Hostel/Day Scholar :</label>&nbsp;&nbsp;&nbsp; 
            <select name="Hostel">
                <option value="">--Select the Category--</option>
                <option value="Hostel">Hostel</option>
                <option value="Day Scholar">Day Scholar</option>
            </select>
            <br><br>
            <label>Hostel Type :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Hosteltype">
                <option value="">--Select the Hostel Type--</option>
                <option value="Ladies Hostel">Ladies Hostel</option>
                <option value="Mens Hostel">Mens Hostel</option>
            </select>
            <br><br>
            <label>Transport Type :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Transporttype">
                <option value="">--Select the Transport Type--</option>
                <option value="College Transport">College Transport</option>
                <option value="Own Transport">Own Transport</option>
            </select>
            <br><br>
            <label>
                Clubs :
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Clubs">
                <option value="">--Select the Club--</option>
                <option value="CSI">CSI</option>
                <option value="Open Source">Open Source</option>
                <option value="Beat the Heat">Beat the heat</option>
                <option value="DIY">Diy</option>
                <option value="IEEE">IEEE Club</option>
                <option value="Gardening">Gradening</option>
            </select>
            <br><br>
                Fees :
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Fees">
                <option value="">--Select the Category --</option>
                <option value="Paid">Paid</option>
                <option value="Due">Due</option>
            </select>
            <br><br>
            <br><br>
            <input type="submit" name="submit" value="Insert" formaction="#" style="width: 80px; height: 30px; background-color: rgb(45, 93, 155); color: whitesmoke;"><br><br>
            </form>
        
            <?php

            if(isset($_POST['submit']))
            {

            $name=$_POST["Name"];  
            $regNo=$_POST["Regno"];      
            $branch=$_POST["Branch"];
            $hostel=$_POST["Hostel"];
            $hosteltype=$_POST["Hosteltype"];
            $transporttype=$_POST["Transporttype"];
            $fees=$_POST["Fees"];
            $clubs=$_POST["Clubs"];
            
            if($hostel == "Hostel")
            {
              if(isset($_POST['Hosteltype']))
                  {
                      $tb1->insertOne(["RegNo"=>"$regNo","Name"=>"$name","Branch"=>"$branch","Data Analytics"=>null,"No SQL"=>null,"Cryptography"=>null,"FEEE"=>null,"VLSI"=>null,"Micro Controllers"=>null,"Fluid Mechanics"=>null,"Thermodynamics"=>null,"Heat and Mass Transfer"=>null,"Product Defination"=>null,"HCI"=>null,"Software Engineering"=>null,"Sem1"=>null,"Sem2"=>null,"Sem3"=>null,"Sem4"=>null,"Clubs"=>$clubs, "Hostel"=>"$hosteltype","Transport"=>null,"Fees"=>$fees]);
                      echo "Data Inserted Successfully ..! ";
                  }
            }
            elseif($hostel == "Day Scholar")
             {
               if(isset($_POST['Transporttype']))
                 {
                     $tb1->insertOne(["RegNo"=>"$regNo","Name"=>"$name","Branch"=>"$branch","Data Analytics"=>null,"No SQL"=>null,"Cryptography"=>null,"FEEE"=>null,"VLSI"=>null,"Micro Controllers"=>null,"Fluid Mechanics"=>null,"Thermodynamics"=>null,"Heat and Mass Transfer"=>null,"Product Defination"=>null,"HCI"=>null,"Software Engineering"=>null,"Sem1"=>null,"Sem2"=>null,"Sem3"=>null,"Sem4"=>null,"Clubs"=>$clubs,"Hostel"=>null,"Transport"=>"$transporttype","Fees"=>$fees]);
                     echo "Data Inserted Successfully ..! ";
                 }
             }
            }
            ?>

        
        </div>
        </div>
        </body>
</html>