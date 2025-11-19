<?php
include "../config.php";
$result = $conn->query("SELECT * FROM Supplier");
?>
<!DOCTYPE html>
<html>
<head>
<title>Suppliers</title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<h2>Supplier List</h2>

<a href="add.php" class="btn-add">Add Supplier</a>
<br><br>

<table>
    <tr>
        <th>ID</th><th>Name</th><th>Phone</th><th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['Supplier_ID'] ?></td>
        <td><?= $row['Supplier_Name'] ?></td>
        <td><?= $row['Supplier_Phone'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['Supplier_ID'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['Supplier_ID'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>