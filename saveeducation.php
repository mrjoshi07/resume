<?php
  session_start();
  require("dbcon1.php");
  if(isset($_POST["saveeducation"]))
  {
       $id=$_SESSION["id"];
       $srno=$_POST["srno"];
       $sql="select *from education where id='$id' and srno='$srno' ";
       $res=mysqli_query($link,$sql);
        if(mysqli_num_rows($res)>0)
       {
              
              $sql="delete from education where id='$id' and srno='$srno'";
              mysqli_query($link,$sql);
              echo"<script>alert('record is upadated')</script>";
       }
       $ename=$_POST["ename"];
       $college=$_POST["collname"];
       $year=$_POST["year"];
       $result=$_POST["result"];
       $sql="insert into education(id,srno,ename,college,passingyear,result) values('$id','$srno','$ename','$college','$year','$result') ";
       if(mysqli_query($link,$sql))
       {
              echo"<script>alert('record is Inserted...')</script>";

              echo"<script>open('education.php','_self')</script>";
       }

       else{
              echo mysqli_error($link);
       }
       // $sql1"select * from education order by passingyear";
       // mysqli_query($link,$sql);
       mysqli_close($link);
  }
  else if(isset($_GET["btndelete"]))
  {
      $id=$_SESSION["id"];
      $srno=$_GET["srno"];
     // $no=$srno;
      $sql="delete from education where id='$id' and srno='$srno' ";
        
      if(mysqli_query($link,$sql))
      {
              // $srno=$no;
              // $sql="update education set srno=srno-1 ";
              // mysqli_query($link,$sql);
              // if($srno==0){
              //        $srno=1;
              // }
            
              echo "<script>alert('Recrod is Deleted')</script>";
              echo "<script>open('education.php','_self')</script>";          
      }
}
?>