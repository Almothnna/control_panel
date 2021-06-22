<?php 


$dbhost = 'localhost';
$dbname = 'robot_map';
$dbusername = 'root';
$dbpass = '';


$conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="cssphp.css">

  <meta charset="utf-8">
  <title>
    
  </title>
</head>
<style>
input:hover a{
  background-color: black;
}
</style>
<div class="bod">

 <?php
 
if (isset( $_POST['forward'])) {
    $F= $_POST['forward']; 
    $query=  "INSERT INTO robot_map (direction) VALUES ('$F')";
    $conn->query($query);
    echo $F;
}
else if (isset( $_POST['left'])) {
    $L= $_POST['left']; 
$query=  "INSERT INTO robot_map (direction) VALUES ('$L')";
 $conn->query($query);
echo $L;
}
else if (isset( $_POST['stop'])) {
    $S= $_POST['stop']; 
$query=  "INSERT INTO robot_map (direction) VALUES ('$S')";
 $conn->query($query);
echo $S;
}
else if (isset( $_POST['right'])) {
    $R= $_POST['right']; 
$query=  "INSERT INTO robot_map (direction) VALUES ('$R')";
 $conn->query($query);
echo $R;
}
else if (isset( $_POST['backward'])) {
    $B= $_POST['backward']; 
$query=  "INSERT INTO robot_map (direction) VALUES ('$B')";
 $conn->query($query);
echo $B;
}


else{ 
	echo "there is issue";
}
$url = "index.html";
header("refresh: 5 ; $url ");

?>

</div>
  </html>