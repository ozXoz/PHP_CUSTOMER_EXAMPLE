<?php



require __DIR__. "/config.php";
 $id=$_GET['customerid'];
 $sql="SELECT * FROM customer_info WHERE id='$id' ";
 $result=$mysqli->query($sql);
 if($result->num_rows !=1){
    die("something is wrong");

 }

 $data=$result->fetch_assoc();  
?>

<!DOCTYPE html>
<html>
<head>
<title>Details</title>
<style>


.details{

   margin: auto;
  width: 36%;
  padding: 20px;
  border: 3px solid green;
  background-color: #00FFFF;
}




.center {
  margin: auto;
  width: 30%;
  padding: 99px;
  padding-left: 30px;
  font-style: oblique;
  font-size: 40px;
  border: none;
  background-color: black;
  color: white;
  
}


body{

background-image: url("https://images.pexels.com/photos/891252/pexels-photo-891252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
}
</style>
</head>
<body>
    <h1 class="details">Customer Details Information</h1>
    <div class="center">
    <form method="POST" action="">
<div>
<label for="firtname">Firstname:</label>
     <?php echo $data['customer_fname']?>

</div>
<br>
<div>
    <label for="lastname">Lastname:</label>
    <?php   echo $data['customer_lname']?>
</div>
<br>
<div>
    <label for="phone">Phone:</label>
    <?php   echo $data['customer_phone']?>
</div>
<br>
<div>
    <label for="email">Email:</label>
    <?php   echo $data['customer_email']?>
</div>
</div>

</form>
</body>
</html> 