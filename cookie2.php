<!DOCTYPE html>
<head>
    <title>Belajar PHP - 9</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['username'])){
        echo "<h1>Cookie 'username' ada. Isinya : " .$_COOKIE
        ['username']."</h1>";
    } else {
        echo "<h1> Cookie 'username' Tidak Ada.</h1>";
    }
    
    if(isset($_COOKIE['namalengkap'])){
        echo "<h1>Cookie 'namalengkap' ada. Isinya : " .$_COOKIE
        ['namalengkap']."</h1>";
    } else {
        echo "<h1> Cookie 'namalengkap' Tidak Ada.</h1>";
    }
    echo "<h2>Klik <a href='cookie1.php'>disini</a>Untuk Penciptaan Cookie</h2>"
    ?>
</body>
</html>