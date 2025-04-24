<?php
       session_start();
       require("dbcon1.php");
       if(isset($_POST["savepersonal"]))
       {
              $id=$_SESSION["id"];
              $sql="select *from personal where id='$id'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from personal where id='$id'";
                     mysqli_query($link,$sql);
                     echo"<script>alert('Record is deleted and Updated..')";

              }
              $address=$_POST["address"];
              $city=$_POST["city"];
              $pincode=$_POST["pincode"];
              $state=$_POST["state"];
              $gender=$_POST["gender"];
              $status=$_POST["status"];
              $dob=$_POST["dob"];
              $sql="insert into personal(id,address,city,state,pincode,gender,marriage,dob) values('$id','$address','$city','$state','$pincode','$gender','$status','$dob')";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>alert('record is Inserted...')</script>";

                     echo"<script>open('personal.php','_self')</script>";
              }
              else
              {
                     echo mysqli_error($link);
              }
              mysqli_close($link);
       }
?>