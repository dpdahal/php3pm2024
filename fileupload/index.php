<?php
$conn =mysqli_connect('localhost','root','','phpcrud');

$sql="SELECT * FROM gallery";
$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <h1>File Upload</h1>
        <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <button>Add Record</button>
        </form>
        <hr>
        <?php foreach($result as $image){ ?>
        <img src="uploads/<?=$image['name']?>" width="200" alt="">
        <a href="delete.php?id=<?=$image['id']?>">Delete</a>
        <?php } ?>
    </blockquote>
</body>
</html>