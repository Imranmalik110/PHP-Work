<?php
include 'database2.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from crud where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:display.php');
    }
    else
    {
        die(mysqli_errno($conn));
    }
}
?>