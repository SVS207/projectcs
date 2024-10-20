<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New registration</title>
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
    max-width: 500px;
    background-color: #AFDBF5;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.title h2 {
    margin-bottom: 20px;
    color: #333;
}
form {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.form {
    width: 100%;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    text-align: left;
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
    margin-bottom: 10px;
    transition: background-color 0.3s ease;
}
input[type="submit"]:hover {
    background-color: #1da1f2;
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
/* Mobile responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    .form label {
        font-size: 14px;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        font-size: 12px;
    }
}
</style>
<body>
    <div class="container">
    <div class="title">
        <h2>Register</h2>
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Password</label>  <input type="password" placeholder="password" maxlength="8" name="pass"required><br><br>
                 <label>Confirm Password</label> <input type="password" placeholder="password" maxlength="8"
                    name="Cpass"required ><br><br><br>    
           <input type='submit' value="Register" class='btn' name='Register'> 
        <div class="login">
            If you have already an account <a href="login.php">Login</a>
          </div>
        </div>
        <script src="src.js"></script>
</form>
</div> 
</body>
</html>
<?php
    if($_POST['Register'])
    {
   $username     = $_POST['user'];
   $email      = $_POST['id'];
   $password   = $_POST['pass'];
   $confirmpassword  = $_POST['Cpass'];
 $query = "INSERT INTO user VALUES('$username','$email','$password','$confirmpassword')";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"Data inserted succesfully";
}
else{
        echo "Failed";
 }
    }
     if($data){ 
    header( header: "location:login.php");} 
?>