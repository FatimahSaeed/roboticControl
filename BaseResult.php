<?php

$servername = "localhost";
$username = "root";


try{
  $conn = new PDO("mysql:host=$servername;dbname=robotbase", $username);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->beginTransaction();
 
  //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	
$val=$conn->prepare("SELECT RLFBS FROM `directions` ORDER BY id DESC LIMIT 1");		
$val->execute();	
$r=$val->fetchAll();

foreach($r as $m) {
echo "LAST ENTERY VALUE: ".$m['RLFBS'];
}
} catch(PDOException $e) {

  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;


?>