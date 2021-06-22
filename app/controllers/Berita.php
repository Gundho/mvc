<?php  
/**
 * 
 */
require_once 'Berita_class.php';
require_once 'Kategori_class.php';
class Berita extends Controller
{
	
	public function index($id)
	{
		$beritaID = (int)$id;
		// $data['berita'] = $this->model('Berita_model')->readBerita($beritaID);
		$berita = new Berita_class();
		$data['berita'] = $berita->readBerita($beritaID);		
		$this->view('templates/header');
		$this->view('read/index',$data);
		$this->view('templates/footer');
	}

	public function add()
	{
		$berita = new Berita_class();
		// $this->model('Berita_model')->addBerita($_POST);
		$berita->addBerita($_POST);
		header('location: '. BASEURL . '/');
	}

	public function editForm($id)
	{
		$beritaID = (int)$id;
		$berita = new Berita_class();
		// $data['berita'] = $this->model('Berita_model')->readBerita($beritaID);
		$data['berita'] = $berita->readBerita($beritaID);
		$this->view('templates/header');
		$this->view('edit/index',$data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$beritaID = (int)$id;
		$berita = new Berita_class();
		// $this->model('Berita_model')->editBerita($beritaID, $_POST);
		$berita->editBerita($beritaID, $_POST);
		header('location: '. BASEURL . '/');
	}

	public function delete($id)
	{
		$beritaID = (int)$id;

		$berita = new Berita_class();
		// $this->model('Berita_model')->deleteBerita($beritaID);
		$berita->deleteBerita($beritaID);
		header('location: '. BASEURL . '/');
	}
}
?>