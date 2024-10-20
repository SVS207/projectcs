<?php include("connection.php"); ?>

<html>
  <head>
    <title> Display</title>
    </head>
  <style>
    body{
      background-color: whitesmoke;
      color: brown;
    }
    h2 {
            text-align: center;
            color:  #007bff;
            font-size: 24px;
            font-weight: bold;
            color:#007bff;
        }
        .btn{
          background-color: #0071c5;
          color:black;
          border: #0071c5;
          font-size: 20px;
        }
        /* Logout button styling */
        .btn:hover {
            background-color: #0071c5; 
            color: white; /* White text */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: blue; 
        }

        /* Table styling */
        table {
            width: 100%;
            max-width: 1000px; /* Maximum width for the table */
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow for the table */
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        th {
            background-color: #0071c5; /* Green header */
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #E1EBEE;
        }


  </style>
  <body>
<?php 
   
  error_reporting(error_level: 0);
    $query = "SELECT * FROM user";
    mysqli_query(mysql: $con, query:$query);
    $data = mysqli_query(mysql: $con,query: $query);

   $total =  mysqli_num_rows(result: $data);
  //echo $total;
   if($total != 0)

   {
    ?>
 <h2> <align="center"><br><marquee>Display Register Records</marquee></h2>
<br><br><br><br><br>
<a href="main.php">
<input type="button" value="Log out"  class="btn"></a>
</a>
<br><br>
 <center><table border="1px" cellspacing="5" width="100%">
    <tr>  
    <th width="20%">username</th>
   <th  width="20%">email</th>
    <th width="20%">password</th>
    <th width="20%">confirmpassword</th>
    <th width="20%">operations</th>
  </tr>

<?php
   while($result = mysqli_fetch_assoc(result: $data))
   {
    echo"<tr> 
        <td>".$result["username"]."</td>
         <td>".$result["email"]."</td>
      <td>".$result["password"]."</td>
      <td>".$result["confirmpassword"]."</td>
      <td><a href='update.php?email=$result[email]'><input type='submit' value='Update' class='update'></a>
      <a href='delete.php?email=$result[email]'><input type='submit' value='Delete' class='delete' onclick='deletemsg()'></a></td>
      </tr>
      ";
   }
}
else{
    echo "table has no records";
}
?>
</table>
</center>
<br><br><a href="visible.php">
<input type="button" value="Next"  class="btn"></a>
<script>
function deletemsg(){
  return confirm('Are you want to delete record?');
}
</script>

  </body>
  </html>