<?php
include '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../../assets/image/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
        if ($db->query($sql) === TRUE) {
            header("Location: view_katalog.php");
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    } else {
        echo "Failed to upload image";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
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
    <div class="form-layout">
        <h2>Create Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Price:</label><br>
            <input type="number" name="price" required><br>
            <label>Image:</label><br>
            <input type="file" name="image" required><br><br>
            <button type="submit">Create</button>
        </form>
    </div>
</body>

</html>