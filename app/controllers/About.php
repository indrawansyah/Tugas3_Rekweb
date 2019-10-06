<?php 

class About extends Controller {
	public function index($nama = 'Indrawansyah', $pekerjaan = 'Mahasiswa', $umur = 21 )
	{
		$this->view('about/index');
	}
	public function page ()
	{
		$this->view('about/page');
	}
}