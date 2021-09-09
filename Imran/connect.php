<!DOCTYPE html>
<html><head>
  <link rel="stylesheet" href="Home.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber']; 

/* Database Connection */
$conn = new mysqli('localhost','root','','webstore');
if(!$conn){  
  die('Connection falied: '.mysqli_error());  
}
else{
    $stmt = $conn->prepare("insert into registration(firstName,email,gender,password,phonenumber)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$firstName,$email,$gender,$password,$phonenumber);
    $stmt->execute(); 
    $stmt->close();
    $sql= "select *from registration";
    $result= mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    echo "<table border='2'>
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
    $conn->close();
}
?>
</body>
</html>