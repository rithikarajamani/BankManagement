<?php
include("connection.php");
$name=$_POST["name"];
$cus=$_POST["cus"];
$acc=$_POST["acc"];
$amount=$_POST["amount"];

$sql = "INSERT INTO t3(name,cus,acc,amount)VALUES('$name','$cus','$acc','$amount')";
$sql1="UPDATE images SET amount = amount+'$amount' WHERE name = '$name'";


if($conn->query($sql) === TRUE) {
    echo '<script>alert(" Amount deposited successfully")</script>';
    
  } else {
    echo "<table>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if($conn->query($sql1) === TRUE) {
    echo '<script>alert(" Amount deposited successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
  $conn->close();
?>