<!DOCTYPE html>
<head>
    <title>Belajar PHP - 8</title>
</head>
<body>
    <?php
    $value = 'Favian';
    $value2 = 'Favian Astama';
    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600);
    echo "<h1>Ini Halaman Pengetesan Cookie</h1>";
    echo "<h2>Klik <a href='cookie2.php'>disini</a>Untuk Pemeriksaan Cookies</h2>"
    ?>
</body>
</html>