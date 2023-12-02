<?php
include("connection.php");
$ref=$_POST["ref"];
$name=$_POST["name"];
$rname=$_POST["rname"];
$amount=$_POST["amount"];

$pin=$_POST["pin"];


$sql = "INSERT INTO ben3(ref,name,rname,amount,pin)VALUES('$ref','$name','$rname','$amount','$pin')";
$sql1="UPDATE images SET amount = amount-'$amount' WHERE name = '$name'";


if($conn->query($sql) === TRUE) {
    echo '<script>alert(" Amount transfered successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  if($conn->query($sql1) === TRUE) {
    echo '<script>alert(" Amount transfered successfully")</script>';
  } else {
    echo "<table>";
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
  $conn->close();
?>