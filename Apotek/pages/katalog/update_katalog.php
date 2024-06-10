<?php
include '../../koneksi.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../../assets/image/" . basename($image);

    if ($image) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id";
        }
    } else {
        $sql = "UPDATE products SET name='$name', price='$price' WHERE id=$id";
    }

    if ($db->query($sql) === TRUE) {
        header("Location: view_katalog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

$sql = "SELECT * FROM products WHERE id=$id";
$result = $db->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
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
        <h2>Edit Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
            <label>Price:</label><br>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>
            <label>Image:</label><br>
            <input type="file" name="image"><br>
            <img src="../../assets/image/<?php echo $product['image']; ?>" width="100"><br><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>