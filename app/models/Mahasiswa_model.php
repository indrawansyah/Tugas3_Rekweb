<?php  

class Mahasiswa_model {
	private $mhs = [
		[
			"nama" => "Yogi Nugraha",
			"nrp" => "173040001",
			"email" => "yogi@mail.unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Erdika Kusuma Diningrat",
			"nrp" => "173040002",
			"email" => "R@mail.unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Indrawansyah",
			"nrp" => "173040003",
			"email" => "indrawansyah@mail.unpas.ac.id",
			"jurusan" => "Teknik Informatika"
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}