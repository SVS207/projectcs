<?php include("connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
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
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 300px;
}

.title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
  color: #333;
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
  border-radius: 5px;
  outline: none;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-color: #007bff;
}

input[type="submit"] {
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

a {
  text-decoration: none;
  color: #007bff;
}

a:hover {
  text-decoration: underline;
}

.title a {
  font-size: 14px;
  color: #007bff;
  margin-left: 5px;
}


</style>
<body>
    <div class="container" >
    <div class="title">
            Admin Login
    </div>
    <form action="#" method="POST" autocomplete="off" >
    <div class="title"> <a href="adminregister.php"></a> </div>
   <label> Name </label><br><input type="text" placeholder="AdminID" name="admin" required><Br><br>
   <label> Password </label><br><input type="password" placeholder=" login password" name="pass" maxlength="6" required><br><br>
   <input type="submit" value="Log in" name="login" class="btn">

  </div>
    </div>
    
</form>
</body>
</html>
<?php 
if(isset( $_POST["login"]))
    {
   $name = $_POST['admin'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM  adminp WHERE name='$name' && password='$password' ";
   $data = mysqli_query(mysql: $con, query: $query); 
  $total= mysqli_num_rows(result: $data);
  
  if($total == 1)
  {
    header(header: 'location:main.php');

}
else{
    echo "Login Failed";
}
    }

 ?>