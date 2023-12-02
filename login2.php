<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/connection.php";
    
    $sql = sprintf("SELECT * FROM signup
                    WHERE email = '%s'",
                   $conn->real_escape_string($_POST["email"]));
    
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location:netb.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
  div {
    background-color: white;
    width: 300px;
    border: 10px solid green;
    padding: 50px;
    margin: 20px;
  }
</style>
 

</head>
<body>
    
    <center><h1>Login</h1></center>
    
    <?php if ($is_invalid): ?>
        <center><em>Invalid login</em></center>
    <?php endif; ?>
    
    <form method="post">
        <center><div>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">

        

        
        <button class="btn btn-success">Log in</button>
    </div></center>
    </form>
    
</body>
</html>

