
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
                     $("#data").on("click",function(event){
                            var value=[];
                            var count=1;
                            $(this).find("li").each(function(){
                                   value[count]=$(this).text();
                                   count++;
                            });
                            $("#address").val(value[1]);
                            $("#city").val(value[2]);
                            $("#pincode").val(value[3]);
                            $("#state").val(value[4]);
                            $("#gender").val(value[5]);
                            $("#status").val(value[6]);
                            $("#dob").val(value[7]);
                     });
              });

       </script>
<style>
.personalcol1{
padding: 0px;
margin-top: 10px;
}
.personalcol1 h3{
text-align: center;

padding: px 0px;  
}
.panel2 .list1{
       padding: 20px;
}
</style>       
</head>
<body>

<?php
include("resume1.php");
?>


<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 personalcol1">


<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
 
<div class="panel panel-primary">
       <div class="panel-heading">
              <h3 class="panel-title">Put Your Information</h3>
       </div>
       <div class="panel-body">
       
       <form action="personalsave.php" method="POST" role="form">
           
              <div class="form-group">
                    
                     <input type="text" class="form-control" id="address" name="address" placeholder="Address">
              </div>

              <div class="form-group">
                    
                     <input type="text" class="form-control" id="city" name="city" placeholder="City">
              </div>
              <div class="form-group">
                  
                     <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode">
              </div>

              <div class="form-group">
                   
                     <input type="text" class="form-control" id="state" name="state" placeholder="State">
              </div>

              <div class="form-group">
                     
                    <select name="gender" id="gender" class="form-control" required="required" placeholder="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                    </select>
              </div>

              <div class="form-group">
                    
                     <select name="status" id="status" class="form-control" required="required">
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                     </select>
              </div>

              <div class="form-group">
                     <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
              </div>
              <button type="submit" class="btn btn-primary" name="savepersonal">Save</button>
       </form>
       
       </div>
 </div>
</div>


<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       
       <div class="panel panel-primary panel2" >
                <div class="panel-heading">
                            <h3 class="panel-title">My Personal</h3>
                </div>
                <div class="panel-body">
                     
                     <ul class="list-group list1" id="data">
                     <?php
                            require("dbcon1.php");
                            $id=$_SESSION["id"];
                            $sql="select *from personal where id='$id'";
                            $res=mysqli_query($link,$sql);
                            if(mysqli_num_rows($res)>0)
                            {
                                   if($row=mysqli_fetch_array($res))
                                   {      
                                        
                                          echo"<li class='list-group-item'>".$row["1"]."</li>";
                                          echo"<li class='list-group-item'>".$row["2"]."</li>";
                                          echo"<li class='list-group-item'>".$row["3"]."</li>";
                                          echo"<li class='list-group-item'>".$row["4"]."</li>";
                                          echo"<li class='list-group-item'>".$row["5"]."</li>";
                                          echo"<li class='list-group-item'>".$row["6"]."</li>";
                                          echo"<li class='list-group-item'>".$row["7"]."</li>";
                                         
                                   }
                            
                            }
                            
                            ?> 
                            
                     </ul>
                       
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
