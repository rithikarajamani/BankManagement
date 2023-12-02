<?php
include("connection.php");
$Userid=$_POST["Userid"];
$Password=$_POST["Password"];
$sql="INSERT INTO netb(Userid,Password)VALUES('$Userid','$Password')";

if($conn->query($sql) === TRUE){
    header("Location: captcha.html");
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
?>