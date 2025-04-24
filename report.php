
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
              <style>
                     div{
                           
                            margin: 0px;
                            padding: 0px;
                          
                     }
                     .coltemp12{
                            top: 30px;
                            text-align: center;
                     }
                     .coltemp12 h1{
                            font-family: 'Times New Roman', Times, serif;
                     }
                     .coltemp12 .tempul1{
                            list-style: none;
                            display: flex;
                            justify-content: center;
                            align-items: center; 
                            padding: 0px 0px;
                            font-weight: bold;
                     }
                     .coltemp12 .tempul1 li{
                            padding: 0px 7px;
                     }
                     .coltemp12  .tempul2{
                            list-style: none;
                            display: flex;
                            justify-content: center;
                            align-items: center; 
                            padding: 0px 0px;
                            font-weight: bold;       
                     }
                     .coltemp12 .tempul2 li{
                            padding: 0px 7px;
                     }
              </style>
       </head>
       <body>
              <?php
                     // include("resume1.php");
              ?>
              
              <!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                     
              </div> -->
              
            
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 coltemp1" style="margin: 0px; padding: 5px">
                     
                     <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 coltemp11"  style="margin: 0px; padding: 0px">
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
                           
                            ?> <img src="<?php echo $row["path"]; ?>" width="150px" height="150px" alt=""> <?php
                            }
                        }
                        
                     ?> 
                     </div>
                     
                     
                     <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 coltemp12" style="margin: 0px; padding: 0px">  
                            <h1><?php echo $_SESSION["uname"] ?></h1> 
                            <ul class="tempul1">
                                 <?php
                                   $sql="select * from tblstudent where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                       if($row=mysqli_fetch_array($res))
                                       { 
                                          echo"<li>".$row[2]."</li>";
                                          echo"<li>".$row[3]."</li>";
                                       }
                                   }
                                 ?>
                            </ul>
                            <ul class="tempul2">
                               <?php
                                   $sql="select * from links where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                       while($row=mysqli_fetch_array($res))
                                       { 
                                          echo"<li>".$row[2]."</li>";
                                          echo"<li>".$row[3]."</li>";
                                       }
                                   }
                                 ?>
                            </ul>
                     </div>
                     
                     
                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="margin: 0px; padding: 0px">
                            <hr>
                            <h3><b>Education</b></h3>
                          
                            <table class="table table-hover" id="data">
                            <thead>
                                   <tr>
                                          <th style="display:none">Sr.No</th>
                                          <th>Name</th>
                                          <th>College/Uni</th>
                                          <th>PassingYear</th>
                                          <th>Result</th>
                                   </tr>
                            </thead>
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
                                                 echo "<td>" . $row["passingyear"] . "</td>";
                                                 echo "<td>" . $row["result"] . "</td>";
                                                 echo "</tr>";
                                          
                                          }
                                   }
                                   ?>
                            </tbody>
                            </table>
                 
                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  style="margin: 0px; padding: 0px">
                     
                            <h3><b>Softskill</b></h3>
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

                     
                     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  style="margin: 0px; padding: 0px">
                    
                     <h3><b>Hardskills</b></h3>
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
                     <h3><b>Personal</b></h3>
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

                            <h3><b>About</b></h3>
                            <?php
                                   $id=$_SESSION["id"];
                                   # $no=$_POST["srno"];
                                   $sql="select * from about where id='$id'";
                                   
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                          if($row=mysqli_fetch_array($res))
                                          {
                                               
                                                 echo"<li>".$row["1"]."</li>";
                                              
                                          }
                                   
                                   }
                                   
                                   ?>  
                            </ul>

                 </div>    
                     
              </div>
              
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
