<?php
include "../config.php";

$query = "SELECT Product.Product_ID, Product.Product_Name, Product.Category, Supplier.Supplier_Name 
          FROM Product
          LEFT JOIN Supplier ON Product.Supplier_ID = Supplier.Supplier_ID";

$result = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<h2>Product List</h2>

<a href="add.php" class="btn-add">Add Product</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Supplier</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['Product_ID'] ?></td>
        <td><?= $row['Product_Name'] ?></td>
        <td><?= $row['Category'] ?></td>
        <td><?= $row['Supplier_Name'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['Product_ID'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['Product_ID'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>