<?php

$conn =mysqli_connect('localhost','root','','php3pm');
if(!$conn){
    die('Connection failed');
}
$sql="SELECT * FROM students";
$studentsQuery =mysqli_query($conn,$sql);

while($student = mysqli_fetch_assoc($studentsQuery)){
    echo $student['name'].'<br>';
}


die();
?>
 <table border="1" width="100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <?php  $key=1; foreach($studentsQuery as $student) { ?>
            <tr>
                <td><?=$key;?></td>
                <td><?=$student['name']; ?></td>
                <td><?=$student['email']; ?></td>
                <td><?=$student['address']; ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            <?php $key++; } ?>
        </table>
