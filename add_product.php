<?php

include "db.php";

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $image_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name, "uploads/".$image_name);

    $image_path = "uploads/".$image_name;

    $sql = "insert into products(name,price,description,category,image)
            values('$name','$price','$description','$category','$image_path')";

    if(mysqli_query($conn, $sql)){

        echo "<script>
                window.location.href='admin.php';
              </script>";

        exit();
    }
    else{
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Add Product</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-page">

    <div class="form-box">

        <a href="admin.php">
            <button type="button" class="btn">
                Back to Dashboard
            </button>
        </a>

        <br><br>

        <h1>Add Product</h1>

        <form method="POST" enctype="multipart/form-data">

            <div class="input-group">
                <label>Product Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="input-group">
                <label>Price</label>
                <input type="number" name="price" required>
            </div>

            <div class="input-group">
                <label>Category</label>
                <input type="text" name="category" required>
            </div>

            <div class="input-group">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="input-group">
                <label>Product Image</label>
                <input type="file" name="image" required>
            </div>

            <button class="btn" type="submit" name="add">
                Add Product
            </button>

        </form>

    </div>

</div>

</body>

</html>