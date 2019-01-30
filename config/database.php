<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=camagru", "root", "123456");
    $conn->setAttribute(PDO::ERRMODE_EXCEPTION);
  }

  catch(PDOException $error) {
    echo 'Connection Failed: ' . $error->getMessage();
  }

?>