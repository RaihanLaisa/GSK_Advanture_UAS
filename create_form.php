<!-- create_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wisata</title>
    <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <h2>Tambah Data Wisata Baru</h2>
    <form action="create.php" method="post">
        <label for="nama">Nama Wisata:</label><br>
        <input type="text" id="nama" name="nama"><br>
        
        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori"><br>
        
        <label for="foto">Foto:</label><br>
        <input type="text" id="foto" name="foto"><br>
        
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br>
        
        <label for="ulasan">Ulasan:</label><br>
        <input type="text" id="ulasan" name="ulasan"><br>
        
        <label for="rating">Rating:</label><br>
        <input type="number" id="rating" name="rating"><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>