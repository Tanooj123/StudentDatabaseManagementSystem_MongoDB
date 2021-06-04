<html>
    <head>
        <title>
            Student Information Home Page
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
            #login{
                
                text-align: left;
                float:left;
                background-repeat: no-repeat;
                width:40%;
                background-size: 110% 120%;
            }
            .right{
                float: right;
            }
            .left{
                float: left;
            }
            #homebut{
                margin-left: 30px ;
                margin-top:50px;
                background-color: rgb(45, 93, 155);
                color: whitesmoke;
            }
            #logbtn{
                margin-right: 30px;
                margin-top:50px;
                background-color: rgb(45, 93, 155);
                color: whitesmoke;
            }
            #img{
                margin-left:350px;
            }
            marquee{
                margin-left:480px;
                margin-right:430px;
            }
            #image{
               float:right;             
               width:60%;
            }
            a{
                color: whitesmoke;
            }
        </style>
    </head>
    <body>
    <img id="img" src="images/logo1.png" alt="logo" width="600" height="110"> 
        <span>
        <button type="submit" class="left" id="homebut" style="width: 100px;height: 35px;"><b><i><a href="home.php" >Home</a></i></b></button>
        <button type="submit" class="right" id="logbtn" style="width: 100px;height: 35px;"><b><i><a href="loginpage.php" >Logout</a></i></b></button>
        <marquee direction="left">
        <h4>Welcome to AMIT Admin Portal ..! </h4>
        </marquee>
        </span>
        <br>
        <br>
        <hr>
    </div>
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
    <div id="image">
    <img src="images/campus.png" alt="campus" width="100%" height="80%">
    </div>
    </body>

    
</html>