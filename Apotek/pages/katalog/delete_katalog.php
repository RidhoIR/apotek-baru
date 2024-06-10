<?php
include '../../koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";
if ($db->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error: " . $db->error;
}

header('Location: view_katalog.php');
?>
