<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname="aptech_php_31";
$hung = mysqli_connect($severname,$username,$password,$dbname);
if (!$hung){
    die("Connection failed : ".mysqli_connect_error());

}
$bang = "CREATE TABLE class ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    lop VARCHAR(30) NOT NULL,
    ten VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE
    )";
    if (mysqli_query($hung,$bang)){
        echo "Table lop_hoc ceated successfully";

    } else {
        echo "Error creating table :" . mysqli_error($hung);

    }
    mysqli_close($hung);
?>