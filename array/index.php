<?php

// $name='ram';
// $name1='sita';


// $users=['ram','sita','hari',456];

// print_r($users);
// var_dump($users);
// echo $users;


// $data=['name'=>'ram','age'=>25,'address'=>'ktm'];

// echo $data['name'];


// $_POST
// $_GET
// $_REQUEST
// $_FILES
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV


if(!empty($_POST)){
    $username = $_POST['username'];
    $email = $_POST['email'];
}
?>
<form action="" method="post">
   Name: <input type="text" name="username"><br>
   Email: <input type="email" name="email"><br>
    <button>Add Record</button>
</form>
<hr>
<?php if(!empty($_POST)) {?>
<h1>Hello: <?=$username;?></h1>
<h1>Email:<?php echo $email;?></h1>
<?php } ?>