<?php
include 'sys_config.php';

//CRUD
//1. CREATE
function createData(){
  global $con;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = strip_tags($username);
  $username = str_replace(" ", "", $username);
  $query = mysqli_query($con, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
  if(!$query){
    die('query failed' . mysqli_error($con));
  } else {
    echo "Record created";
  }
}

//2. READ
function readRows(){
  global $con;
  $query = mysqli_query($con, "SELECT * FROM users");
  if(!$query){
    die("query failed" . mysqli_error($con));
  }
  while($row = mysqli_fetch_assoc($query)){
    print_r($row);
  }
}

//3. UPDATE
function updateData(){
  global $con; //put global keyword
  $username = $_POST['username'];
  $password = $_POST['password'];
  //$username = mysqli_real_escape_string($con, $username);
  $username = strip_tags($username);
  $username = str_replace(" ", "", $username);
  $id = $_POST['id'];

    $query = mysqli_query($con, "UPDATE users SET username = '$username', password = '$password' WHERE id = $id");
    if(!$query){
      die("query failed " . mysqli_error($con));
    } else {
      echo "Record updated";
    }
}

function showAllData(){
	global $con; //put global since function is local
	$query = mysqli_query($con, "SELECT * FROM users");
	if(!$query){
	  die("query failed" . mysqli_error($con));
	}

	while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $username = $row['username'];

        echo "<table>$id . $username</table>";        
        echo "<option value='$id'>$id</option><br>";


  }
}


//4. DELETE
function deleteRows(){
  global $con; //put global keyword
    $id = $_POST['id'];

    $query = mysqli_query($con, "DELETE FROM users WHERE id = $id");
    if(!$query){
      die("query failed " . mysqli_error($con));
    } else {
      echo "Record deleted";
    }
}

?>

