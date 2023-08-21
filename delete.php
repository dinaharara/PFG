<?php
include 'connect.php';
session_start();

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `articles` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:articles.php?deletesuccess=true'); // Add query parameter for successful deletion
        exit();
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>
