<?php
  $servername = "localhost";
  $username = "root";
  $password = "123";
  $dbname = "phpdb";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    echo "<h4>Database Connected</h4>";
  }
