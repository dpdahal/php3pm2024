<?php

$conn =mysqli_connect('localhost','root','','phpcrud');



if(!empty($_FILES)){
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $filename = md5(uniqid()).'.'.$ext;
    $extension=['jpg','jpeg','png','gif'];
    $phpFileUploadErrors = [
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    ];
    if($_FILES['image']['error'] !== 0){
        $error_message = $phpFileUploadErrors[$_FILES['image']['error']];
        echo $error_message;
        exit;
    }
    if(!in_array($ext,$extension)){
        echo "Invalid file format only sopport: ".implode(',',$extension); 
        exit;
    }
   
    $uploadPath = 'uploads/'.$filename;
    $tmp_name = $_FILES['image']['tmp_name'];
    if(move_uploaded_file($tmp_name, $uploadPath)){
        
        $sql = "INSERT INTO gallery(name) VALUES ('$filename')";
        if(mysqli_query($conn,$sql)){
           header("Location: index.php");
        }else{
            echo "file not uploaded";
        }

    }else{
        echo "file not uploaded";
    }


}else{
    header("Location: index.php");
}