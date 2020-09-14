<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
}

$sql = "
    DELETE
    FROM pagamenti
    WHERE status LIKE 'rejected'
    AND pagante_id = 6 ";

$result = $conn->query($sql);

if ($result) {
  echo $result . " row/s successfully deleted";
}
  else {
    echo "deleting error";
  }

  $conn->close();
?>
