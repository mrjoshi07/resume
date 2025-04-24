<?php
       session_start();
       require("dbcon1.php");
       if(isset($_POST["savelinks"]))
       {
              $id=$_SESSION["id"];
              $srno=$_POST["srno"];
              $sql="select *from links where id='$id' and srno='$srno'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from links where id='$id' and srno='$srno'";
                     mysqli_query($link,$sql);
                     echo"<script>alert('Record is deleted and Updated..')";

              }
              $type=$_POST["mediatype"];
              $links=$_POST["link"];
           
              $sql="insert into links(id,srno,mediatype,link) values('$id','$srno','$type','$links')";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>alert('record is Inserted...')</script>";

                     echo"<script>open('links.php','_self')</script>";
              }
              else
              {
                     echo mysqli_error($link);
              }
              mysqli_close($link);
       }
       else if(isset($_GET["btndelete"]))
       {
           $id=$_SESSION["id"];
           $srno=$_GET["srno"];
          // $no=$srno;
           $sql="delete from links where id='$id' and srno='$srno'";
           if(mysqli_query($link,$sql))
           {
                   // $srno=$no;
                   // $sql="update softskills set srno=srno-1";
                   // mysqli_query($link,$sql);
                   // if($srno==0){
                   //        $srno=1;
                   // }
                 
                   echo "<script>alert('Recrod is Deleted')</script>";
                   echo "<script>open('links.php','_self')</script>";          
           }
      }
?>