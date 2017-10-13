<?php
require 'sys_crud.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">

  <div class="col-xs-6">
    <h2 class="text-center">List of records</h2>
    <form action="str_crud_read.php" method="post">
      


      <h3>Offline viewing</h3>
      <span>Want to Add rows into the database? <a href="str_crud_create.php">Click here</a></span>
      <br>
      <span>Want to Delete rows in the database? <a href="str_crud_delete.php">Click here</a></span>
      <br>
      <span>Want to Update rows in the database? <a href="str_crud_update.php">Click here</a></span>
      <br>

    </form>   
      <pre>
          <?php

          readRows();

          ?>         
      </pre>

  </div>

</div>



</body>
</html>