<?php 
	class Buku
	{
		public $judul;
		public $jenisBuku;
		public $jumlahHalaman;

		function __construct($judulBuku, $jenisBuku, $jumlahHalaman)
		{
			$this->judul = $judulBuku;
			$this->jenisBuku = $jenisBuku;
			$this->jumlahHalaman = $jumlahHalaman;
			echo "Judul Buku : ".$this->judul."<br>Jenis Buku : ".$this->jenisBuku."<br>Jumlah Halaman : ".$this->jumlahHalaman;
		}
	}

	$buku1 = new Buku('NKTCHI', 'Novel', '200');
 ?>