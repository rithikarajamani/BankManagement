<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/connection.php";
    
    $sql = "SELECT * FROM signup
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: white;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:#a1de07;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #a1de07;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#mar{
  background-color: #3cbe47;
}
h6{
  text-align: right;
}

</style>
<body>
  
<div class="container mt-3">
  <table class="table table-borderless">
    <tr>
      <td><img src="smart.png" width="20%" height="20%" > </td>
      <td><h6>Help | Change Password | Session Summary | Sitemap | Print this page | Logout  | Quick Links >></h6></td>
      
    </tr>
  </table>
</div>

    </style>
</head>
<body>
<div class="container mt-3">
  <table class="table table-borderless">
    <tr>
      <td><img src="smart.png" width="20%" height="20%" > </td>
      <td><h6>Help | Change Password | Session Summary | Sitemap | Print this page | Logout  | Quick Links >></h6></td>
      
    </tr>
  </table>
</div>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout2.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login2.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    <div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Accounts
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="accountdetails.php">Account Details</a>
      <a href="cheque.html">Cheque Book Request</a>
      
    </div>
  </div> 
  <a href="deposit.html">Deposit</a>
  <a href="displayprofile.php">Profile</a>
</div>

<marquee width="100%" direction="left" height="40px" id="mar" >
  Dear Customer, Welcome to the New enhanced version of Internet Banking.
  </marquee>

    
</body>
</html>
    
    
    
    
    
    
    
