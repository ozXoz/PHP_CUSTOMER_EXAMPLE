<?php




require __DIR__. "/config.php";
// id comes from main page button.


$data = array(
    "id"=> "",
     "customer_fname"=>"",
     "customer_lname"=>"",
     "customer_phone"=>"",
     "customer_email"=>""
    );

 $id=$_GET['customerid'];
 $f_name=$_POST['firstname'] ?? '';
 $l_name=$_POST['lastname'] ?? '';
 $phone=$_POST['phone'] ?? '';
 $email= $_POST['email'] ?? '';
 $sql="SELECT * FROM customer_info WHERE id='$id' ";
 // prepare query //
 $result=$mysqli->query($sql);
 $data=$result->fetch_array(); 

 if($result->num_rows !=1){
    die("something is wrong");

 }
 if(isset($_POST['customerid'])){
    $sql="UPDATE customer_info SET customer_fname='$f_name',customer_lname='$l_name',customer_phone='$phone',customer_email='$email' WHERE id='$id'";
    $result=$mysqli->query($sql);
    header("Location: main.php");
    //die($sql);
    

    
}


// display information //
 


 




?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>



.btn{

border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  background-color: red;

}

input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    padding: 2px 5px;
}

input[type=email] {
    background: transparent;
    border: none;
    border-bottom: 1px solid #000000;
    padding: 2px 5px;
}

div.center {
  text-align: center;
  font-size: 40;
  font-family:Georgia, 'Times New Roman', Times, serif;
  width: 300px;
  padding:30px;
  border: 3px;
  margin: auto;
  color: black;

}

body{

background-image: url("https://images.pexels.com/photos/891252/pexels-photo-891252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
}
</style>
</head>
<body>
<div class="center">
    <form method="POST" action="">
        <input type="hidden" name="customerid" value="<?php echo $data['id']?>">
<div>
    <label for="firstname">Firstname</label>
    <!--  $data['customer_fname' comes database rows. -->
    <input type="text" name="firstname" value="<?php   echo $data['customer_fname']?>">
</div>

<div>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="<?php   echo $data['customer_lname']?>">
</div>

<div>
    <label for="phone">Phone</label>
    <input type="text" name="phone" value="<?php   echo $data['customer_phone']?>">
</div>

<div>
    <label for="firstname">Email</label>
    <input type="email" name="email" value="<?php   echo $data['customer_email']?>">
</div>
<br>
<div>
    <button type="submit" class="btn">Edit</button>
</div>

</div>
</form>
</body>
</html> 
