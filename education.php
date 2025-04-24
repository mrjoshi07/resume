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
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
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
              $("#ename").val(value[1]);
              $("#collname").val(value[2]);
              $("#year").val(value[3]);
              $("#result").val(value[4]); 
       });
  });

</script>
<?php
       require("dbcon1.php");
?>

<style>
.educationcol1 .col6{
       padding: 10px 5px;
}
.col6 h3{
       text-align:center;
}


</style>
</head>
<body>
<?php
include("resume1.php");
?>

<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 educationcol1">


<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col6">
 
<div class="panel panel-primary">
       <div class="panel-heading">
              <h3 class="panel-title">Enter Your Education</h3>
       </div>
       <div class="panel-body">
       
       <form action="saveeducation.php" method="POST" role="form">
              
              <?php
                     
                     $id=$_SESSION["id"];
                     $sql="select max(srno) from education where id='$id'";
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
                     <input type="text" class="form-control" id="srno" name="srno" placeholder="Input field" readonly value=<?php echo $rowcount; ?> required >
              </div>
       
              <div class="form-group">
                     
                     <input type="text" class="form-control" id="ename" name="ename" placeholder="Education Name" required>
              </div>

              <div class="form-group">
                  
                     <input type="text" class="form-control" id="collname" name="collname" placeholder="College / University" required>
              </div>

              <div class="form-group">
                   
                     <input type="text" class="form-control" id="year" name="year" placeholder="Passing Year" required>
              </div>

              <div class="form-group">
                   
                     <input type="text" class="form-control" id="result" name="result" placeholder="Result" required>
              </div>

              <button type="submit" name="saveeducation" id="saveeduacation" class="btn btn-primary">Submit</button>
       </form>
              
       </div>
</div>
</div>

<style>
   #thdelete{
       width: 40px;
  }
</style>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col6">
 
<div class="panel panel-primary">
       <div class="panel-heading">
              <h3 class="panel-title">MY Journey</h3>
       </div>
       <div class="panel-body paneltable">
              
              <table class="table table-bordered table-hover" id="data">
              <thead>
                     <tr>
                            <th style="display:none">Sr.No</th>
                            <th>Name</th>
                            <th>College/Uni</th>
                            <th>PassingYear</th>
                            <th>Result</th>
                            <th id="thdelete">Delete</th>
                     </tr>
              </thead>
              <tbody >
                    <?php
                     $id=$_SESSION["id"];
                     # $no=$_POST["srno"];
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
                                    ?> <td><a href='saveeducation.php?btndelete=delete&srno=<?php echo $row["srno"] ?>' type='button' class='btn btn-danger'>
                                   <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                   </a></td><?php 
                                   echo "</tr>";
                                   #$row["srno"];
                                   #$name=$row[2];
                                   #$college=$row["3"];
                                   #$year=$row["4"];
                                   #$result=$row["5"];
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
