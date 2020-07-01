<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_30";
$ketnoi = mysqli_connect($severname,$username,$password,$dbname);
if (!$ketnoi){
    die("Connection failed : ".mysqli_connect_error());

}
// $nha = "CREATE DATABASE aptech_php_30";
// if(mysqli_query($ketnoi,$nha)) {
//     echo "Database createa successfully";
// } else {
//     echo "Error creating database : " .mysqli_error($ketnoi);
// }
$bang = "CREATE TABLE lop_hoc ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE
    )";
    if (mysqli_query($ketnoi,$bang)){
        echo "Table lop_hoc ceated successfully";

    } else {
        echo "Error creating table :" . mysqli_error($ketnoi);

    }
    mysqli_close($ketnoi);
?>

    
   
    
    
    
    