<?php
$email = $_POST['email'];
$password = $_POST['password'];
// Connection to the database
$conn = new mysqli('localhost','root','','webstore');
if(!$conn)
{
    die('Conncetion failed.'.mysqli_error());
}
else
{
    $stmt = $conn->prepare("select * from registration where email=?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']==$password)
        {
            echo "<h1>Login successfully</h1>";
        }
    else{
        echo "<h2>Invalid Email id or password</h2>";
    }
    }else{
        echo "<h2>Invalid Email or Password</h2>";
    }
}
?>