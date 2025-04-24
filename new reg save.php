<?php
       require("dbcon1.php");
       if(isset($_POST["save"]))
       {
              $id=$_POST["txtid"];
              $name=$_POST["txtname"];
              $email=$_POST["txtemail"];
              $mobile=$_POST["txtmno"];
              $pass=$_POST["txtpass"];
              $sql="insert into tblstudent values('$id','$name','$email','$mobile','$pass')";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>alert('Record Successfully Inserted')</script>";
                     echo"<script>open('login page.php','_self')</script>";
              }
              else
              {
                     echo mysqli_error($link);
              }
              mysqli_close($link);
       }
?>