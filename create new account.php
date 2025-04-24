<?php
    session_start();
    require("dbcon1.php");
?>
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
              <script src=" "></script>
              <style>
                     body{
                            background-color: rgb(222, 222, 222);
                     }
                     .col1{
                            top: 30px;
                     }
                     #p1,#p2{
                            color: red;
                     }
              </style>
               <script>
                     function add(){
                            let name=document.getElementById("txtname").value;
                            let mono=document.getElementById("txtmno").value;
                            let pass=document.getElementById("txtpass").value;
                            let repass=document.getElementById("txtrepass").value;

                             let chkname="ABCDEFGHIJKLMNOPQRSTUVWXZYZabcdefghijklmnopqrstuvwxyz ";
                             for(i=0; i<name.length; i++)
                             {
                                   let ch=name.charAt(i);
                                   if(chkname.indexOf(ch)==-1)
                                   {
                                          alert("Invalid Name");
                                          return false;
                                   }

                             }
                             
                             if(mono.length != 10)
                             {
                                   alert("Enter a Valid Mobile No.");
                                   return false;
                             }

                             if(pass.length < 8)
                             {
                                   alert("Password must be Greator 8 char");
                                   return false;
                             }

                             if(pass != repass)
                             {
                                   alert("Password dosen't Matched");
                                   return false;
                             }

                             return true;
                     }

                     $(function(){
                            $("#txtpass").click(function(){
                                   $("#p1").text("Must be 8 digit").show().fadeOut(10000);
                            });
                            $("#txtrepass").click(function(){
                                   $("#p2").text("Must be 8 digit").show().fadeOut(10000);
                            });
                    });
                 
              </script>
              
       </head>
       <body>
              
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                     
              </div>
              
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col1">
              
              <div class="panel panel-info">
                       <div class="panel-heading">
                                   <h3 class="panel-title">Create Your Account</h3>
                       </div>
                       <div class="panel-body">
                                  
                                  <form action="new reg save.php" method="POST" class="form" role="form" onsubmit="return add()">
                            
                                  <?php
                                      require("dbcon1.php");
                                      $sql="select max(id) from tblstudent";
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


                                  <div class="form-group" style="display:none;">
                                          <label class="" for="">ID</label>
                                          <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Input field"  value= <?php echo $rowcount; ?> readonly >
                                   </div>

                                   <div class="form-group">
                                          <label class="" for="">Name</label>
                                          <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Input field">
                                   </div>
                                  
                                   <div class="form-group">
                                          <label class="" for="">E-mail</label>
                                          <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Input field" required>
                                   </div>

                                   <div class="form-group">
                                          <label class="" for="">Mobile No</label>
                                          <input type="number" class="form-control" id="txtmno" name="txtmno" placeholder="Input field" required>
                                   </div>

                                   <div class="form-group">
                                          <label class="" for="">Password</label>
                                          <input type="number" class="form-control" id="txtpass" name="txtpass" placeholder="Input field" required>
                                          <p id="p1"></p>
                                   </div>
                                 
                                   <div class="form-group">
                                          <label class="" for="">Re-Password</label>
                                          <input type="number" class="form-control" id="txtrepass" name="txtrepass" placeholder="Input field" required>
                                          <p id="p2"></p>
                                   </div>
                                 
                                   <button type="submit" name="save" class="btn btn-primary">ADD</button>
                                  </form>
                                  
                       </div>
              </div>
              
            </div>
            

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
