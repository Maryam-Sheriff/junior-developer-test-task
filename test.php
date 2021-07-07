<?php

$conn = mysqli_connect('localhost','user','123456','scandiweb-app');
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}
$sql = "INSERT INTO product (SKU, Name, Price, type)
VALUES ('eg123', 'dgamr', '33.4','DVD')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

