<?php
       session_start();
       require("dbcon1.php");
       if(isset($_SESSION["uname"]))
       {
              echo"<script>open('resume1.php','_self')</script>";
       }
       else if(isset($_POST["txtlogin"]))
       {
              $logid=$_POST["txtid"];
              $pass=$_POST["txtpass"];
              $sql="select *from tblstudent where mobile='$logid' and password='$pass'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                  
                     if($row=mysqli_fetch_array($res))
                     {
                            $_SESSION["id"]=$row["id"];
                            $_SESSION["uname"]=$row["sname"];
                            echo"<script>open('resume1.php','_self')</script>";
                     }
              }
              else 
              {
                     echo"<script>open('login page.php','_self')</script>";
              }
       }
       else 
       {
              echo"<script>open('login page.php','_self')</script>";
       }
?>