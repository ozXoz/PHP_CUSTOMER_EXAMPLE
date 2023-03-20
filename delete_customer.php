<?php
require __DIR__. "/config.php";
// Customer id comes from main page which is button
if(isset($_GET['customerid'])){
    $id=$_GET['customerid'];
    $sql="DELETE FROM customer_info WHERE id='$id'";
    $result=$mysqli->query($sql);
    header("location:main.php");
}


?>