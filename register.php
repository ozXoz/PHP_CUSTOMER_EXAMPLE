<?php

$regi_fname=$regi_lname=$regi_email= $regi_password="";
$result="";


require __DIR__. "/config.php";

    if($_SERVER['REQUEST_METHOD']== "POST"){
     
   
    $regi_fname=$_POST['firstname'] ?? '';
    $regi_lname=$_POST['lastname'] ?? '';
    $regi_email= $_POST['email'] ?? '';
    $regi_password = password_hash($_POST['password'],PASSWORD_DEFAULT) ?? '';
    $sql ="INSERT INTO register (regi_fname,regi_lname,regi_email,password_hash) VALUES ('$regi_fname','$regi_lname','$regi_email','$regi_password' )";
    $result = $mysqli->query($sql);
}

   

if($result){
    header("Location: sign_success.php");
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

input[type=password] {
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
  font-size: 30;
  font-family:Georgia, 'Times New Roman', Times, serif;
  width: 300px;
  padding:100px;
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
    <input type="text" name="firstname">
</div>

<div>
    <label for="lastname">Lastname</label>
    <input type="text" name="lastname">
</div>

<div>
    <label for="Email">Email</label><br>
    <input type="email" name="email"><br>
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password">
</div>

<div>
    <label for="confi_password">Re-password</label>
    <input type="password" name="confi_password">
</div>
<br>

<div>
    <button type="submit" class="btn">Submit</button>
</div>

</div>
</form>
</body>
</html> 