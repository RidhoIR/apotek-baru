<?php
include 'koneksi.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];

    $sql = "UPDATE products SET name='$name', price='$price', stok='$stok' WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        header("Location: index.php");
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
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
    <div class="form-layout">
        <h2>Edit Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
            <label>Price:</label><br>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" required><br>
            <label>Stok:</label><br>
            <input type="number" name="stok" value="<?php echo $product['stok']; ?>" required><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>