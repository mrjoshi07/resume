<?php
  session_start();
  require("dbcon1.php");
  if(isset($_POST["aboutsave"]))
  {
      
       $id=$_SESSION["id"];
       $sql="select *from about where id='$id'";
       $res=mysqli_query($link,$sql);
       if(mysqli_num_rows($res)>0)
       {
              $sql="delete from about where id='$id'";
              mysqli_query($link,$sql);
       }
       $about=$_POST["txtarea"];
       $sql="insert into about values('$id','$about')";
       if(mysqli_query($link,$sql))
       {
              echo"<script>alert('Record is updated')</script>";

              echo"<script>open('aboout1.php','_self')</script>";

       }
       else
       {
              echo mysqli_error($link);
       }
       mysqli_close($link);
  }
?>