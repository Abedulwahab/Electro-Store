<?php

include "db.php";

$id = $_GET['id'];

$sql = "delete from products where id = $id";

mysqli_query($conn, $sql);

header("Location: admin.php");
exit();

?>