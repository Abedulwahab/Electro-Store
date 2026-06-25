<?php

include "db.php";

$id = $_GET['id'];

$sql = "select * from products where id = $id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title><?php echo $row['name']; ?></title>

    <link rel="stylesheet" href="style.css">

    <style>

        .product-page{
            width:85%;
            margin:60px auto;
            display:flex;
            gap:40px;
            align-items:center;
        }

        .product-image{
            flex:1;
        }

        .product-image img{
            width:100%;
            border-radius:25px;
            background:white;
            padding:20px;
        }

        .product-details{
            flex:1;
        }

        .product-details span{
            color:#38bdf8;
            font-size:18px;
        }

        .product-details h1{
            font-size:50px;
            margin:15px 0;
        }

        .product-details p{
            color:#dbeafe;
            line-height:1.8;
            font-size:18px;
        }

        .product-details h2{
            color:#22c55e;
            font-size:38px;
        }

        .back-btn{
            display:inline-block;
            margin-top:20px;
            padding:14px 22px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:12px;
        }

    </style>

</head>

<body>

<div class="product-page">

    <div class="product-image">

        <img src="<?php echo $row['image']; ?>">

    </div>

    <div class="product-details">

        <span>
            <?php echo $row['category']; ?>
        </span>

        <h1>
            <?php echo $row['name']; ?>
        </h1>

        <p>
            <?php echo $row['description']; ?>
        </p>

        <h2>
            $<?php echo $row['price']; ?>
        </h2>

        <a class="back-btn" href="index.php">
            Back to Store
        </a>

    </div>

</div>

</body>

</html>