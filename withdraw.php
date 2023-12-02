<?php
include("connection.php");
$name=$_POST["name"];
$acc=$_POST["acc"];
$amount=$_POST["amount"];

$sql = "INSERT INTO t4(name,acc,amount)VALUES('$name','$acc','$amount')";
$sql1="UPDATE images SET amount = amount-'$amount' WHERE name = '$name'";

if($conn->query($sql) === TRUE) {
    echo '<script>alert(" Amount withdrawed successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if($conn->query($sql1) === TRUE) {
    echo '<script>alert(" Amount withdrawed successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
  $conn->close();
?>