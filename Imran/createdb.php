<!DOCTYPE html>
<html><head>
  <link rel="stylesheet" href="Home.css">
</head></html>
<?php  
    $conn =mysqli_connect('localhost','root','','webstore');  
    if(!$conn )  
    {  
      die('Could not connect: ' .mysqli_connect_error());  
    }
    else{  
    #echo 'Connected successfully <br/>'; 
    }
    $sql= "select *from registration";
    $result= mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    echo "<table border='1'>
    <tr>
      <th>Id</th>
      <th>FirstName</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Password</th>
      <th>Phone Number</th>
    </tr>";
    if($num>0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>".$row['Id']."</td>";
        echo "<td>".$row['firstName']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
      }
    }
?>   
