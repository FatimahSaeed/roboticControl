<?php
$servername = "localhost";
$username = "root";
$motor1 = $_POST['m1'];
$motor2 = $_POST['m2'];
$motor3 = $_POST['m3'];
$motor4 = $_POST['m4'];
$motor5 = $_POST['m5'];
$motor6 = $_POST['m6'];

try{
  $conn = new PDO("mysql:host=$servername;dbname=roboticarm", $username);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $conn->beginTransaction();
  
  $conn->exec("INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
  VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')");

  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {

  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>

