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
       .template2{
              padding: 20px;
              left: 0px;
       }
       .template1 img{
              border: 5px solid black;
              margin: 11px;
              width: 150px;
              height: 200px;
              transition: 2s;
       }
       .template1 img:hover{
            
              width: 320px;
              height: 350px;
              box-shadow: 20px 15px 20px grey;
       }

</style>
</head>
<body>
<?php
include("resume1.php");
?>

<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 template1">
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 template2">
     <a href="template1.php"><img src="img/template 1.jpg" alt=""></a>  
         <img src="img/template 1.jpg" alt="">
         <img src="img/template 1.jpg" alt="">
         <img src="img/template 1.jpg" alt="">
    </div>
       
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 template2">
         <img src="img/template 1.jpg" alt="">
         <img src="img/template 1.jpg" alt="">
         <img src="img/template 1.jpg" alt="">
         <img src="img/template 1.jpg" alt="">
    </div>

   
  
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
