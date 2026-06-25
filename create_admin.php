<?php

include "db.php";

if(isset($_POST['create'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into admins(username,password)
            values('$username','$password')";

    mysqli_query($conn, $sql);

    header("Location: admin.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Create Admin</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-page">

    <div class="form-box">

        <h1>Create Admin</h1>

        <form method="POST">

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button class="btn" type="submit" name="create">
                Create Admin
            </button>

        </form>

    </div>

</div>

</body>

</html>