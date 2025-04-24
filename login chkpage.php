<?php
       session_start();
       $name=$_POST["txtid"];
       $password=$_POST["txtpass"];
       if($name=="vaibhavj" && $password=="8600490485")
       {
              $_SESSION["name"]=$name;
              echo"<script>open('resume1.php','_self')</script>";
       }

       else
       {
              echo"<script>alert('Inavalid id or password')</script>";
              echo"<script>open('login page.php','_self')</script>";
       }
?>