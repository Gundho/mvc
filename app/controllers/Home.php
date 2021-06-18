<?php  
/**
 * 
 */
class Home extends Controller
{
	
	public function index()
	{
		$data['berita'] = $this->model('Berita_model')->getBerita();
		$this->view('templates/header');
		$this->view('home/index',$data);
		$this->view('templates/footer');
	}
}
?>