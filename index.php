<?php
include "db.php";

$sql = "select * from products order by id desc";
$result = mysqli_query($conn, $sql);
?>
<!-- Test Abdalwahab -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Electro Store</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar">
    <h2>Electro Store</h2>
    <a href="admin_login.php">Admin Dashboard</a>
</div>

<div class="hero">
    <h1>Best Electronic Products</h1>
    <p>Find laptops, screens, headphones and more.</p>

    <input type="text" id="searchInput" placeholder="Search products...">
</div>

<div class="products-container">

<?php while($row = mysqli_fetch_assoc($result)) { ?>

    <div class="product-card">
        <a class="product-link" href="product.php?id=<?php echo $row['id']; ?>">

        <img src="<?php echo $row['image']; ?>">
</a>
        <div class="product-info">
            <span><?php echo $row['category']; ?></span>
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <h4>$<?php echo $row['price']; ?></h4>
        </div>
    </div>

<?php } ?>

</div>

<script src="script.js"></script>

</body>
</html>