<?php

if (isset($_POST['submit'])) {
  $secret = "6LdjtdMhAAAAAM8FHbHXGcPehyTDcNpamZ6Y3sxB";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $data = file_get_contents($url);
  $row = json_decode($data, true);

  if ($row['success'] == "true") {
    echo "<script>alert('Wow you are not a robot 😲');</script>";
    header("Location:openacc.html");
  } else {
    echo "<script>alert('Oops you are a robot 😡');</script>";
    
  }
}


?>

