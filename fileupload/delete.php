<?php

$conn =mysqli_connect('localhost','root','','phpcrud');
$id=$_GET['id'];
$sql="SELECT * FROM gallery WHERE id=$id";
$result = mysqli_query($conn,$sql);
$imgRes = mysqli_fetch_assoc($result);
$name = $imgRes['name'];
$deletePath = 'uploads/'.$name;
if(file_exists($deletePath) && is_file($deletePath)){
    unlink($deletePath);
    $sql="DELETE FROM gallery WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        header("Location: index.php");
    }else{
        echo "file not deleted";
    }
}else{
    echo "file not found";
}