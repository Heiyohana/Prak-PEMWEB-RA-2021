<!DOCTYPE html>

<head>
	<title>Soal Kalkulator - 119140178</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = '';
?>

<body>
    <div id="calc-cart">
	<h1>Berhitung dengan Mudah yuk!</h1>
    <h3>Masukkan dahulu 2 angkanya yaa...</h3>
	  <form action="" method="post" id="calc-form">
            <p>
                <b>Angka 1 : </b> <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" /> 
            </p>
            <p>
                <b>Angka 2 : </b> <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> 
            </p>
            <input type="submit" name="Result" value="Hasil" />
            <!--<input type="submit" name="operator" value="Tambah" />-->
            <!--<input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>-->
            <p>
                Berikut Hasil Perhitungannya ^.^ 
                <br>
                <b>Penjumlahan</b><br>
                Operator : + <br>
                <?php echo "Hasil : " . $num1 + $num2;?>
                <br><br>
                <b>Pengurangan</b><br>
                Operator : - <br>
                <?php echo "Hasil : " . $num1 - $num2;?>
                <br><br>
                <b>Perkalian</b><br>
                Operator : * <br>
                <?php echo "Hasil : " . $num1 * $num2;?>
                <br><br>
                <b>Pengurangan</b><br>
                Operator : / <br>
                <?php echo "Hasil : " . $num1 / $num2;?>
            </p>
	  </form>
    </div>
</body>
<footer>
    <p>Hendamia Yohana Sembiring - 119140178 - Minggu ke 5</p>
</footer>
</html>