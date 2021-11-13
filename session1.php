<!DOCTYPE html>
<head>
    <title>Belajar PHP - 6</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['nama'] = "Raja Parningotan";
    echo "<a href='session2.php'>Menuju ke Halaman Kedua</a>";
    ?>
</body>
</html>