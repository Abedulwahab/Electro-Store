<?php

include "db.php";

$sql = "select * from products order by id desc";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="style.css">

    <style>

        .dashboard{
            width:90%;
            margin:40px auto;
        }

        .top-bar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .products-table{
            width:100%;
            border-collapse:collapse;
            background:#1e293b;
            border-radius:15px;
            overflow:hidden;
        }

        .products-table th,
        .products-table td{
            padding:15px;
            text-align:center;
        }

        .products-table th{
            background:#0f172a;
        }

        .products-table img{
            width:90px;
            height:90px;
            object-fit:cover;
            border-radius:10px;
        }

        .action-btn{
            padding:10px 15px;
            border:none;
            border-radius:8px;
            color:white;
            cursor:pointer;
        }

        .edit{
            background:#0ea5e9;
        }

        .delete{
            background:#ef4444;
        }

    </style>

</head>

<body>

<div class="dashboard">

    <div class="top-bar">

     <h1>Admin Dashboard</h1>

<div style="display:flex; gap:15px;">

    <a href="create_admin.php">
        <button class="btn">
            Create Admin
        </button>
    </a>

    <a href="add_product.php">
        <button class="btn">
            Add Product
        </button>
    </a>

    <a href="index.php">
        <button class="btn">
            Homepage
        </button>
    </a>

</div>

    </div>

    <table class="products-table">

        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td>
                <img src="<?php echo $row['image']; ?>">
            </td>

            <td>
                <?php echo $row['name']; ?>
            </td>

            <td>
                $<?php echo $row['price']; ?>
            </td>

            <td>
                <?php echo $row['category']; ?>
            </td>

            <td>

           

           <a href="delete_product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">
    <button class="action-btn delete">Delete</button>
</a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>

</html>