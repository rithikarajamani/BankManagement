<?php
    $msg="";
    if (isset($_POST['upload'])){
        // $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","bms");
        // $nameuser =$_POST['nameuser'];
        $ref=$_POST["ref"];
        $pin=$_POST["pin"];
        


        // $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO ben2 (ref,pin)VALUES('$ref','$pin')";
        mysqli_query($db,$sql);
        header("Location:ben5.php");
        // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        //     $msg="Image uploaded";
        //     header("Location: ");
        // }
        // else{
        //     $msg="there is problem";
        // }
    }
    
?>