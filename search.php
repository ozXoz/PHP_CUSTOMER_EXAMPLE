<?php

require __DIR__. "/config.php";
$result="";

if(isset($_POST['search'])){

    $search_db=$_POST['search'];
    $sql ="SELECT * FROM customer_info WHERE customer_fname LIKE '%$search_db%' OR customer_lname LIKE '%$search_db%' OR customer_phone LIKE '%$search_db%' OR customer_email LIKE '%$search_db%'";
    $result=$mysqli->query($sql);
    
    }



?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<style>

body {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/41294/hero.jpg) no-repeat center center fixed; 
  background-size: cover;
}


  .search_display{

    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    padding: 2px 5px;
  }
  



    
</style>
</head>
<body>

<h1>Search Button</h1>

<div class="search">
<form method="POST" action="">
    <input type="text" name="search">
    <input type="submit" value="Submit">
</div>

</form>




<tbody>
    <div class="search_display">
        <?php
    
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){

        
        echo "
        
        <p>".$row['id']. " " .$row['customer_fname'] . " ".$row['customer_lname']." ".$row['customer_phone']. " ". $row['customer_email']."</p> 
        ";
    }
    }
        ?>
      </tbody>
      </div>

</body>
</html> 