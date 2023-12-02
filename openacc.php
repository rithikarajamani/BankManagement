<?php
    $msg="";
    if (isset($_POST['upload'])){
        $target="images/".basename($_FILES['image']['name']);
        $db=mysqli_connect("localhost","root","","bms");
        // $nameuser =$_POST['nameuser'];
        $id1=$_POST["id1"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
$dob=$_POST["dob"];
$radio=$_POST["radio"];
$mobile=$_POST["mobile"];
$date=$_POST["date"];
$address=$_POST["address"];
$occupation=$_POST["occupation"];
$income=$_POST["income"];
$aadhar=$_POST["aadhar"];
$branch=$_POST["branch"];
$account=$_POST["account"];
$pan=$_POST["pan"];
$amount=$_POST["amount"];

        $image= $_FILES['image']['name'];
        
        $sql="INSERT INTO images (id1,name,email,password,dob,radio,mobile,date,address,occupation,income,aadhar,branch,account,pan,amount,image)VALUES('$id1','$name','$email','$password','$dob','$radio','$mobile','$date','$address','$occupation','$income','$aadhar','$branch','$account','$pan','$amount','$image')";
        mysqli_query($db,$sql);
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg="Image uploaded";
            header("Location: acc.php");
        }
        else{
            $msg="there is problem";
        }
    }
    
?>