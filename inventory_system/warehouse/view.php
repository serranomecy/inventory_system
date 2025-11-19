<?php
include "../config.php";

$result = $conn->query("SELECT * FROM warehouse");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Warehouse List</title>
</head>
<body>

<h2>Warehouse List</h2>
<a href="add.php">Add Warehouse</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Warehouse Name</th>
        <th>Location</th>
        <th>Contact Person</th>
        <th>Contact Number</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['warehouse_name']; ?></td>
        <td><?= $row['location']; ?></td>
        <td><?= $row['contact_person']; ?></td>
        <td><?= $row['contact_number']; ?></td>
        <td>
            <a href="add.php">Add Warehouse</a>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>