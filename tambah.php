<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO products (name, price, stok) VALUES ('$name', '$price', '$stok')";
    if ($db->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body>
    <div class="form-layout">
        <h2>Create Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Name:</label><br>
            <input type="text" name="name" required><br>
            <label>Price:</label><br>
            <input type="number" name="price" required><br>
            <label>Stok:</label><br>
            <input type="number" name="stok" required><br><br>
            <button type="submit">Create</button>
        </form>
    </div>
</body>

</html>