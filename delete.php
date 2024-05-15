<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id_wisata = $_GET['id'];

    $sql = "DELETE FROM user_admin WHERE id_wisata='$id_wisata'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location:admin_page.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
