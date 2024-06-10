<?php
$db = mysqli_connect('localhost', 'root', '', 'apotek');

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}else{
    // echo "Connected successfully";
}

?>