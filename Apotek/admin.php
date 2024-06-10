<?php
require "koneksi.php";
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['username']) && $_SESSION['is_admin'] == 0) {
    header("Location: pages/login.php");
    exit();
}


$sql = "SELECT id, username, email, is_admin FROM users";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="../assets/image/logo1.png" alt="Logo" />
        </a>
        <nav class="headbar">
            <a href="../home.php">Home</a>
            <a href="pages/katalog/view_katalog.php">Katalog</a>
            <a href="Action/logout.php">Logout</a>
        </nav>
    </header>

    <div class="admin-container">
        <h1>Admin Dashboard</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Admin</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['is_admin'] ? 'Yes' : 'No'; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>

<?php
$db->close();
?>