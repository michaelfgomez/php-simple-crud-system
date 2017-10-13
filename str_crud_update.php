<?php
require 'sys_crud.php';

if(isset($_POST['submit_update_button'])){
    updateData();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <div class="col-xs-6">
    <h2 class="text-center">Update records</h2>
    <form action="str_crud_update.php" method="post">

      <div class="form-group">
          <?php
            showAllData();
          ?>

          <br>  
        <span>Select id to update </span>
        <select name="id" id="">
          <?php
            showAllData();
          ?>
        </select>

      </div>

      <div class="form-group">
        <label for="username">Username</label>
       <input type="text" class="form-control" name="username" placeholder="enter name"> 
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="password">
      </div>


      
      <input class="btn btn-primary" type="submit" name="submit_update_button" value="UPDATE">


      <h3>Offline viewing</h3>
      <span>Want to Read database? <a href="str_crud_read.php">Click here</a></span>
      <br>
      <span>Want to Add rows into the database? <a href="str_crud_create.php">Click here</a></span>
      <br>
      <span>Want to Delete rows in the database? <a href="str_crud_delete.php">Click here</a></span>
      <br>
    </form>    
    
  </div>

</div>



</body>
</html>