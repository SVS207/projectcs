<?php include("connection.php"); 
$id = $_GET['email'];

$query = "SELECT * FROM user where  email = '$id'";
mysqli_query(mysql: $con, query:$query);
$data = mysqli_query(mysql: $con,query: $query);
$result = mysqli_fetch_assoc(result: $data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>
    
</head>
<style>
    body {
        background-color:  #E1EBEE;
        padding: 0 10px;
    }
  
     /* Container for the form */
     .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        /* Title Styling */
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Form layout */
        .form {
            display: flex;
            flex-direction: column;
        }

        /* Input fields styling */
        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, 
        input[type="email"]:focus, 
        input[type="password"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Label styling */
        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        /* Button styling */
        .btn {
            background-color:  #007bff;
            color: white; /* White text */
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Responsive layout for smaller screens */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }
        }

</style>

<body>

    <div class="container">
    
    <div class="title">
            Update Details
    </div>
   <form action="#" method="POST">
        <div class="form" >
            <abel>Username</abel>  <input type="text" value="<?php echo $result['username']?>"  placeholder="Username" spellcheck="true" maxlength="20"
                    name="user" required><br><br>
                     <label>Email ID</label>  <input type="email" value="<?php echo $result['email']?>"placeholder="@gmail.com" spellcheck="true" maxlength="30"
                    name="id" required><br><br>
                    <label>Password</label>  <input type="password" value="<?php echo $result['password']?>" placeholder="password" maxlength="6" name="pass"required><br><br>
                 <label>Confirm Password</label> <input type="password" value="<?php echo $result['confirmpassword']?>" placeholder="password" maxlength="6"
                    name="Cpass"required ><br><br><br>
                   
           <input type='submit' value="Update" class='btn' name='Update' onclick="message()"> 
       
        </div>
      
</form>
    </div>
    
</body>
</html>
<?php
    if($_POST['Update'])
    {
   $username  = $_POST['user'];
   $email      = $_POST['id'];
   $password   = $_POST['pass'];
   $confirmassword  = $_POST['Cpass'];
 $query="UPDATE user SET username='$username',email='$email',password='$password',confirmpassword='$confirmpassword' WHERE email='$id'";
 $data= mysqli_query($con,$query);
if($data)
{
    echo"<script>alert('Record updated')</script>";
    ?>
    <meta http-equiv="refresh"content="0; url=http://localhost:3000/display.php">
<?php
}
else{
        echo "Failed";
 }
    }
   
    
?>