<?php
    $msg="";
    if (isset($_POST['upload'])){
        // $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","bms");
        // $nameuser =$_POST['nameuser'];
        $id1=$_POST["id1"];
        $bid=$_POST["bid"];
        $name=$_POST["name"];
$type=$_POST["type"];
$mobile=$_POST["mobile"];
$code=$_POST["code"];


        // $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO ben (id1,bid,name,type,mobile,code)VALUES('$id1','$bid','$name','$type','$mobile','$code')";
        mysqli_query($db,$sql);
        header("Location:ben3.php");
        // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        //     $msg="Image uploaded";
        //     header("Location: ");
        // }
        // else{
        //     $msg="there is problem";
        // }
    }
    
?>