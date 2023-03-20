<?php

require __DIR__. "/config.php";


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
</head>
<body>

<h1>Search Button</h1>

<form method="POST" action="">
    <input type="text" name="search">
    <input type="submit" value="Submit">


</form>





<tbody>
        <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){

        
        echo "
        
        <p>".$row['id']. " " .$row['p_name'] . " ".$row['p_gb']." ".$row['p_colour']."</p> 
        ";
    }
    }
        ?>
      </tbody>


</body>
</html> 