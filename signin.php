<?php
include("connection.php");
$Name=$_POST["Name"];
$Password=$_POST["Password"];
$sql="INSERT INTO t2(Name,Password)VALUES('$Name','$Password')";

if($conn->query($sql) === TRUE){
    header("location:http://localhost/bms/final.html");
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
// try{}
// if (empty($_POST["Name"])) {
//     die("Name is required");
// }



// if (strlen($_POST["Password"]) < 8) {
//     die("Password must be at least 8 characters");
// }

// if ( ! preg_match("/[a-z]/i", $_POST["Password"])) {
//     die("Password must contain at least one letter");
// }

// if ( ! preg_match("/[0-9]/", $_POST["Password"])) {
//     die("Password must contain at least one number");
// }





// $mysqli = require __DIR__ . "/connection.php";

// $sql = "INSERT INTO t2 (name, Password)
//         VALUES (?,  ?)";
        
// $stmt = $mysqli->stmt_init();

// if ( ! $stmt->prepare($sql)) {
//     die("SQL error: " . $mysqli->error);
// }

// $stmt->bind_param("sss",
//                   $_POST["Name"],
//                   $_POST["Password"]);
                 
                  
// try{
//     $stmt->execute();
//     header("Location: openacc.html");
//     exit;
// }
// catch(Exception $e){
//     // echo "Error Message by Shri : " .$e->getMessage();
//     echo '<span>("id already taken")</span>';
   
// }

 ?>
