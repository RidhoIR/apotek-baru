<?php

require "../../koneksi.php";
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) && $_SESSION['is_admin'] == 0) {
    header("Location: ../login.php");
    exit();
}

// Redirect non-admin users
// redirectIfNotAdmin();
$sql = "SELECT * FROM products";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="../../assets/image/logo1.png" alt="Logo" />
        </a>
        <nav class="headbar">
            <a href="../../admin.php">Home</a>
            <a href="../../pages/katalog/view_katalog.php">Katalog</a>
            <a href="../../Action/logout.php">Logout</a>
        </nav>
    </header>
    <div class="admin-container">
        <h2>Product List</h2>
        <a href="create_katalog.php">Create New Product</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><img src="../../assets/image/<?php echo $row['image']; ?>" width="100"></td>
                    <td>
                        <a href="update_katalog.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_katalog.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>