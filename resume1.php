
<!DOCTYPE html>
<html lang="">
<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Title Page</title>

       <!-- Bootstrap CSS -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
       <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <![endif]-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <?php
              session_start();
              if(!isset($_SESSION["uname"]))
              {
                     echo"<script>open('login page.php','_self')</script>";
              }
    
       ?>
       <style>
              body{
                     background-color: rgb(222, 222, 222);
              }
              .col1{
                     background-image: url(images/black\ background3.jpg);
                     background-size: 100% 100%;
                     height: 800px;
              }

              .col3 h1{
                     font-family: 'Times New Roman', Times, serif;
                     font-weight: bold;
                     padding: 10px;
                     color: white;
              }
              .col3 h1 small{
                     color: black;
                     font-weight: bold;
              } 
              
              .col3{
                     height: 100px;
                     text-align: center;
                     background-image: url(images/blue\ background2.jpg);
                     background-size: 100% 100%;
              }
              .col11{
                     margin: 0px 0px;
                     padding: 0px 0px;
                     width: 250px;
                     height: 250px;
                     border-radius: 360px;
                     left: 20px;
                     top: 5px;
                    
              }
              .col11 img{
                     margin-left: -20px;
                     width: 250px;
                     height: 250px;
                     border-radius: 360px;
                     z-index: 3;
              }
              .colform{
                     top: -200px;
                     z-index: 1;
              }
              .col12{
                  
                     text-align: center;
                     margin: 30px 0px 0px 0px;
                     left: 10px;
              }
              .col12 a{
                     display: block;
                     padding: 12px;
                     font-weight: bold;
                     text-decoration: none;
                     font-size: 15px;
                     color: white;
                     margin: 0px 40px;
              
              }
              .col1{
                     height: 820px;
              }
              .col11 #txtfile{
                    margin: 100px 0px 0px 20px; 
              }
              .col11 button{
                     margin: 20px 70px;
              }
              
       </style>
</head>
<body style="background-color: rgb(238, 238, 238);">

       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col1">
              
              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col11">
                     <?php
                        require("dbcon1.php");
                        $id=$_SESSION["id"];
                        $sql="select * from  studphoto where id='$id'";
                        $res=mysqli_query($link,$sql);
                        if(mysqli_num_rows($res)>0)
                        {
                            if($row=mysqli_fetch_array($res))
                            {
                           
                            ?> <img src="<?php echo $row["path"]; ?>" width="200px" height="200px" alt=""> <?php
                            }
                        }
                        
                     ?>
              </div>

              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col12">
                  <a href="photo.php">Photo</a>  
                  <a href="aboout1.php">About</a>
                  <a href="personal.php">Personal</a>
                  <a href="hardskill.php">Hardskill</a>
                  <a href="softskill.php">Softskill</a>
                  <a href="language.php">Language</a>
                  <a href="education.php">Education</a>
                  <a href="experience.php">Experience</a>
                  <a href="links.php">Links</a>
                  <a href="report.php">Report</a>
                  <a href="template.php">Template's</a>
                 <span class="glyphicon glyphicon-off" aria-hidden="true"  onclick="logout()"
                 style="color: red; font-size: 20px; top: 10px;"
                 ></span>
                 
                  <script>          
                  function logout(){
                      ans=confirm("Do you want logout...")
                      if(ans)
                      {
                            open("logout.php","_self"); 
                      }
                      else
                      {
                            alert("You click cancel...");
                      }
                     }
                 </script>   
              </div>
              
       </div>
       <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col3">
              <?php
                     include("header.php")
              ?>
       </div>
      
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
