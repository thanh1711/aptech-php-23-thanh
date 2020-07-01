<?php 
$servername = "localhost";
$usrename ="root";
$password = "";

$thanh =mysqli_connect($servername,$usrename,$password);

if(!$thanh){
    die("connect failed: " .mysqli_connect_eror());
    
}

$nha = "CREATE DATABASE aptech_php_30";
if(mysqli_query($thanh,$nha)) {
    echo "Database createa successfully";
} else {
    echo "Error creating database : " .mysqli_error($thanh);
}
mysqli_close($thanh);
?>