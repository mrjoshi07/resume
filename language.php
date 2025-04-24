<?php
  require("dbcon1.php");

?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
               $(function(){
                $("#data").on("click","tr",function(event){
                    var values=[];
                    var count=0;
                    $(this).find("td").each(function(){
                        values[count]=$(this).text();
                        count++;
                    });
                    $("#txtsr").val(values[0]);
                    $("#txts").val(values[1]);
                });
            });

        </script>
    </head>
    <body>

          <?php
             include("resume1.php");
          ?>
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="margin:10px 0px 0px 0px;">
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
                
                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title">Softskill</h3>
                      </div>
                      <div class="panel-body">
                            
                            <form action="languagesave.php" method="POST" role="form" >
                            <?php
                                $id=$_SESSION["id"];
                                $sql="select max(srno) from tbllang where id='$id'";
                                $res=mysqli_query($link,$sql);
                                $rowcount=0;
                                if(mysqli_num_rows($res)>0)
                                {
                                    if($row=mysqli_fetch_array($res))
                                    {
                                        $rowcount=$row[0]+1;
                                    }
                                }
                                else
                                {
                                    $rowcount=1;
                                }

                            ?>

                                    <div class="form-group" style="display:none;">
                                        <label for="">Sr.no:</label>
                                        <input type="text" class="form-control" id="txtsr" name="txtsr"
                                        value="<?php echo $rowcount; ?>" placeholder="Input field">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Language:</label>
                                        <input type="text" class="form-control" id="txts" name="txts" placeholder="Input field">
                                    </div>
                                   
                                <button type="submit" name="btnsave" class="btn btn-primary">Save</button>
                            </form>
                            
                      </div>
                </div>


            </div>
            <style>
                #thdelete{
                    width:50px;

                }
            </style>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                
                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title">Language</h3>
                      </div>
                      <div class="panel-body">
                      <table class="table table-bordered table-hover" id="data">
                                <thead>
                                    <tr>
                                        <th  style="display:none;">Sr.No</th>
                                        <th>Language</th>
                                        <th id="thdelete">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql="select *from tbllang where id='$id'";
                                $res=mysqli_query($link,$sql);
                                if(mysqli_num_rows($res)>0)
                                {
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        ?>
                                        <tr>
                                            <td style="display:none"><?php echo $row["srno"]; ?></td>
                                            <td><?php echo $row["language"]; ?></td>
                                            <td>
                                            <a href="languagesave.php?btndelete=delete&srno=<?php echo $row["srno"]; ?>" type="button" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>

                                            </td>
                                        </tr>

                                        
                                        <?php
                                    }
                                }
                            ?>
                                </tbody>
                            </table>

                      </div>
                </div>
                
            </div>
            
        </div>

        <!-- jQuery -->
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
