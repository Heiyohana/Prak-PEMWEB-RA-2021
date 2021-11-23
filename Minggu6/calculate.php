<?php 
class Buah{
	private $namaBuah, $jmlKg, $hrgKg;
	
	//Magic Method Konstruksi
	function __construct($namaBuah=NULL, $hrgKg=NULL, $jmlKg=0){
		if( $namaBuah!=NULL && $hrgKg!=NULL ){
			//mengambil nilai 
			$this->namaBuah = $namaBuah;
			$this->hrgKg = $hrgKg * $jmlKg;
			$this->jmlKg = $jmlKg;
		}
	}
	function getNamaBuah(){
		return $this->namaBuah;
	}
	function getHargaSekilo(){
		return $this->hrgKg;
	}
	function getJmlBuah(){
		return $this->jmlKg;	
	}
}

//Kelas Menghitung Orderan Pembeli
class order{
	private static $daftar = array(), $totalHarga = 0, $iterasi = 0;

	//Magic Method Konstruksi
	function __construct( Buah $jenisBuah = NULL ){
		if ($jenisBuah != NULL) {
			self::$daftar[self::$iterasi] = $jenisBuah;
			self::$iterasi++;
			self::$totalHarga = self::$totalHarga + $jenisBuah->getHargaSekilo();
		}
	}

	//Fungsi get dibawah ini untuk mengambil informasi masukan terkait daftar yang dibeli
	function getIterasi(){
		return self::$iterasi;
	}
	function getNamaBuah($i=0){
		return self::$daftar[$i]->getNamaBuah();
	}
	function getHargaSekilo($i=0){
		return self::$daftar[$i]->getHargaSekilo();
	}
	function getJmlBuah($i=0){
		return self::$daftar[$i]->getJmlBuah();	
	}
	function getTotal(){
		return self::$totalHarga;
	}

}
$beli = new order();
$jenisBuah = new Buah();

if( isset($_POST['pesan']) ){
	if($_POST['BuahMangga'] != NULL && $_POST['BuahJambu'] != NULL && $_POST['BuahSalak'] != NULL){
		$jenisBuah = new Buah("Mangga", 15000, $_POST['BuahMangga']);	
		$beli = new order($jenisBuah);
		$jenisBuah = new Buah("Jambu", 13000, $_POST['BuahJambu']);	
		$beli = new order($jenisBuah);
		$jenisBuah = new Buah("Salak", 10000, $_POST['BuahSalak']);	
		$beli = new order($jenisBuah);
	}
}
?>