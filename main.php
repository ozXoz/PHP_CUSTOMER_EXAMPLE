<?php
require __DIR__. "/config.php";

$sql = "SELECT * FROM customer_info";
$result=$mysqli->query($sql);


?>



<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>



.center{

  margin: auto;
  width: 30%;
  padding: 20px;
  border: none;
  background-color: #00FFFF;
}

.topright{

  position: absolute;
  top: 2px;
  right: 4px;
  font-size: 18px
}




</style>

</head>
<body>

<h1 class="center">Welcome</h1>
<div class="topright">

<a href='search.php' class='btn btn-warning'>Search</a>


</form>

  </div>
<div class="topnav">
  <a class="active" href="main.php">Home</a>
  <a class="active2" href="add_customer.php">Add</a>
  <a class="active3" href="#home">About</a>
  

</div>



<table class="table table-dark" border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Customer Name</th>
          <th>Customer Last Name</th>
          <th>Customer Phone</th>
          <th>Customer Phone</th>
          <th>Add</th>
          <th>Edit</th>
          <th>Details</th>
          <th>Delete</th>
          

        
          </th>
        </tr>
      </thead>
      <tbody>
        <?php
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){

        
        echo "
        <tr>
        <td>".$row['id']."</td>
          <td>".$row["customer_fname"]."</td>
          <td>".$row['customer_lname']."</td>
          <td>".$row['customer_phone']."</td>
          <td>".$row['customer_email']."</td>
          <th><a href='add_customer.php ' class='btn btn-warning'>Add</a> </th>
          <td><a href='edit_customer.php?customerid=".$row['id']."' class='btn btn-primary'>Edit</a></td>
          <td><a href='details_customer.php?customerid=".$row['id']."' class='btn btn-success'>Details</a></td>
          <td><a href='delete_customer.php?customerid=".$row['id']."' class='btn btn-danger'>Delete</a></td>

          
        </tr>
        ";
    }
    }
        ?>
      </tbody>
    </Table>

</body>
</html> 