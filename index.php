<?php

require "koneksi.php";
// Redirect non-admin users
// redirectIfNotAdmin();
$sql = "SELECT * FROM products";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
    <div class="admin-container">
        <h2>Product List</h2>
        <a href="tambah.php">Create New Product</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stok</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td>
                        <a href="Edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>