<?php 

/**
 * 
 */
class mobil

{
	public $merk;
	public $warna;
	public $ukuran;
	public $harga;
	
	public function mobil_1()
	{

		return " Mobil tersebut adalah barang dengan merk terbaik.";
	}
	public function mobil_2()
	{
		return " Mobil tersebut memiliki warna yang indah.";
	}
	public function mobil_3()
	{
		return " Mobil tersebut memiliki ukuran yang besar.";
	}
	public function mobil_4()
	{
		return " Mobil tersebut mahal tetapi berkualitas.";
	}
}



$mobil = new mobil();
$mobil -> merk = " Mobil tersebut adalah barang dengan merk terbaik.";
$mobil -> warna = " Mobil tersebut memiliki warna yang indah.";
$mobil -> ukuran = " Mobil tersebut memiliki ukuran yang besar.";
$mobil -> harga = " Mobil tersebut mahal tetapi berkualitas.";

echo "Mobil yang sangat dianjurkan untuk dipakai : ";
echo "<br>";
echo "1. " .$mobil-> merk;
echo "<br>";
echo "2. " . $mobil-> warna;
echo "<br>";
echo "3. " .  $mobil-> ukuran;
echo "<br>";
echo "4. " . $mobil-> harga;
echo "<br>";







?>