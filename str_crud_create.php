<?php
require 'sys_crud.php';

if(isset($_POST['submit_create_button'])){
    createData();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <div class="col-xs-6">
    <h2 class="text-center">Create record</h2>
    <form action="str_crud_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
       <input type="text" class="form-control" name="username" placeholder="enter name"> 
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="password">
      </div>
      
      <input class="btn btn-primary" type="submit" name="submit_create_button" value="CREATE">

      <h3>Offline viewing</h3>
      <span>Want to Read database? <a href="str_crud_read.php">Click here</a></span>
      <br>
      <span>Want to Delete rows in the database? <a href="str_crud_delete.php">Click here</a></span>
      <br>
      <span>Want to Update rows in the database? <a href="str_crud_update.php">Click here</a></span>
      <br>
    </form>    

  </div>

</div>



</body>
</html>