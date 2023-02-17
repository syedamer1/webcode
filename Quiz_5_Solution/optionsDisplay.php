<?php
if(isset($_POST['insert']))
{
$databaseHost = 'localhost';
$databaseName = 'quiz_5';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$Height=$_POST['Height'];
$Weight=$_POST['Weight']; 
$result = mysqli_query($mysqli, "INSERT INTO operations(Height,Weight) VALUES('$Height','$Weight')");

if($result==true)
{
  echo "<script>Data Inserted Successfully</script>";
  echo "<script>window.location.href='/Week_16/Quiz_5/option.html';</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Insert Modal -->
 <!-- Modal -->
  <div class="modal fade" id="insertModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">insertModal</h4>
        </div>
        <div class="modal-body">
         <h6>
            <form action="" method="post">
            <label>Height</label>
            <input type="text" name="Height" class="form-control"><br>
            <label>Weight</label>
            <input type="text" name="Weight" class="form-control"><br>
            <button class="btn btn-success" name="insert" type="submit">Insert</button>

          </form>  

         </h6>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal -->
  <!-- Delete Modal -->
 <!-- Modal -->
  <div class="modal fade" id="deleteModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Data</h4>
        </div>
        <?php
        $databaseHost = 'localhost';
        $databaseName = 'quiz_5';
        $databaseUsername = 'root';
        $databasePassword = ''; 
          $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
      $result = mysqli_query($mysqli, "SELECT * FROM operations ORDER BY id DESC");

        ?>
        <div class="modal-body">
        
  <table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td>Height</td>
    <td>Weight</td>
  </tr>
  <?php 

  while($res = mysqli_fetch_assoc($result)) {     
    echo "<tr>";
    echo "<td>".$res['Height']."</td>";
    echo "<td>".$res['Weight']."</td>";   
  }
  ?>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Modal -->
  <?php
    if($_GET['option']==1)
    {
      echo "<script>$('#insertModal').modal('show');</script>";
    }
    else if($_GET['option']==2)
    {
      echo "<script>$('#deleteModal').modal('show');</script>";
    } 
?>
</body>

