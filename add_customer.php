<?php

$result="";
require __DIR__. "/config.php";
    $f_name=$l_name=$phone=$email="";
    $msg="";
    $msg_2="";
    $is_valid=true;

    if($_SERVER['REQUEST_METHOD']== "POST"){
        $f_name=$_POST['firstname'] ?? '';
        //$f_name=mysqli_escape_string($mysqli, $f_name);
        //die($f_name);
        $l_name=$_POST['lastname'] ?? '';
        $phone=$_POST['phone'] ?? '';
        $email= $_POST['email'] ?? '';
        if(empty($f_name)){
            $msg="please enter valid information";
            $is_valid=false;
        }
        if(empty($l_name)){
            $msg_2="please last name enter";
            $is_valid=false;
        }
        if($is_valid==true){
            $sql ="INSERT INTO customer_info (customer_fname,customer_lname,customer_phone,customer_email) VALUES ('$f_name','$l_name','$phone','$email')";
            $result = $mysqli->query($sql);
            header("Location: main.php");
        }
           
    }


  

   




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
<div>
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname"> <?php echo $msg?>
</div>
<br>
<div>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname"><?php echo $msg_2?>
</div>
<br>
<div>
    <label for="phone">Phone</label>
    <input type="text" name="phone">
</div>
<br>
<div>
    <label for="firstname">Email</label>
    <input type="email" name="email">
</div>
<br>
<div>
    <button type="submit" class="btn">Submit</button>
</div>
</div>
</form>
</body>
</html> 