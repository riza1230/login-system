<?php  

if(isset($_POST['text'])){
  $name = $_POST['text'];
  $sql = "INSERT INTO attendance (name) VALUES ('$name')";

  if ($conn->query($sql) === TRUE) {
    echo '<h5 class="success">Attendance Created</h5>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}