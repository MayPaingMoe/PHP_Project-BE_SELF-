<?php
// require "insertsql.php";
// $insert=new insert();
// $admininsert=$insert->insertAdmin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Admin</title>
</head>
<body>
    <form method="Post" action="insert.php">
    <div>
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <br>
    <div>
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <br>
    <div>
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit">Ok</button>
    </form>
</body>
</html>