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
              <script>
                     $(function(){
                            $("#data").on("click","tbody tr",function(event){
                                   var value=[];
                                   var count=0;
                                   $(this).find("td").each(function(){
                                          value[count]=$(this).text();
                                          count++;
                                   });
                                   $("#srno").val(value[0]);
                                   $("#txtsoftskill").val(value[1]);
                                  
                            });
                     });

              </script>
              <style>
                     .hardskillcol1{
                          padding: 10px 5px;
                     }
                     .col6{
                            padding: 5px;
                     }
                     .col6 h3{
                            text-align: center;  
                     }
              </style>
       </head>
       <body>
             <?php
                     include("resume1.php");
             ?>

             
             <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 hardskillcol1">
                  
              
 <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col6">
                     
            
                  
                  <div class="panel panel-primary">
                       <div class="panel-heading">
                             <h3 class="panel-title">Panel title</h3>
                       </div>
                       <div class="panel-body">
                          <form action="savesoftskill.php" method="POST" role="form">
                          <?php
                                   require("dbcon1.php");
                                   $id=$_SESSION["id"];
                                   $sql="select max(srno) from softskills where id='$id'";
                                   $res=mysqli_query($link,$sql);
                                   $rowcount=0;
                                   if(mysqli_num_rows($res)>0)
                                   {
                                          if($row=mysqli_fetch_array($res))
                                          {
                                                 $rowcount=$row[0]+1;
                                          }
                                   }
                                   else
                                   {
                                          $rowcount=1;
                                   }  
                            ?>
                            <div class="form-group" style="display:none">
                                  <label for="">Sr.No</label>
                                  <input type="text" name="srno" id="srno" class="form-control" value= <?php echo $rowcount ; ?> required="required" pattern="" title="" readonly>
                                  
                            </div>

                            <div class="form-group">
                                   <textarea name="txtsoftskill" id="txtsoftskill" class="form-control" rows="3" required="required" placeholder="Enter Your Softskills"></textarea >
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="savesoftskill">Submit</button>
                          </form>     
                       </div>
                  </div>
</div>  
<style>
   #thdelete{
       width: 40px;
  }
</style>
<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col6">
       
                  <div class="panel panel-primary">
                       <div class="panel-heading">
                            <h3 class="panel-title">My softskill</h3>
                       </div>
                       <div class="panel-body">
                       <table class="table table-bordered table-hover" id="data">
                            <thead>
                                   <tr>
                                          <th style="display:none">Sr.No</th>
                                          <th>Skills</th>
                                          <th id="thdelete">Delete</th>
                                   </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $id=$_SESSION["id"];
                                   # $no=$_POST["srno"];
                                   $sql="select * from softskills where id='$id'";
                                   
                                   $res=mysqli_query($link,$sql);
                                   if(mysqli_num_rows($res)>0)
                                   {
                                          while($row=mysqli_fetch_array($res))
                                          {
                                                 echo "<tr><td style='display:none'>".$row["1"]."</td>";
                                                 echo"<td>".$row["2"]."</td>";
                                                 ?> <td><a href='savesoftskill.php?btndelete=delete&srno=<?php echo $row["srno"] ?>' type='button' class='btn btn-danger'>
                                                 <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                 </a></td><?php 
                                                 echo"</tr>";
                                          }
                                   
                                   }
                                   
                                   ?> 
                            </tbody>
                            </table>
                             
                       
                                          
                       </div>
                  </div>
                  
 </div>               
                    
             </div>
             
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
