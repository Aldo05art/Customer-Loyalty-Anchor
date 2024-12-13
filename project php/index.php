<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Loyalty Anchor</title>
    <link rel="stylesheet" href="index.css">
</head>
<body onload="halamanDimuat()">
    <?php
        // Menampilkan alert "Selamat datang di website" saat halaman dimuat
        echo "<script>alert('Selamat datang di website!');</script>";
    ?>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="nav">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Testimonial</a>
                <a href="#">Contact</a>
            </div>
            <div class="content fade-in">
                <h1>Customer Loyalty Anchor</h1>
                <p>Pelayaran Digital Menuju Destinasi Tanpa Batas<br>"CV.Cemara Marina Servisindo"</p>
                <div class="buttons">
                    <button><a href="login.php">signin</a></button>
                    <button><a href="register.php">signup</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="index.js"></script>
</body>
</html>
