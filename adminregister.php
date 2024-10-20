<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New registertion</title>
    
</head>
<style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
    background-color: #E1EBEE;
}

.container {
  background-color:  #AFDBF5;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  width: 350px;
}

.title {
  font-size: 26px;
  text-align: center;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-color: #007bff;
}

input[type="submit"] {
  padding: 12px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

.login {
  text-align: center;
  margin-top: 10px;
}

.login a {
  text-decoration: none;
  color: #007bff;
}

.login a:hover {
  text-decoration: underline;
}

</style>

<body>

    <div class="container">
    
    <div class="title">
            Admin Register
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <label>Name</label>  <input type="text" placeholder="adminID" spellcheck="true" maxlength="20"
                    name="admin" required><br><br>
                    <label>Password</label>  <input type="password" placeholder="password" maxlength="6" name="pass"required><br><br>
           <input type='submit' value="Register" class='btn' name='Register' onclick="message()"> 
        <div class="login">
            If  you have alredy an account <a href="adminlogin.php">Login</a>
          </div>
        </div>
        
</form>
    </div> 
</body>
</html>
<?php
    if($_POST['Register'])
    {
   $Name      = $_POST['admin'];
 
   $password   = $_POST['pass'];
  
 $query = "INSERT INTO adminp VALUES('$Name','$password')";
 $data= mysqli_query(mysql: $con,query: $query);
if($data)
{
    echo"Data inserted  into database";
}
else{
        echo "Failed";
 }
    }
    if($data){ 
   header(header: "location:adminlogin.php");}
    
?>