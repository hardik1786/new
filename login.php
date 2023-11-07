<?php

session_start();
$_SESSION['login_status']=false;
$uname=$_POST['uname'];
$upass=$_POST['pass'];
$umail=$_POST['umail'];

$conn= new mysqli("localhost","root","","aug_proecomm");
$sqli_obj=mysqli_query($conn,"select * from user where username='$uname' and usermail='$umail' and password='$upass'");
$no_of_rows=mysqli_num_rows($sqli_obj);
$row=mysqli_fetch_assoc($sqli_obj);

if($no_of_rows>0){
    $_SESSION['login_status']=true;
    $_SESSION['usertype']=$row['usertype'];
    $_SESSION['userid']=$row['userid'];
    $_SESSION['username']=$row['username'];
    echo "Login Succcesfully";
    if ($row['usertype']=='vendor'){
        header("location:../vendor/home.php");
    }
    else if($row['usertype']=='customer'){
        header("location:../client/home.php");
    }
}
else{
    echo "Login Failed";
    echo mysqli_error($conn);
}



?>