<?php
include("connection.php");
$name=$_POST["name"];
$acc=$_POST["acc"];
$rname=$_POST["rname"];
$racc=$_POST["racc"];

$amount=$_POST["amount"];

$sql = "INSERT INTO t5(name,acc,rname,racc,amount)VALUES('$name','$acc','$rname','$racc','$amount')";
$sql1="UPDATE images SET amount = amount+'$amount' WHERE name = '$name'";


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