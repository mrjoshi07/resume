
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
                            $("#p1").click(function(){
                                   let data=$("#p1").text()
                                   $("#txtarea").text(data);
                            });
                     })
              </script>
             
              <style>
                     .aboutcol1{
                          
                     }
                     .aboutcol1 h3{
                            text-align: center;
                            padding: 0px 0px;  
                     }
              </style>
       </head>
       <body>
                     <?php
                            include("resume1.php");
                     ?>
             
  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 aboutcol1" style="padding: 30px;">
              
           
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                     
                     <div class="panel panel-primary">
                              <div class="panel-heading">
                                          <h3 class="panel-title">Add a Photo</h3>
                              </div>
                              <div class="panel-body">

                              
                              <form action="savephoto.php"  method="POST" role="form" enctype="multipart/form-data">
                                 
                                   <div class="form-group">
                                          <label for="">Updload a File/Photo</label>
                                          <input type="file" class="form-control"  id="txtfile" name="txtfile" placeholder="Input field">
                                   </div>1

                                   <a href='savephoto.php?btndelete=delete&id=<?php echo $row["srno"] ?>' type='button' class='btn btn-danger'>
                                   <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                   </a>

                                   <button type="submit" name="savephoto" class="btn btn-success">Done</button>
                                   </form>
                              </form>
                              
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
