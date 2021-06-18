<?php  
/**
 * 
 */
class Berita extends Controller
{
	
	public function index($id)
	{
		$beritaID = (int)$id;
		$data['berita'] = $this->model('Berita_model')->readBerita($beritaID);
		$this->view('templates/header');
		$this->view('read/index',$data);
		$this->view('templates/footer');
	}

	public function add()
	{
		$this->model('Berita_model')->addBerita($_POST);
		header('location: '. BASEURL . '/');
	}

	public function editForm($id)
	{
		$beritaID = (int)$id;
		$data['berita'] = $this->model('Berita_model')->readBerita($beritaID);
		$this->view('templates/header');
		$this->view('edit/index',$data);
		$this->view('templates/footer');
	}

	public function edit($id)
	{
		$beritaID = (int)$id;
		$this->model('Berita_model')->editBerita($beritaID, $_POST);
		header('location: '. BASEURL . '/');
	}

	public function delete($id)
	{
		$beritaID = (int)$id;

		$this->model('Berita_model')->deleteBerita($beritaID);
		header('location: '. BASEURL . '/');
	}
}
?>