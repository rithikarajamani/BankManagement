<?php
    $msg="";
    if (isset($_POST['upload'])){
        // $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","bms");
        // $nameuser =$_POST['nameuser'];
        $type=$_POST["type"];
        $countryCode=$_POST["countryCode"];
        $mobile=$_POST["mobile"];
$card=$_POST["card"];
$pin=$_POST["pin"];


        // $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO newuser (type,countryCode,mobile,card,pin)VALUES('$type','$countryCode','$mobile','$card','$pin')";
        mysqli_query($db,$sql);
        // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        //     $msg="Image uploaded";
        //     header("Location: cusid.php");
        // }
        // else{
        //     $msg="there is problem";
        // }
        header("Location: newuser2.html");
exit();
    }
    
?>