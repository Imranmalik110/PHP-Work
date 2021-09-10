<?php
include 'database2.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="INSERT INTO `crud`(`Id`, `name`, `email`, `mobile`, `password`) VALUES ('','$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:display.php');
        
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="contanier-fluid">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Crud Form</h1>
            </div>
            <div class="panel-body">
                <form method="POST">
                <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" id="name" name="name" />
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" />
                    </div> 
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" />
                    </div>
                    <div class="form-group">
                        <label for="pasword">Password</label>
                        <input type="Password" class="form-control" id="password" name="password" />
                    </div>
                    <button class="btn btn-primary" name="submit">Submit</button>
                </form>                    
</body>
</html>