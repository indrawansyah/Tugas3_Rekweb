<?php 

class About {
	public function index($nama = 'Indrawansyah', $pekerjaan = 'Mahasiswa', $umur = 21 )
	{
		echo "Hallo, Nama saya $nama, Saya adalah $pekerjaan. Saya berumur $umur tahun. ";
	}
	public function page ()
	{
		echo "About/page";
	}
}