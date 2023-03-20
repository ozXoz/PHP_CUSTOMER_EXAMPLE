<?php

use SebastianBergmann\CodeCoverage\Report\Xml\Unit;



   if($_SERVER['REQUEST_METHOD']==="POST"){

    require __DIR__. "/config.php";

    $sql= sprintf("SELECT * FROM register WHERE regi_email='%s'", $mysqli->real_escape_string($_POST["email"]));
    $result=$mysqli->query($sql);
    $user=$result->fetch_assoc();
    /// Check password and username // 
    if($user){
        if(password_verify($_POST['password'], $user["password_hash"])){
            header("Location: main.php");
        }else{
            die("Invalid username or password");
        }
    }


   }


 
    


   






?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<style>



@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&subset=greek-ext');

body{
	background-image: url("https://images.pexels.com/photos/891252/pexels-photo-891252.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
	
}

.center{

    margin: auto;
  width: 20%;
  padding:100px;
  padding-bottom: 250px;
 
 
  
 
}

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

input[type=email] {
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

div.center {
  text-align: center;
  font-size: 40;
  font-family:Georgia, 'Times New Roman', Times, serif;
  width: 300px;
  padding:300px;
  margin: auto;
  color: black;

}


</style>
</head>
<body>
    <div class="center">
    <form method="POST" action="">


<div>
    <label for="Email">Email</label><br>
    <input type="email" name="email">
</div>
<br>
<div>
    <label for="password">Password</label><br>
    <input type="password" name="password">
</div>
<br>

<div>
    <button type="submit" name="submit" class="btn">Login</button>
</div>

</div>
</form>
</body>
</html> 