<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "user_db";
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT kategori, AVG(rating) AS avg_rating FROM user_rating GROUP BY kategori";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo json_encode(array("message" => "0 results"));
}
$conn->close();

echo json_encode($data);
?>