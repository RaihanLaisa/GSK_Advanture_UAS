<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user_admin WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Delete failed: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }

    header('Location: table.php');
    exit;
} else {
    header('Location: table.php');
    exit;
}
?>
