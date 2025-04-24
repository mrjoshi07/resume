
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
                     body{
                            background-color: rgb(222, 222, 222);
                     }
                     .col1{
                            text-align: center;
                     }
                
                     .col2{
                            top: 130px;
                           
                     }
                     .quatecol1{
                            top: 220px;
                            left: 10px;
                            color: black;
                            
                     }
                     .quatecol1 h1{
                            font-weight: bold;
                            font-family: 'Times New Roman', Times, serif;
                     }
                   
                     .newcol1{
                            top: 430px; 
                            right: 320px; 
                            border-radius: 10px;
                            text-align: center; 
                            padding: 10px; 
                            font-weight: bold; 
                            background-color: rgb(76, 187, 23); 
                           
                     }
                     .newcol1 a{
                            margin: 10px 20px;
                            padding: 10px 20px;
                            color: white;
                            text-decoration: none;
                     }
                     .newcol1:hover{
                            background-color: rgb(0, 128, 0); 
                     }
              </style>
       </head>
       <body>
    
  
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 quatecol1">
              
              <div class="page-header">
                <h1>Vaibhav Joshi | <small>web Designer</small></h1>
              </div>
      
  </div>
  
       
       <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col2">
                     
       <div class=""></div>
              <div class="panel panel-info">
                 <div class="panel-heading">
                     <h3 class="panel-title">Login</h3>
                 </div>
                 <div class="panel-body">
                     <form action="chkpagelogin.php" method="POST" role="form">
                     <div class="form-group">
                            <label for="">Login-ID</label>
                            <input type="text" class="form-control" id="txtid" name="txtid">
                     </div>

                     <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="txtpass" name="txtpass">
                     </div>
              
                     <button type="submit"  class="btn btn-primary"id="txtlogin" name="txtlogin" >Login</button>
                     </form>    
                 </div> 
              </div> 
        </div>
            
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 newcol1" style="">
              <a  
              href="create new account.php">New registration</a>
        </div>
        

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
