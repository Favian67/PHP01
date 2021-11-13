<!DOCTYPE html>
<head>
    <title>Belajar PHP - 2</title>
</head>
<body>
    <?php
    $text = "Perulangan";
    echo "<h1>" . $text . "</h1>";
    echo date("d.m.Y H:i:s") . "<br>" ;
    
    $bintang=6;
	for($a=1; $a<=$bintang; $a++){
	for($c=$bintang; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    ?>
</body>
</html>