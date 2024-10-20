<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #E1EBEE;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    width: 100%;
    max-width: 400px;
    background-color: #AFDBF5;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}
label {
    font-size: 16px;
    font-weight: bold;
    text-align: left;
    display: block;
    margin-bottom: 8px;
}
input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}
input[type="submit"] {
    padding: 10px 20px;
    background-color: #0093AF;
    color: black;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
input[type="submit"]:hover {
    background-color:#1da1f2;
}
.login {
    margin-top: 15px;
    font-size: 18px;
}
.login a {
    color: #0093AF;
    text-decoration: none;
    font-weight: bold;
}
.login a:hover {
    text-decoration: underline;
}
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    .title {
        font-size: 20px;
    } 
    label {
        font-size: 14px;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        font-size: 12px;
    }
}
</style>
<body>
    <div class="container" >
    <form action="#" method="POST">
    <div class="title">Login</div>
   <label> Name </label><br><input type="text" placeholder="Username" name="user" required><Br><br>
   <label> E-mail ID </label><br><input type="email" placeholder="Email" name="id" required><Br><br>
   <label> Password </label><br><input type="password" placeholder="password" name="pass" maxlength="8" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">
   <br><br>
   <div class="login">
            For Admin Page <a href="adminlogin.php"> Admin Login</a>
          </div>
  </div>
</div>
</form>
</body>
</html>
<?php
if(isset( $_POST["login"]))
    {
   $username = $_POST['user'];
   $email = $_POST['id'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  user WHERE email ='$email' && password='$password' ";
   $data = mysqli_query($con, $query); 
  $total= mysqli_num_rows($data);
  if($total == 1)
  {
    //header('location:E-book2.php');
    ?>
   <meta http-equiv = "refresh" content="0; url =http://localhost:3000/main.php"/>
<?php 
}
else{
    echo "Login Failed";
}
    }
 ?>
 