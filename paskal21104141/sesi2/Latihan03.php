<?php
$pr = "p1";
    if(isset($_GET["pg"])){
    $pr = $_GET["pg"];
    }
$konten = "";
$judulpage = "";

    switch($pr){
        case "p1":
            $judulpage = "Halaman 1";
            $konten = "<h3>Halaman P1</h3>";
            $konten .= "<p>Menampilkan Halaman P1</p>";
            break;
         case "p2":
            $judulpage = "Halaman 2";
            $konten =  "<h3>Halaman P2</h3>";
            $konten .= "<p>Menampilkan Halaman P2</p>";
                break;
         case "p3":
            $judulpage = "Halaman 3";
            $konten = "<h3>Halaman P3</h3>";
            $konten .="<p>Menampilkan Halaman P3</p>";
                    break;
        case "p4":
            $judulpage = "Halaman 4";
            $konten = "<h3>Halaman P4</h3>";
            $konten .="<p>Menampilkan Halaman P4</p>";
                        break;
        default:
        $konten = "<h3>Halaman P1</h3>";
        $konten .= "<p>Menampilkan Halaman P1</p>";
            break;
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage;?></title>
</head>
<body>

<a href="latihan03.php?pg=p1">Halaman1</a> <a href="latihan03.php?pg=p2">Halaman2</a> <a href="latihan03.php?pg=p3">Halaman3</a> <a href="latihan03.php?pg=p4">Halaman4</a>
   <?php 
     echo $konten; 
   ?>
</body>
</html>