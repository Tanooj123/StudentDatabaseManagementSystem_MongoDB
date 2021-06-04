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
            Hostel Or Days Scholar
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
       <!-- <span>AM Institute of Technology</span>-->
        
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
            <button type="submit" formaction="ADD.php" id="registerbtn">Insert Data</button>
            <br>
            <button type="submit" formaction="UPDATE.php" id="registerbtn">Update Data</button>
            <br>
            <button type="submit" formaction="attendence.php" id="registerbtn">Attendance</button>
            <br>
            <button type="submit" formaction="cgpa.php" id="registerbtn">CGPA</button>
            <br>
            <button type="submit" formaction="clubsnchapter.php" id="registerbtn">Clubs and Chapter</button>
            <br>
            <button type="submit" formaction="transport.php" id="registerbtn">Transport</button>
            <br>
            <button type="submit" formaction="hostel.php" id="registerbtn">Hosteller/Day Scholar</button>
            <br>
            <button type="submit" formaction="fees.php" id="registerbtn">Fees</button>
            <br>
            <button type="submit" formaction="Delete.php" id="registerbtn">Delete Data</button>
        </form>
        </div>
    </div>
    <div  class="mounika">
    <h4>Hostel or Day Scholar</h4>
    <form action="#" method="POST">
            <label>
                Category :
            </label>&nbsp;&nbsp;&nbsp;
            <select name="Hostel">
                <option value="">--Select the Category --</option>
                <option value="Mens Hostel">Mens Hostel</option>
                <option value="Ladies Hostel">Ladies Hostel</option>
                <option value="Day Scholar">Day Scholars</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="View"  style="width: 80px; height: 30px; background-color: rgb(45, 93, 155); color: whitesmoke;"><br><br>
        </form>
            <?php

              if(isset($_POST['submit']))
                {   

                $Hostel=$_POST["Hostel"];
             

                echo "<table border = '1'><th>RegNo</th><th>Name</th><th>".$Hostel."</th>";
                $count=0;

                echo "<tr>";
                $criteria = array("Hostel"=> $Hostel);
                $data_info=$tb1->find($criteria); 
                foreach($data_info as $b)
                {
                    $count++;
                    echo "<td>" .$b['RegNo']. "</td>";
                    echo "<td>" .$b['Name']. "</td>";
                    echo "<td>" .$b['Hostel']. "</td>";
                    echo "</tr>";
                }
                }

           ?>
        </form>
        </div>
        </body>
    </head>
</html>