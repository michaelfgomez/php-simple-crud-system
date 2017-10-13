<?php
require 'sys_crud.php';

if(isset($_POST['submit_delete_button'])){
    deleteRows();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <div class="col-xs-6">
    <h2 class="text-center">Delete records</h2>
    <form action="str_crud_delete.php" method="post">

      <div class="form-group">
        <span>Select id to delete </span>
        <select name="id" id="">
          <?php
            showAllData();
          ?>
        </select>
      </div>
      
      <input class="btn btn-primary" type="submit" name="submit_delete_button" value="DELETE">


      <h3>Offline viewing</h3>
      <span>Want to Read database? <a href="str_crud_read.php">Click here</a></span>
      <br>
      <span>Want to Add rows into the database? <a href="str_crud_create.php">Click here</a></span>
      <br>
      <span>Want to Update rows in the database? <a href="str_crud_update.php">Click here</a></span>
      <br>

    </form>    
    
  </div>

</div>



</body>
</html>