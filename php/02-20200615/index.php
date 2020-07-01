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
$tensp =["banh","kem","cafe"];
$giasp =["1000","2000","8000"];
$noisx =["hanoi","danang","nhalam"];
?>
<table>
    <thead>
    <tr>
    <td>STT</td>
    <td>Ten</td>
    <td>Giá</td>
    <td>NSX</td>
    </tr>
    
    </thead>
    <tbody>
    <?php for ($i=0 ;$i < count($tensp);$i++){ ?>
    <tr>
    <td><?php echo ($i + 1); ?></td>
    <td><?php echo $tensp[$i]; ?></td>
    <td><?php echo $giasp[$i]; ?></td>
    <td><?php echo $noisx[$i]; ?></td>
    <tr>
    <?php }?>
    </tbody>
</table>




</body>
</html>