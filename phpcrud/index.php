<?php
require_once "header.php";
require_once "connection.php";

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
?>
<div class="row">
    <div class="col-md-12">
        <?php require_once "message.php"; ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <form action="insert.php" method="post">
            <div class="form-group mb-2">
                <label for="name">Name</label>
                <input type="text" name="name" require class="form-control" id="name">
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="text" name="email" require class="form-control" id="name">
            </div>
            <div class="form-group mb-2">
                <label>Gender</label><br>
               <label> <input type="radio" name="gender" value="male">Male</label> &ensp;
               <label> <input type="radio" name="gender" value="female">Female</label>

            </div>
            <div class="form-group mb-2">
                <label>Language</label><br>
               <label> <input type="checkbox" name="language[]" value="nepali">Nepali</label> &ensp;
               <label> <input type="checkbox" name="language[]" value="english">English</label>
               <label> <input type="checkbox" name="language[]" value="chinese">Chinese</label>
            </div>
            <div class="form-group mb-3">
                <label for="country">Country</label>
                <select name="country" id="country" class="form-control">
                    <option value="">---Select Country---</option>
                    <option value="nepal">Nepal</option>
                    <option value="china">China</option>
                    <option value="india">India</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-success"> Add Record</button>
            </div>
        </form>

    </div>
    <div class="col-md-8">
        <table class="table talbe-hover">
            <thead>
                <tr>
                    <th>S.n</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $key=>$user){ ?>
                <tr>
                    <td><?=++$key;?></td>
                    <td><?=$user['name'];?></td>
                    <td><?=$user['email'];?></td>
                    <td><?=$user['gender'];?></td>
                    <td><?=$user['language'];?></td>
                    <td><?=$user['country'];?></td>
                    <td>
                        <a href="edit.php?id=<?=$user['id']?>">Edit</a>
                        <a href="delete.php?id=<?=$user['id']?>"
                        onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>



<?php
require_once "footer.php";
?>
