<?php
$uname=$_POST['uname'];
$upass=$_POST['pass1'];
$utype=$_POST['usertype'];
$umail=$_POST['umail'];

$conn= new mysqli("localhost","root","","aug_proecomm");
$status=mysqli_query($conn,"insert into user(username,usermail,usertype,password) values('$uname','$umail','$utype','$upass')");
if($status){
    echo "User Registered Succcesfully";
}
else{
    echo "Login Failed";
    echo mysqli_error($conn);
}



?>
