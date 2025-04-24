<?php
  
  session_start();
  require("dbcon1.php");
  if(isset($_POST["savehardskill"]))
  {
       $id=$_SESSION["id"];
       $srno=$_POST["srno"];
       $sql="select *from hardskills where id='$id' and srno='$srno'";
       $res=mysqli_query($link,$sql);
        if(mysqli_num_rows($res)>0)
       {
              
              $sql="delete from hardskills where id='$id' and srno='$srno'";
              mysqli_query($link,$sql);
              echo"<script>alert('record is upadated')</script>";
       }
       $hardskill=$_POST["txthardskill"];
       $sql="insert into hardskills(id,srno,hardskill) values('$id','$srno','$hardskill')";
       if(mysqli_query($link,$sql))
       {
              echo"<script>alert('record is Inserted...')</script>";

              echo"<script>open('hardskill.php','_self')</script>";
       }
       else{
              echo mysqli_error($link);
       }
       mysqli_close($link);
  }
  else if(isset($_GET["btndelete"]))
  {
      $id=$_SESSION["id"];
      $srno=$_GET["srno"];
     // $no=$srno;
      $sql="delete from hardskills where id='$id' and srno='$srno'";
        
      if(mysqli_query($link,$sql))
      {
              // $srno=$no;
              // $sql="update hardskills set srno=srno-1";
              // mysqli_query($link,$sql);
              // if($srno==0){
              //        $srno=1;
              // }
            
              echo "<script>alert('Recrod is Deleted')</script>";
              echo "<script>open('hardskill.php','_self')</script>";          
      }
  }
?>