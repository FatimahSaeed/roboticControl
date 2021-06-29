<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$run = $_POST['run'];

try{
  $conn = new PDO("mysql:host=$servername;dbname=roboticarm", $username);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->beginTransaction();

if (isset($run)){ 

$stmt = $conn->prepare("SELECT `On` FROM `run` WHERE 1");
  $stmt->execute();
 
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->fetchAll();
  
echo $result;} else {
	
	
$val=$conn->prepare("SELECT motor1, motor2, motor3, motor4, motor5, motor6 
FROM `motors` ORDER BY `id` DESC LIMIT 1");		
$val->execute();	
$r=$val->fetchAll();

foreach($r as $m) {
	
echo "MOTOR1: ".$m['motor1'];
echo "<br>MOTOR2: ".$m['motor2'];
echo "<br>MOTOR3: ".$m['motor3'];
echo "<br>MOTOR4: ".$m['motor4'];
echo "<br>MOTOR5: ".$m['motor5'];
echo "<br>MOTOR6: ".$m['motor6'];
	
}

}				

} catch(PDOException $e) {

  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;


?>