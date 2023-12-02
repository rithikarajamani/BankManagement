<?php
    $msg="";
    if (isset($_POST['upload'])){
        // $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","bms");
        // $nameuser =$_POST['nameuser'];
        
        $pass1=$_POST["pass1"];
        $pass2=$_POST["pass2"];
$trans1=$_POST["trans1"];
$trans2=$_POST["trans2"];
$ques1=$_POST["ques1"];
$ques2=$_POST["ques2"];
$ques3=$_POST["ques3"];


        // $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO newuser2(pass1,pass2,trans1,trans2,ques1,ques2,ques3)VALUES('$pass1','$pass2','$trans1','$trans2','$ques1','$ques2','$ques3')";
        mysqli_query($db,$sql);
        // if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        //     $msg="Image uploaded";
        //     header("Location: cusid.php");
        // }
        // else{
        //     $msg="there is problem";
        // }
        header("Location: cusid.php ");
exit();
    }
    
?>