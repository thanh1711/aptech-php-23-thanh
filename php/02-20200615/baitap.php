<!DOCTYPE html>
<html>
<head>
<style> 
th,td{
    border: 1px solid black;
}
</style>
    
</head>
<body>
    


<?php 
$products =[
[
"Redme Note 10",
18900000,
"Bac Ninh, Viet Nam"
],
[
"Nokia lumia",
20000000,
"Made in Viet Nam"]


];


 ?>
 <table>
 <thead>
 <tr>
     <td>Tên</td>
     <td>Giá</td>
     <td>NơiSX</td>
 </tr>
 
 </thead>
 <tbody>
 <?php 
 for($i=0 ; $i<count($products); $i++){?>
 <tr>
 <?php for($n=0; $n<count($products[$i]); $n++){?>
 <td><?php echo $products[$i][$n];?></td>
 
 <?php }?>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </body>
</html>