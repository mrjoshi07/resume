
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
                            $("#data").on("click"," tr",function(event){
                                   var value=[];
                                   var count=1;
                                   $(this).find("td").each(function(){
                                          value[count]=$(this).text();
                                          count++;
                                   });
                                   $("#srno").val(value[1]);
                                   $("#mediatype").val(value[2]);
                                   $("#link").val(value[3]);
                                  
                            });
                     });

              </script>
              <style>
                     .linkcol1{
                            margin-top: 20px;
                     }
                     .linkcol1 h3{
                            text-align: center;
                     }
              </style>
       </head>
       <body>
              
       <?php
              include("resume1.php");
       ?>

       
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 linkcol1">
        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              
              <div class="panel panel-primary">
                       <div class="panel-heading">
                                   <h3 class="panel-title">Put Your Information</h3>
                       </div>
                       <div class="panel-body">
                            <form action="linkssave.php" method="POST" role="form">
                            <?php
                                   require("dbcon1.php");
                                   $id=$_SESSION["id"];
                                   $sql="select max(srno) from links where id='$id'";
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
                                   <label for="">Sr.No :- </label>
                                   <input type="text" class="form-control" id="srno" name="srno" value= <?php echo $rowcount ; ?> readonly>
                            </div>
                            
                            <div class="form-group">
                                 
                                   <input type="text" class="form-control" id="mediatype" name="mediatype" placeholder="Media type">
                            </div>

                            <div class="form-group">
                             
                                   <input type="text" class="form-control" id="link" name="link" placeholder="Links">
                            </div>
                            
                            <button type="submit" name="savelinks" class="btn btn-primary">Submit</button>
                    </form>    
                 </div>
              </div>
        </div>
        <style>
       #thdelete{
              width: 40px;
       }
       </style>
        
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              
              <div class="panel panel-primary">
                       <div class="panel-heading">
                                   <h3 class="panel-title">My HUB</h3>
                       </div>
                       <div class="panel-body">
                            
                            <table class="table table-hover table-bordered">
                                   <thead>
                                          <tr>
                                                 <th style="display:none">Sr.No</th>
                                                 <th>Media Type</th>
                                                 <th>Links</th>
                                                 <th id="thdelete"> Delete</th>
                                          </tr>
                                   </thead>
                                   <tbody id="data">
                                   <?php
                                          require("dbcon1.php");
                                          $id=$_SESSION["id"];
                                          $sql="select *from links where id='$id'";
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo "<tr>";
                                                        echo "<td style='display:none'>" . $row["1"] . "</td>";
                                                        echo "<td>" . $row["2"] . "</td>";
                                                        echo "<td>" . $row["3"] . "</td>";
                                                        ?> <td><a href='linkssave.php?btndelete=delete&srno=<?php echo $row["srno"] ?>' type='button' class='btn btn-danger'>
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </a></td><?php
                                                        echo "</tr>";
                                                 
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
