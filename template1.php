
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Title Page</title>
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
              <style>
                     body{
                            /* background-image: linear-gradient(to top left, #ffd1fc ,  #f6e0c2,rgb(43, 241, 238)); */
                         
                     }
                     .temp11{
                            
                            height: fit-content;
                            /* background-image: linear-gradient(to top left, #ffd1fc , rgb(244, 208, 156),rgb(43, 241, 238)); */
                            background-image: linear-gradient(to top left, #ffd1fc ,  #f6e0c2,rgb(43, 241, 238));
                     }
                     .temp121 img{

                            margin: 10px;
                     }
                     .temp121 h4{
                            padding: 10px;
                            text-align: center;
                            margin:  10px;
                            border-radius: 180px;
                            background-color: black;
                            color: white;
                     }
                     .temp122{
                            top: ;
                            padding: 30px;
                     }
                     .temp122 p{
                            text-align: justify;
                     }
                     .temp13 ul{
                            display: flex;
                            list-style: none;
                            margin: 0px;
                            padding: 0px;
                     }
                     .temp13 li{
                            border: 1px solid black;
                            padding: 10px 50px;
                            margin: 0px 20px;
                            border-radius: 180px;
                     }
                     .col14{
                            border: 1px solid black;
                            margin:10px;
                            border-radius: 20px;
                     }
                     .col14 li{
                            padding: 10px;
                     }
                     .temp15{
                            border: 1px solid black;
                          
                            margin:12px;
                            border-radius: 20px;
                     }
              </style>  
       </head>
       <body>
            
       
       <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
              
       </div>
       
              
       <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 temp11" style="padding: 0px; margin: 0px; ">
                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temp12" style="padding: 0px; margin: 0px; ">
                            
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 temp121" style="padding: 0px; margin: 0px; ">
                              <?php
                                   session_start();
                                   require("dbcon1.php");
                                   $id=$_SESSION["id"];
                                   $sql="select * from  studphoto where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                          if($row=mysqli_fetch_array($res))
                                          {
                                                 ?> <img src="<?php echo $row["path"]; ?>" width="fit-content" height="250px" alt=""> <?php
                                          }
                                   }
                              ?>

                              <h4>web developer</h4>     

                            </div>
                            
                            <div class="col-xs-9 col-sm-9 col-md-8 col-lg-8 temp122">
                                   <h1><?php echo $_SESSION["uname"] ?></h1> 
                                   <hr style="border: 1px solid black">
                                   <?php
                                          $id=$_SESSION["id"];
                                          # $no=$_POST["srno"];
                                          $sql="select * from about where id='$id'";
                                          
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 if($row=mysqli_fetch_array($res))
                                                 {
                                                 
                                                        echo "<p>".$row["1"]."</p>";
                                                 
                                                 }
                                          
                                          }
                                          
                                   ?>  
                            </div>
                            
                     </div>

                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temp13">
                            <h3><b>CONTACT</b></h3>
                            <br>
                            <ul>                              
                               <?php
                                   $sql="select * from tblstudent where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                       if($row=mysqli_fetch_array($res))
                                       { 
                                          echo"<li>".$row[3]."</li>";
                                          echo"<li>".$row[2]."</li>";
                                       }
                                   }
                                 ?>
                            </ul>
                     </div>

                     
                     <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col14">
                            <h3><b>EXPERIENCE</b></h3>       
                            <ul>                              
                               <?php
                                   $sql="select * from exeperience where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                       while($row=mysqli_fetch_array($res))
                                       { 
                                          echo"<li>".$row[2]."</li>";
                                          // echo"<li>".$row[2]."</li>";
                                       }
                                   }
                                 ?>
                            </ul>
                     </div>
                     
                     
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 temp15">
                            <h3><b>EDUCATION</b></h3>
                            <ul>
                            <table class="table">
                            <tbody >
                            <?php
                                   $id=$_SESSION["id"];
                                   $sql="select * from education where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                          while($row=mysqli_fetch_array($res))
                                          {
                                                 echo "<tr>";
                                                 echo "<td style='display:none'>" . $row["srno"] . "</td>";
                                                 echo "<td>" . $row["ename"] . "</td>";
                                                 echo "<td>" . $row["college"] . "</td>";
                                                 // echo "<td>" . $row["passingyear"] . "</td>";
                                                 echo "<td>" . $row["result"] . "</td>";
                                                 echo "</tr>";
                                          }
                                   }
                                   ?>
                            </tbody>
                            </table>
                            </ul>
                     </div>
                     
                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 temp16">
                            
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                               <h3><b>SOFTSKILL</b></h3>
                                 <ul>
                                   <?php
                                          $id=$_SESSION["id"];
                                          # $no=$_POST["srno"];
                                          $sql="select * from softskills where id='$id'";
                                          
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo"<li>".$row["2"]."</li>";
                                                       
                                                 }
                                          
                                          }
                                          
                                          ?>  
                                   </ul> 
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                               <h3><b>HARDSKILL</b></h3>
                                 <ul>
                                   <?php
                                          $id=$_SESSION["id"];
                                          # $no=$_POST["srno"];
                                          $sql="select * from hardskills where id='$id'";
                                          
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo"<li>".$row["2"]."</li>";
                                                 }
                                          
                                          }
                                          
                                          ?>  
                                   </ul> 
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                               <h3><b>PERSONAL</b></h3>
                                 <ul>
                                   <?php
                                          $id=$_SESSION["id"];
                                          # $no=$_POST["srno"];
                                          $sql="select * from personal where id='$id'";
                                          
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo"<li>".$row["1"]."</li>";
                                                        echo"<li>".$row["2"]."</li>";
                                                        echo"<li>".$row["3"]."</li>";
                                                        echo"<li>".$row["4"]."</li>";
                                                        echo"<li>".$row["5"]."</li>";
                                                        echo"<li>".$row["6"]."</li>";
                                                        echo"<li>".$row["7"]."</li>";
                                                 }
                                          
                                          }
                                          
                                          ?>  
                                   </ul> 
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                               <h3><b>SKILLS</b></h3>
                                 <ul>
                                   <?php
                                          $id=$_SESSION["id"];
                                          # $no=$_POST["srno"];
                                          $sql="select * from tbllang where id='$id'";
                                          
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo"<li>".$row["2"]."</li>";
                                                 }
                                          
                                          }
                                          
                                          ?>  
                                   </ul> 
                            </div>
                            
                         
                     </div>
                      
                     
        </div>
              

          
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
