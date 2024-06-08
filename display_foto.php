// display_image.php
<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT foto FROM user_admin WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $foto = $row['foto'];
        
        header("Content-type: image/jpeg"); // Set appropriate header, adjust based on image type
        echo $foto;
    } else {
        echo "Image not found.";
    }
} else {
    echo "No ID specified.";
}
?>
