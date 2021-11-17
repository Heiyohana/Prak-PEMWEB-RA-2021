<!DOCTYPE html>
<html>

<?php
    $data= array("larine", "aduh", "rahman", "qifuat", "aulia", "toda", "anevi", "samid", "zulfi", "kifulat");
    
    //Proses Mengurutkan Data dengan fungsi berikut
    function sort_without_function($data){
        for($i=0;$i<count($data);$i++){
            for($j=0;$j<count($data)-1;$j++){
                if($data[$j]>$data[$j+1]){
                    $temp=$data[$j];
                    $data[$j]=$data[$j+1];
                    $data[$j+1]=$temp;
                }
            }
        }
        return $data; //Mencetak Hasilnya
    }
    //print array
    function print_array($data){
        for($i=0;$i<count($data);$i++){
            echo $data[$i].", ";
        }
    }
    

    echo "<h1>Mengurutkan Data</h1><br>";

    echo "Data-data yang belum terurut = <br>"; print_array($data); echo "<br>";
    $data=sort_without_function($data);
    
    echo "Data-data setelah pengurutan = <br>"; print_array($data);  
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Mengurutkan Data - 119140178</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<footer>
    <p>Hendamia Yohana Sembiring - 119140178 - Minggu ke 5</p>
</footer>
</html>