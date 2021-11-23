<!--Tugas 6 - Hendamia Yohana Sembiring-->
<head>
    <title>Tugas 6 - Toko Buah ITERA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <header style="background-image: url(./assets/orange\ header.jpg);">
        <strong>TOKO BUAH ITERA</strong>
    </header>
</head>
<body>
    <!--Membuat Daftar Harga Buah di TOKO BUAH ITERA-->
	<table cellspacing="3">
        <tr>
            <td colspan="2">
                <strong>DAFTAR HARGA BUAH</strong>
            </td>
        </tr>
        <tr>
            <td><strong>Nama Buah</strong></td>
            <td><strong>Harga Buah Per Kg</strong></td>
        </tr>
        <tr>
            <td>Mangga</td>
            <td>Rp 15.000</td>
        </tr>
        <tr>
            <td>Jambu</td>
            <td>Rp 13.000</td>
        </tr>
        <tr>
            <td>Salak</td>
            <td>Rp 10.000</td>
        </tr>
    </table>
<br><br>
<!--formuir pengisian-->
	<form method="POST" onsubmit="result()">
	    <table>
			<thead>
				<tr>
                    <td colspan="2">
                        <strong>MASUKAN DAFTAR PESANAN ANDA</strong>
                    </td>
				</tr>
				<tr>
					<td><strong>Nama Buah</strong></td>
					<td><strong>Jumlah kilogram</strong></td>
				</tr>
			</thead>
	    	<tbody>
				<tr>
					<td><label >Mangga</label></td>
					<td><input type="number" min="0" name="BuahMangga" style="width: 50px" placeholder="0" value="0" ></td>
				</tr>
				<tr>
				    <td><label >Jambu</label></td>
					<td><input type="number" min="0" name="BuahJambu" style="width: 50px" placeholder="0" value="0" ></td>
				</tr>
				<tr>
					<td><label >Salak</label></td>
					<td><input type="number" min="0" name="BuahSalak" style="width: 50px" placeholder="0" value="0" ></td>
				</tr>
                <tr>
                    <td colspan ='2'>
                        <center><button  id="btn" name="pesan">Hitung</button></center>
                    </td>
                </tr>
			</tbody>
		</table>
    <br>
			<!--Button digunakan untuk inputan-->
			
	</form>
	<table>
	    <thead>
        <tr>
			<td colspan="3">
                <strong>STRUK PEMBAYARAN</strong>
            </td>
			</tr>
			<tr>
				<td><strong>Nama Buah</strong></td>
				<td><strong>Jumlah Pesanan (Kg)</strong></td>
				<td><strong>Harga (Rupiah)</strong></td>
			</tr>
			
		<!--result belanjaan akan ditampilkan disini-->
	    </thead>
		<tbody id="cetak">	

		</tbody>
	</table>
</body>

<!--Memanggil file calculate.php untuk perhitungan biaya-->
<?php include('calculate.php') ?>
<script type="text/javascript">
	function result() {
		var tulis = document.getElementById('cetak');
		var text ="";

		<?php for ($i=0; $i < $beli->getIterasi(); $i++) {  ?>
			var nama_buah = '<?php echo $beli->getNamaBuah($i); ?>';
			var jml_kg = '<?php echo $beli->getJmlBuah($i); ?>';
			var harga_buah = '<?php echo $beli->getHargaSekilo($i); ?>';
			text += " <tr> <td> "+nama_buah+"</td> "+" <td> "+jml_kg+"</td> "+" <td> "+harga_buah+"</td> </tr>";
		<?php } ?>
		var total = <?php echo $beli->getTotal(); ?>	
		text += "<tr><td colspan='2'><strong>Total Biaya Belanjaan : </strong></td> <td>"+total+"</td> </tr>"

		tulis.innerHTML = text;
	}
	result();
</script>
<br>