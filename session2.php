<!DOCTYPE html>
<head>
    <title>Belajar PHP - 7</title>
</head>
<body>
    <?php session_start();
    echo "Nama Anda Adalah ".$_SESSION['nama'];
    echo "<br/><a href='session01.php'>Menuju ke Halaman Pertama</a>";
    ?>
</body>
</html>