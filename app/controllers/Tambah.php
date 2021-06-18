<?php  
/**
 * 
 */
class Tambah extends Controller
{
	
	public function index()
	{
		$this->view('templates/header');
		$this->view('tambah/index');
		$this->view('templates/footer');
	}
}
?>