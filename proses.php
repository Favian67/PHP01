<!DOCTYPE html>

<head>
    <title>Belajar PHP - 11</title>
</head>

<body>
    <?php
    if (isset($_GET['nama']) AND isset($_GET['email']))
    {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
    }
    else
    {
        echo "Maaf, Anda Harus Mengakses Halaman Ini Dari Form.Html<br><br>";
    }
    if (!empty($nama))
    {
        echo "Nama: $nama <br /> Email: $email";
    }
    else
    {
        die("Maaf,Anda Harus Mengisi Nama");
    }
    ?>
</body>

</html>