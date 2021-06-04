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
            Attendance
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
      <h4>Attendence</h4>
        <form action="#" method="POST">
        <label>
            Branch :
        </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="Branch" id="branch" onchange="atm()"> 
                <option value="">--Select the Branch--</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="MTECH">MTECH</option>
                <option value="MECH">MECH</option>
            </select>
            <br><br>
            <label>
                Subjects :
            </label>&nbsp;&nbsp;
            <select name="Subjects" id="subject" onchange="tam()">
                <option value="">----Select the Subject----</option>
               <option value="Data Analytics">Data Analytics</option>
                <option value="No SQL">No SQL</option>
                <option value="Cryptography">Cryptography</option>
                <option value="FEEE">FEEE</option>
                <option value="VLSI">VLSI Design</option>
                <option value="Micro Controllers">Micro Controllers</option>
                <option value="Fluid Mechanics">Fluid Mechanics</option>
                <option value="Thermodynamics">Thermodynamics</option>
                <option value="Heat and Mass Transfer">Heat and Mass Transfer</option>
                <option value="Product Definition">Product Definition and Validation</option>
                <option value="HCI">Human Computer Interaction</option>
                <option value="Software Engineering">Software Engineering</option>
            </select>
            <br><br>
            
            <input type="submit" name="100%Attendance" value="100%Attendance" formaction="#" style="width: 120px; height: 30px; background-color: rgb(45, 93, 155); color:whitesmoke;">
            <input type="submit" name="CATEligibility" value="CAT Eligibility" formaction="#" style="width: 100px; height: 30px; background-color: rgb(45, 93, 155); color: whitesmoke;">
            <input type="submit" name="submit" value="View" formaction="#" style="width: 80px; height: 30px; background-color: rgb(45, 93, 155); color: whitesmoke;"><br><br>
            </form>
        
            <?php

            if(isset($_POST['submit']))
            {
            $branch=$_POST["Branch"];
            $subjects=$_POST["Subjects"];
            echo "<table border = '1'><th>RegNo</th><th>Name</th><th>Branch</th><th>".$subjects."</th>";
            $criteria = array("Branch"=> $branch);
            $data_info=$tb1->find($criteria); 
            $count=0;
            echo "<tr>"; 
            foreach($data_info as $b)
            {
             if($b[$subjects]!=null)
             {
               $count++;  
               echo "<td>" .$b['RegNo']. "</td>";
               echo "<td>" .$b['Name']. "</td>";
               echo "<td>" .$b['Branch']. "</td>";
               echo "<td>" .$b[$subjects]. "</td>";
             }
             elseif($b[$subjects]==null)
                 {
                       $count++;
                       echo " <td colspan='4'> Data Not Found </td>";
                       break;
                 }
                    echo "</tr>";
              }
            }
             elseif(isset($_POST['100%Attendance']))
              {
                $branch=$_POST["Branch"];
                $subjects=$_POST["Subjects"];
                echo "<table border = '1'><th>RegNo</th><th>Name</th><th>Branch</th><th>".$subjects."</th>";
                echo "<tr>"; 
                $criteria = array("Branch"=> $branch);
                $data_info=$tb1->find($criteria); 
                $count=0;
                foreach($data_info as $b)
                {
                 if($b[$subjects]==100)
                  {
                   $count++;  
                   echo "<td>" .$b['RegNo']. "</td>";
                   echo "<td>" .$b['Name']. "</td>";
                   echo "<td>" .$b['Branch']. "</td>";
                   echo "<td>" .$b[$subjects]. "</td>";
                  }
                  elseif($b[$subjects]==null)
                  {
                      $count++;
                      echo " <td colspan='4'> Data Not Found </td>";
                      break;
                  }
                    echo "</tr>";
                   }
                }
                elseif(isset($_POST['CATEligibility']))
                {
                   $branch=$_POST["Branch"];
                   $subjects=$_POST["Subjects"];
                   echo "<table border = '1'><th>RegNo</th><th>Name</th><th>Branch</th><th>".$subjects."</th>";
                   echo "<tr>"; 
                   $criteria = array("Branch"=> $branch);
                   $data_info=$tb1->find($criteria); 
                   $count=0;
                   foreach($data_info as $b)
                   {
                     if($b[$subjects]>=70)
                      {
                          $count++;  
                          echo "<td>" .$b['RegNo']. "</td>";
                          echo "<td>" .$b['Name']. "</td>";
                          echo "<td>" .$b['Branch']. "</td>";
                          echo "<td>" .$b[$subjects]. "</td>";
                      }
                      elseif($b[$subjects]==null)
                      {
                          $count++;
                          echo " <td colspan='4'> Data Not Found </td>";
                          break;
                      }

                      echo "</tr>";
                  } 
                }
          ?>
        </div>
        </div>
        </body>
</html>