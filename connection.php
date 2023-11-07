<?php
$conn= new mysqli("localhost","root","","aug_proecomm");
if ($conn->connect_error){
    echo "sql connection failed";
    die;
}

?>