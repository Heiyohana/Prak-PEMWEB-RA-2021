<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Bilangan Prima - 119140178</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<?php
    //Variabel jumlah prima
    $jmlPrima=0;

    //fungsi mencari prima
    function prima(){
    //Algoritma mencari bilangan prima
    for($i = 1; $i <= 50; $i++){  
            $temp = 0; 
            //faktor pencarian
            for($j = 1; $j <= $i; $j++){ 
                //Kondisi saat bilangan prima tidak habis dibagi 0
                if($i % $j == 0){ 
                    $temp++;
                }
            }
          //Kondisi saat prima habis dibagi dengan dirinya sendiri
            if($temp==2){
                echo $i .'&nbsp &nbsp ';
                echo "\t";

                global $jmlPrima;
                $jmlPrima++;
            } 
        }
    } 

    //fungsi menjumlahkan dan menampilkan banyaknya data bilangan prima yang sudah di cari sebelumnya
    function sum(){
        global $jmlPrima;
        echo $jmlPrima;
    }
?>
<body>
    <h1>Mencari Bilangan Prima</h1>
    
    <p>Berikut adalah bilangan Prima yang terdapat diantara angka 1 s.d 50</p>
    <?php echo prima();?><br><br>

    <br>
    <p>Banyaknya bilangan prima tersebut antara lain ada </p> 
    <?php echo sum();?>

    <br><br><p><b>Sekian dan Terimakasih</b></p>
</body>

<footer>
    <p>Hendamia Yohana Sembiring - 119140178 - Minggu ke 5</p>
</footer>
</html>