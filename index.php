<?php
	// Saya menggunakan PHP CLI

	$arr = [
		['Kopi', 1000], ['Gorengan', 500], ['Rokok', 1500]
	];

	echo "Masukkan id : ";
	$id = trim(fgets(STDIN)) - 1;

	if(!isset($arr[$id])){
		echo "Not found";
	}else{
		echo "Masukkan jumlah : ";
		$jumlah = trim(fgets(STDIN));

		$barang = $arr[$id];
		echo 'Pembelian '.$barang[0].' sejumlah '.$jumlah.' buah. Total bayar Rp '.number_format($barang[1] * $jumlah);
	}
?>