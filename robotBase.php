<?php

$servername = "localhost";
$username = "root";

try{
  $conn = new PDO("mysql:host=$servername;dbname=robotBase", $username);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->beginTransaction();
  
  if (isset($_POST['Stop'])){ 
  $stop = $_POST['Stop'];
   $conn->exec("INSERT INTO directions (RLFBS)
  VALUES ('$stop')");

  $conn->commit();
  echo "New record Stop created successfully";
  } elseif (isset($_POST['Left'])){ 
  $Left = $_POST['Left'];
   $conn->exec("INSERT INTO directions (RLFBS)
  VALUES ('$Left')");

  $conn->commit();
  echo "New record Left created successfully";
  }elseif (isset($_POST['Right'])){ 
  $Right = $_POST['Right'];
   $conn->exec("INSERT INTO directions (RLFBS)
  VALUES ('$Right')");

  $conn->commit();
  echo "New record Right created successfully";
  }elseif (isset($_POST['Forward'])){ 
  $Forward = $_POST['Forward'];
   $conn->exec("INSERT INTO directions (RLFBS)
  VALUES ('$Forward')");

  $conn->commit();
  echo "New record Forward created successfully";
  }elseif (isset($_POST['Backward'])){ 
  $Backward = $_POST['Backward'];
   $conn->exec("INSERT INTO directions (RLFBS)
  VALUES ('$Backward')");

  $conn->commit();
  echo "New record Backward created successfully";
  }
  
  } catch(PDOException $e) {

  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;


?>